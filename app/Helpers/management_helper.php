<?php

use App\Models\Management;

if (!function_exists('currentManagement')) {
    function currentManagement()
    {
        return Management::whereCurrentRoleId(currentRoleId())->first();
    }
}

if (!function_exists('currentRole')) {
    function currentRole()
    {
        return authUser()->role;
    }
}

if (!function_exists('currentRoleId')) {
    function currentRoleId()
    {
        return currentRole()->id;
    }
}

if (!function_exists('currentRoleName')) {
    function currentRoleName()
    {
        return currentRole()->name;
    }
}

if (!function_exists('currentManagementRole')) {
    function currentManagementRole()
    {
        return currentManagement()->role;
    }
}


if (!function_exists('currentLowerRoleName')) {
    function currentLowerRoleName()
    {
        return currentLowerRole()->name;
    }
}

if (!function_exists('currentLowerRole')) {
    function currentLowerRole()
    {
        return currentManagement()->lowerRole;
    }
}


