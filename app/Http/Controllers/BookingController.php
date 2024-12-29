<?php

namespace App\Http\Controllers;

use App\Services\Paginator;
use Illuminate\Http\Request;
use App\Services\BusAPIService;
use App\Services\UserAPIService;
use App\Services\RouteAPIService;
use App\Services\BookingAPIService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{
    function list(Request $request) {

        $data['bookings'] = Paginator::fromJson(BookingAPIService::getBookingList(requestAdd($request, $searchData = Session::get('search', []))), route('account.booking.list', ['item' => $request->item]));
        $data['boardingPoints'] = BookingAPIService::getBoardingPoints();
        $data['routeOrigins'] = RouteAPIService::getRouteOrigins();
        $data['routeDestinations'] = RouteAPIService::getRouteDestinations();
        $data['agents'] = UserAPIService::getUsers('agent');
        $data['buses'] = BusAPIService::getBusList();
        return view('backend.pages.v2.booking-list', array_merge($data, $searchData));
    }

    function setSearchData(Request $request) {
        Session::put('search', $request->all());
        return redirect()->route('account.booking.list', ['item' => $request->item]);
    }
}
