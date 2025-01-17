<?php

use App\Models\Reason;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\RequestDetail;
use App\Models\RequestTracker;
use App\Models\User;

if (!function_exists('str_nbsp')) {
    function str_nbsp($string)
    {
        return str_replace(' ', '&nbsp;', $string);
    }
}

if (!function_exists('countLoop')) {
    function countLoop($paginated, $loop)
    {
        $sn = ((($currentPage = $paginated->currentPage()) > 1) ? (($paginated->perPage() * (--$currentPage)) + $loop->iteration) : $loop->iteration);

        if ($sn < 10) {
            $sn = '0' . $sn;
        }
        return $sn;
    }
}

if (!function_exists('customPaginateUrl')) {
    function customPaginateUrl($endpoint, $page = 1)
    {
        return apiRoute($endpoint) . "?page=" . $page;
    }
}

if (!function_exists('apiRoute')) {
    function apiRoute($endpoint)
    {
        return env('BASE_URL') . $endpoint;
    }
}

if (!function_exists('requestAdd')) {
    function requestAdd(Request $request, array $parameters): Request
    {
        $request->merge($parameters);
        return $request;
    }
}


if (!function_exists('reasons')) {
    function reasons()
    {
        return Reason::all();
    }
}

if (!function_exists('departments')) {
    function departments()
    {
        return Department::orderBy('name', 'asc')->get();
    }
}

if (!function_exists('requestDetailByCodeId')) {
    function requestDetailByCodeId($codeId): RequestDetail
    {
        return RequestDetail::where('codeId', $codeId)->first();
    }
}

if (!function_exists('isMyRequestTracker')) {
    function isMyRequestTracker(RequestTracker $requestTracker)
    {
        return $requestTracker->user_id == authUserId();
    }
}

if (!function_exists('isRequestRejected')) {
    function isRequestRejected(RequestDetail $requestDetail)
    {
        return $requestDetail->latest_status == 'Rejected';
    }
}

if (!function_exists('isRequest')) {
    function isRequest(RequestDetail $requestDetail)
    {
        return $requestDetail->latest_status == 'Approved';
    }
}

if (!function_exists('usersByRole')) {
    function usersByRole($roleName = null)
    {
        if (!is_null($roleName)) {
            return User::whereHas('role', fn($role) => $role->whereName(ucwords($roleName)))->get();
        }
        return User::whereIn('id', RequestDetail::groupBy('user_id')->get('user_id'))->get();
    }
}
