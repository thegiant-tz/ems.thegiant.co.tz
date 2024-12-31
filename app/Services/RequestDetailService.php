<?php

namespace App\Services;

use App\Models\RequestDetail;
use App\Models\User;
use Illuminate\Http\Request;

class RequestDetailService
{
    static function generateCodeId($initialCode = '')
    {
        ($lastItem = RequestDetail::latest()->first());
        $lastId = !is_null($lastItem) ? $lastItem->id : 0;
        return $initialCode . str_pad($lastId + 1, 5, '0', STR_PAD_LEFT);
    }

    static function getUserRequests(Request $request, User $user = null, $isPaginate = true, $perPage = 15)
    {
        $query = RequestDetail::when(isset($request->status), fn($query) => $query->whereStatus($request->status))
        ->when(isInitiator(), fn($query) => $query->whereUserId(authUserId()))
        ->when(!isInitiator(), fn($query) => $query->whereHas('requestTrackers.user.role', fn ($role) => $role->whereName(currentLowerRoleName())))
        ->orderBy('id', 'desc');
        return $isPaginate ? $query->paginate($perPage) : $query->get();
    }

    static function getUserRequestsForRetirement(Request $request, User $user = null, $isPaginate = true, $perPage = 15)
    {
        $user = $user ?? authUser();
        $query = $user->requestDetails()->orderBy('id', 'desc')->doesntHave('retirement');
        return $isPaginate ? $query->paginate($perPage) : $query->get();
    }
}
