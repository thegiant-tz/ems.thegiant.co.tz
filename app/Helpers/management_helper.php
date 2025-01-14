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

if (!function_exists('currentUpperRoleName')) {
    function currentUpperRoleName()
    {
        return currentUpperRole()->name ?? null;
    }
}

if (!function_exists('currentUpperRole')) {
    function currentUpperRole()
    {
        return currentManagement()->upperRole;
    }
}

if (!function_exists('isFileTypeImage')) {
    function isFileTypeImage($filename)
    {
        $data = explode('.', $filename);
        return in_array(end($data), ['jpg', 'png', 'gif', 'jpeg']);
    }
}

if (!function_exists('isFileTypePdf')) {
    function isFileTypePdf($filename)
    {
        $data = explode('.', $filename);
        return in_array(end($data), ['pdf']);
    }
}

if (!function_exists('isFileTypeMsWord')) {
    function isFileTypeMsWord($filename)
    {
        $data = explode('.', $filename);
        return in_array(end($data), ['pdf']);
    }
}
