@extends('layouts.v1.backend')
@section('title', 'Report')
@push('css_after')
@endpush
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Search Form</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('account.report.search') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row items-push">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleDataList" class="form-label">Request Id</label>
                            <input type="text" class="form-control" name="codeId" value="{{ $codeId ?? '' }}"
                                placeholder="Enter Request Id">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleDataList" class="form-label">Date</label>
                            <input type="date" class="form-control" name="requestDate" value="{{ $requestDate ?? '' }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleDataList" class="form-label">Department</label>
                            <select name="departmentId" id="" class="select2 form-control">
                                @if (!isset($departmentId))
                                    <option value="">-- Select department--</option>
                                @endif
                                @foreach (departments() as $department)
                                    @if (isset($departmentId) && $departmentId == $department->id)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endif
                                @endforeach

                                @foreach (departments() as $department)
                                    @if (!isset($departmentId) || $departmentId != $department->id)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @else
                                        <option value="">-- None --</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleDataList" class="form-label">Reason</label>
                            <select name="reasonId" id="" class="select2 form-control">
                                @if (!isset($reasonId))
                                    <option value="">-- Select reason--</option>
                                @endif
                                @foreach (reasons() as $reason)
                                    @if (isset($reasonId) && $reasonId == $reason->id)
                                        <option value="{{ $reason->id }}">{{ $reason->type }}</option>
                                    @endif
                                @endforeach

                                @foreach (reasons() as $reason)
                                    @if (!isset($reasonId) || $reasonId != $reason->id)
                                        <option value="{{ $reason->id }}">{{ $reason->type }}</option>
                                    @else
                                        <option value="">-- None --</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleDataList" class="form-label">Payment Type</label>
                            <select name="paymentType" id="" class="select2 form-control">
                                @if (!isset($paymentType))
                                    <option value="">-- Select payment type--</option>
                                @endif

                                @foreach (['cash' => 'CASH', 'bank' => 'BANK'] as $key => $paymentType)
                                    @if (isset($paymentType) && $paymentType == $key)
                                        <option value="{{ $key }}">{{ $paymentType }}</option>
                                    @endif
                                @endforeach

                                @foreach (['cash' => 'CASH', 'bank' => 'BANK'] as $key => $paymentType)
                                    @if (!isset($paymentType) || $paymentType != $key)
                                        <option value="{{ $key }}">{{ $paymentType }}</option>
                                    @else
                                        <option value="">-- None --</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                        </div>
                    </div>

                    <div class="col-md-2 offset-md-0">
                        <div class="mb-3">
                            <button class="form-control btn btn-sm btn-primary">Search</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>


    <div class="row">
        @include('backend.pages.v1.includes.request-list-table')
    </div>


@stop
