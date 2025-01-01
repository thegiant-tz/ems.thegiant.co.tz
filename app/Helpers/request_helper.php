<?php

use App\Services\Paginator;
use App\Services\RequestDetailService;

if (!function_exists('userPendingRequests')) {
    function userPendingRequests($isPaginate = false)
    {
        $requests = RequestDetailService::getUserRequests(request(), isPaginate: false)->map(function ($requestDetail) {
            if (!$requestDetail->is_my_response_exists) {
                return $requestDetail;
            }
        })->filter();
        return $isPaginate ? Paginator::fromCollection($requests) : $requests;
    }
}

if (!function_exists('userRejectedRequests')) {
    function userRejectedRequests($isPaginate = false, $perPage = 15)
    {
        $requests = RequestDetailService::getUserRequests(request(), isPaginate: false)->transform(function ($requestDetail) {
            if ($requestDetail->is_my_rejection_exists) {
                return $requestDetail;
            }
        })->filter();
        return $isPaginate ? Paginator::fromCollection($requests) : $requests;
    }
}

if (!function_exists('userApprovedRequests')) {
    function userApprovedRequests($isPaginate = false)
    {
        $requests = RequestDetailService::getUserRequests(request(), isPaginate: false)->map(function ($requestDetail) {
            if ($requestDetail->is_my_approval_exists) {
                return $requestDetail;
            }
        })->filter();
        return $isPaginate ? Paginator::fromCollection($requests) : $requests;
    }
}

if (!function_exists('userRequestByStatus')) {
    function userRequestByStatus($status)
    {
        if (constPending($status)) {
            return userPendingRequests(isPaginate: true);
        } else if (constRejected($status)) {
            return userRejectedRequests(isPaginate: true);
        } else if (constApproved($status)) {
            return userApprovedRequests(isPaginate: true);
        }
        return null;
    }
}

if (!function_exists('requestStatusColor')) {
    function requestStatusColor($status)
    {
        return constPending($status) ?
            'warning' : (constApproved($status) ?
                'success' : 'danger');
    }
}
