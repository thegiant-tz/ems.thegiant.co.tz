<?php

namespace App\Http\Controllers;

use App\Models\Retirement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\RequestDetailService;
use Illuminate\Support\Facades\Storage;

class RetirementController extends Controller
{
    function retirements(Request $request)
    {
        $data['pageTitle'] = 'Retirements';
        $data['requestDetails'] = RequestDetailService::getUserRequestsForRetirement($request);
        $data['retirements'] = Retirement::orderBy('id', 'DESC')->paginate();
        return view('backend.pages.v1.retirements', $data);
    }

    function store(Request $request) {
        $retirement = Retirement::updateOrCreate([
            'request_detail_id' => $request->request_detail_id,
            'user_id' => Auth::user()->id,
            'description' => $request->description,
        ]);

        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $originalName = $file->getClientOriginalName();
                $path = Storage::disk('public')->putFileAs(env('ATTACHMENT_PATH') .'retirements/'. authUser()->id . '/', $file, $originalName);
                $retirement->attachments()->updateOrCreate(['path' => $path]);
            }
        }

        return redirect()->route('account.request.retirements.index');
    }
}
