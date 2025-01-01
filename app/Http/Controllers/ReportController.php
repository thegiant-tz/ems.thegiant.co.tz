<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RequestDetailService;
use Illuminate\Support\Facades\Session;

class ReportController extends Controller
{
    function index(Request $request) {
        $data['pageTitle'] = 'Report';
        $data['requestDetails'] = RequestDetailService::getUserRequests(requestAdd($request, $searchData = Session::get('search', [])));
        return view('backend.pages.v1.report', array_merge($data, $searchData));
    }

    function setSearchData(Request $request) {
        Session::put('search', $request->all());
        return redirect()->route('account.report.index');
    }
}
