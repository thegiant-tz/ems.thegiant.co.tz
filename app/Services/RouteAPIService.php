<?php 
namespace App\Services;

use Illuminate\Support\Facades\Session;

class RouteAPIService {
    static function getRouteOrigins() {
        return json_decode(CurlRequest::get(apiRoute('route/list')));
    }

    static function getRouteDestinations() {
        $origin = isset(Session::get('search')['origin']) ? Session::get('search')['origin'] : null;
        return json_decode(CurlRequest::post(apiRoute('route/destinations'), ['from' => $origin]));
    }


    
}