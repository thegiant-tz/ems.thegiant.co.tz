<?php

namespace App\Services;

use Illuminate\Http\Request;

class LoginAPIService
{
    static function authentication(Request $request)
    {
        $response = CurlRequest::post(apiRoute('user/login'), [
            'username' => $request->username,
            'password' => $request->password,
        ]);
        return json_decode($response);
    }

    static function logout(Request $request)
    {
        $response = CurlRequest::post(apiRoute('user/logout'), []);
        return json_decode($response);
    }
}
