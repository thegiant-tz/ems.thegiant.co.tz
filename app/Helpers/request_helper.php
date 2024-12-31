<?php

use App\Services\RequestDetailService;

if (!function_exists('userPendingRequests')) {
    function userPendingRequests()
    {
        return RequestDetailService::getUserRequests(request(), isPaginate: false)->map(function ($requestDetail) {
            if (!$requestDetail->is_my_response_exists) {
                return $requestDetail;
            }
        })->filter();
    }
}

if (!function_exists('userRejectedRequests')) {
    function userRejectedRequests()
    {
        return RequestDetailService::getUserRequests(request(), isPaginate: false)->map(function ($requestDetail) {
            if ($requestDetail->is_my_rejection_exists) {
                return $requestDetail;
            }
        })->filter();
    }
}

if (!function_exists('userApprovedRequests')) {
    function userApprovedRequests()
    {
        return RequestDetailService::getUserRequests(request(), isPaginate: false)->map(function ($requestDetail) {
            if ($requestDetail->is_my_approval_exists) {
                return $requestDetail;
            }
        })->filter();
    }
}
