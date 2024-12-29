@extends('layouts.v1.backend')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-c-blue order-card">
                <div class="card-body">
                    <h6 class="m-b-20">Pending Requests</h6>
                    <h2 class="text-start"><span>486</span><i class="feather icon-refresh-cw float-end"></i></h2>
                    <p class="m-b-0 text-end">Completed Orders<span class="float-start">351</span></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-c-red order-card">
                <div class="card-body">
                    <h6 class="m-b-20">Rejected Requests</h6>
                    <h2 class="text-start"><span>486</span><i class="mdi mdi-close-octagon-outline float-end"></i></h2>
                    <p class="m-b-0 text-end">Completed Orders<span class="float-start">351</span></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-c-green order-card">
                <div class="card-body">
                    <h6 class="m-b-20">Approved Requests</h6>
                    <h2 class="text-start"><span>486</span><i class="feather icon-check-circle float-end"></i></h2>
                    <p class="m-b-0 text-end">Completed Orders<span class="float-start">351</span></p>
                </div>
            </div>
        </div>
    </div>
    @include('backend.pages.v1.includes.request-list-table')
@stop
