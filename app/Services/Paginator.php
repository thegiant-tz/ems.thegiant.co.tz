<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Collection as SupportCollection;
use Illuminate\Pagination\LengthAwarePaginator;

class Paginator
{
    static function fromArray($arrayResponse, $perPage = 15)
    {
        
        if (!is_null($arrayResponse)) {
            $items = $arrayResponse['data'];
            $currentPage = $arrayResponse['meta']['current_page'];
            $perPage = $arrayResponse['meta']['per_page'];
            $totalItems = $arrayResponse['meta']['total'];
            $url = $arrayResponse['meta']['path'];
            return new LengthAwarePaginator($items, $totalItems, $perPage, $currentPage, ['path' => $url]);
        }
        return [];
    }

    static function fromJson($jsonResponse, $url)
    {
        if (!is_null($jsonResponse)) {
            $items = $jsonResponse->data;
            $currentPage = $jsonResponse->meta->current_page;
            $perPage = $jsonResponse->meta->per_page;
            $totalItems = $jsonResponse->meta->total;
            return new LengthAwarePaginator($items, $totalItems, $perPage, $currentPage, ['path' => $url]);
        }
        return [];
    }

    static function fromCollection(Collection|SupportCollection $collections, $perPage = 15)
    {
        
        if (!is_null($collections)) {
            return new LengthAwarePaginator($collections, count($collections), $perPage, options: ['path' => request()->url()]);
        }
        return [];
    }
}
