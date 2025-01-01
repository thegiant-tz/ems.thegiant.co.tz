<?php 

if (!function_exists('constPending')) {
    function constPending($status = null) {
        return is_null($status) ? 'Pending' : $status == 'Pending';
    }
}

if (!function_exists('constApproved')) {
    function constApproved($status = null) {
        return is_null($status) ? 'Approved' : $status == 'Approved';
    }
}

if (!function_exists('constRejected')) {
    function constRejected($status = null) {
        return is_null($status) ? 'Rejected' : $status == 'Rejected';
    }
}

if (!function_exists('constRetirement')) {
    function constRetirement($status = null) {
        return is_null($status) ? 'Retirement' : $status == 'Retirement';
    }
}

