<?php

namespace App\Http\Controllers;

use App\Services\Paginator;
use App\Services\UserAPIService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function list(Request $request) {
        $data['users'] = Paginator::fromJson(UserAPIService::getUsers($request->filter, isPaginate: true), route('account.users.list'));
        return view('backend.pages.v2.users-list', $data);
    }

    function setAccess(Request $request) {
        $data['response'] = UserAPIService::setAccess($request);
        return redirect()->route('account.users.list');
    }
}
