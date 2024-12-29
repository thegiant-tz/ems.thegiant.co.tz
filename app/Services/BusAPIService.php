<?php 
namespace App\Services;

class BusAPIService {
    static function getBusList() {
        $response = CurlRequest::get(apiRoute('bus/list'));
        return json_decode($response);
    }
}