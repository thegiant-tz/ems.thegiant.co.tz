<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestDetail;
use Illuminate\Support\Facades\Auth;
use App\Services\RequestDetailService;
use Illuminate\Support\Facades\Storage;

class RequestController extends Controller
{
    function initiateRequest(Request $request)
    {
        $data['pageTitle'] = 'Initiate Request Form:';
        $data['requestDetails'] = RequestDetailService::getUserRequests($request);
        return view('backend.pages.v1.initiate-request', $data);
    }

    function requestList(Request $request)
    {
        $data['pageTitle'] = 'Requests';
        $data['requestDetails'] = isset($request->status) ? userRequestByStatus($request->status) : RequestDetailService::getUserRequests($request);
        return view('backend.pages.v1.request-list', $data);
    }

    function storeRequest(Request $request)
    {
        $requestDetail = RequestDetail::updateOrCreate([
            'reason_id' => $request->reason_id,
            'user_id' => authUserId(),
            'department_id' => $request->department_id,
            'description' => $request->description,
            'amount' => $request->amount,
            'payment_type' => $request->payment_type,
            'currency' => $request->currency,
            'codeId' => RequestDetailService::generateCodeId('EMS')
        ]);

        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $originalName = $file->getClientOriginalName();
                $path = Storage::disk('public')->putFileAs(env('ATTACHMENT_PATH') . 'requests/' . authUser()->id . '/', $file, $originalName);
                $requestDetail->attachments()->updateOrCreate(['path' => $path]);
            }
        }
        $requestDetail->requestTrackers()->create([
            'remarks' => $request->description,
            'user_id' => authUserId(),
            'status' => 'Approved'
        ]);
        return redirect()->route('account.request.initiate');
    }

    function requestAttachments(Request $request)
    {
        $data['pageTitle'] = 'Request (' . ($codeId = aes_decrypt($request->codeId)) . ')';
        $data['requestDetail'] = $requestDetail = requestDetailByCodeId($codeId);
        return view('backend.pages.v1.attachments', $data);
    }

    function requestAction(Request $request)
    {
        $updated = requestDetailByCodeId($request->codeId)->requestTrackers()->create([
            'remarks' => $request->remarks,
            'user_id' => authUserId(),
            'status' => isset($_POST['reject']) ? 'Rejected' : 'Approved'
        ]);

        return redirect()->route('account.request.attachments', ['codeId' => aes_encrypt($request->codeId)]);
    }
}
