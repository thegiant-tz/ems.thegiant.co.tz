<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\LoginAPIService;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    function index()
    {
        // dd(Auth::user());
        return view('login');
    }

    function login(Request $request)
    {

        $response = LoginAPIService::authentication($request);
        if ($response->status == 'success') {
            Session::put('user', $response);
            $url = is_null($authUrl = Session::get('unauthorized_url')) ? route('account.dashboard') : $authUrl;

            if (!isCashier()) {
                Session::flush();
                return redirect(route('welcome'))->withErrors(['status' => 'Unauthorized access']);
            }
            return redirect($url);
        }
        return redirect()->back()->withErrors([
            'status' => $response->status
        ]);
    }

    function logout(Request $request)
    {
        Auth::logout();
        return $request->wantsJson() ? new JsonResponse([], 204) : redirect('/');
    }

    public function authenticate(Request $request): RedirectResponse
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // $credentials['active'] = 1;


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = User::find(Auth::user()->id);
            $user->givePermissionTo($user->permissions);
            return redirect()->intended(RouteServiceProvider::HOME);
        }



        return back()->withErrors([
            'status' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    function onLogoutAction($request, $guard)
    {
        $guard->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }

    function guard() {
        return Auth::guard();
    }
}
