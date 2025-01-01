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
        $query = RequestDetail::when(isset($request->codeId), fn($query) => $query->where('codeId', $request->codeId))
        ->when(isset($request->requestDate), fn($query) => $query->whereDate('created_at', $request->requestDate))
        ->when(isset($request->departmentId), fn($query) => $query->whereDepartmentId( $request->departmentId))
        ->when(isset($request->reasonId), fn($query) => $query->whereReasonId( $request->reasonId))
        ->when(isset($request->paymentType), fn($query) => $query->wherePaymentType( $request->paymentType))
        ->when(isInitiator(), fn($query) => $query->whereUserId(authUserId()))
            ->when(!isInitiator(), fn($query) => $query->whereHas('requestTrackers.user.role', fn($role) => $role->whereName(currentLowerRoleName())))
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
