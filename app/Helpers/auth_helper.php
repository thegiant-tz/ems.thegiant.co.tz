<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

if (!function_exists('authUser')) {
    function authUser() : User
    {
        return User::find(Auth::user()->id);
    }
}

if (!function_exists('authUserId')) {
    function authUserId()
    {
        return authUser()->id;
    }
}

if (!function_exists('isInitiatorPage')) {
    function isInitiatorPage()
    {
        return  isNormalUser() || (isset(request()->role) && request()->role == 'initiator');
    }
}

if (!function_exists('isNormalUser')) {
    function isNormalUser()
    {
        return currentRoleName() == 'Initiator';
    }
}

if (!function_exists('isChiefAccountant')) {
    function isChiefAccountant()
    {
        return currentRoleName() == 'Accountant';
    }
}

if (!function_exists('isCEO')) {
    function isCEO()
    {
        return currentRoleName() == 'Director';
    }
}

if (!function_exists('isCashier')) {
    function isCashier()
    {
        return Session::get('user', (object)['role' => null])->role == 'cashier';
    }
}
