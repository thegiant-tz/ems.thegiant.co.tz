<?php

namespace App\Services;

use Illuminate\Http\Request;

class BookingAPIService
{
    static function getBookingList(Request $request)
    {
        
        $endpoint = $request->item == 'cargo' ? 'cargo/list' : 'list-all';
        $request = requestAdd($request, ['isPaginate' => true]);
        $response = CurlRequest::post(customPaginateUrl($endpoint, $request->page), $request->all());
        return json_decode($response);
    }

    static function getBoardingPoints()
    {
        $response = CurlRequest::get(apiRoute('boarding-points/list'));
        return json_decode($response);
    }
}
