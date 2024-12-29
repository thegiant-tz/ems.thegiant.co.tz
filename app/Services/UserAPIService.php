<?php

namespace App\Services;

use Illuminate\Http\Request;

class UserAPIService
{

    static function getUsers($filter = 'all', $isPaginate = false)
    {
        $filter = $filter ?? 'all';
        
        $response = CurlRequest::post(customPaginateUrl('user/list', request()->page), [
            'filter' => $filter,
            'isPaginate' => $isPaginate,
        ]);
        return json_decode($response);
    }

    static function setAccess(Request $request) {
        $response = CurlRequest::post(apiRoute('user/set-access'), $request->route()->parameters());
        return json_decode($response);
    }
}
