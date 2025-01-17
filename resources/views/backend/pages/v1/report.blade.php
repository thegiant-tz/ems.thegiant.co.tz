@extends('layouts.v1.backend')
@section('title', 'Report')
@push('css_after')
    <!-- data tables css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/data-tables/datatables.bootstrap4.min.css') }}">
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
                            <label for="exampleDataList" class="form-label">Start Date</label>
                            <input type="date" class="form-control" name="startDate" value="{{ $startDate ?? '' }}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleDataList" class="form-label">End Date</label>
                            <input type="date" class="form-control" name="endDate" value="{{ $endDate ?? '' }}">
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

                                @foreach (['cash' => 'CASH', 'bank' => 'BANK'] as $key => $paymentTypeValue)
                                    @if (isset($paymentType) && $paymentType == $key)
                                        <option value="{{ $key }}">{{ $paymentTypeValue }}</option>
                                    @endif
                                @endforeach

                                @foreach (['cash' => 'CASH', 'bank' => 'BANK'] as $key => $paymentTypeValue)
                                    @if (!isset($paymentType) || $paymentType != $key)
                                        <option value="{{ $key }}">{{ $paymentTypeValue }}</option>
                                    @else
                                        <option value="">-- None --</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleDataList" class="form-label">Initiator</label>
                            <select name="initiator" id="" class="select2 form-control">
                                @if (!isset($initiator))
                                    <option value="">-- Select Initiator--</option>
                                @endif

                                @foreach (($initiators = usersByRole()) as  $user)
                                    @if (isset($initiator) && $initiator == $user->id)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endif
                                @endforeach

                                @foreach ($initiators  as  $user)
                                    @if (!isset($initiator) || $initiator != $user->id)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @else
                                        <option value="">-- None --</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 offset-md-0">
                        <div class="mb-3">
                            <label for="exampleDataList" class="form-label text-white">.</label>
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

@push('js_after')
    <!-- datatable Js -->
    <script src="{{ asset('assets/plugins/data-tables/js/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/data-tables/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/data-export-custom.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#export-buttons').DataTable({
                dom: "Bfrtip",
                "pageLength": 57, // Set the default page size to 10,
                buttons: [
                    'excel',
                    {
                        extend: 'print',
                        text: 'Print',
                        className: 'btn btn-sm btn-primary',
                        customize: function(win) {
                            // Use jQuery to hide columns with the 'no-print' class during print
                            $(win.document.body).find(
                                    'table thead th.noPrint, table tbody td.noPrint')
                                .css('display', 'none');
                        }
                    }
                ],
                paging: false,
                info: false,
                searching: false,
            });
        })
    </script>
@endpush
