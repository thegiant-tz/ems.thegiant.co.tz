@extends('layouts.v1.backend')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <a href="{{ route('account.request.list', ['status' => 'Pending']) }}" class="card bg-c-blue order-card">
                <div class="card-body">
                    <h6 class="m-b-20">Pending Requests</h6>
                    <h2 class="text-start"><span>{{ userPendingRequests()->count() }}</span><i class="feather icon-refresh-cw float-end"></i></h2>
                    {{-- <p class="m-b-0 text-end">Completed Orders<span class="float-start">351</span></p> --}}
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('account.request.list', ['status' => 'Rejected']) }}" class="card bg-c-red order-card">
                <div class="card-body">
                    <h6 class="m-b-20">Rejected Requests</h6>
                    <h2 class="text-start"><span>{{ userRejectedRequests()->count(); }}</span><i class="mdi mdi-close-octagon-outline float-end"></i></h2>
                    {{-- <p class="m-b-0 text-end">Completed Orders<span class="float-start">351</span></p> --}}
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('account.request.list', ['status' => 'Approved']) }}" class="card bg-c-green order-card">
                <div class="card-body">
                    <h6 class="m-b-20">Approved Requests</h6>
                    <h2 class="text-start"><span>{{ userApprovedRequests()->count(); }}</span><i class="feather icon-check-circle float-end"></i></h2>
                    {{-- <p class="m-b-0 text-end">Completed Orders<span class="float-start">351</span></p> --}}
                </div>
            </a>
        </div>
    </div>
    @include('backend.pages.v1.includes.request-list-table')
@stop
