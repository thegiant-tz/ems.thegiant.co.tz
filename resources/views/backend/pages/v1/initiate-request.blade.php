@extends('layouts.v1.backend')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Request Form</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('account.request.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row items-push">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleDataList" class="form-label">Department</label>
                            <select name="department_id" id="" class="select2 form-control" required>
                                <option value="">-- Select department--</option>
                                @foreach (departments() as $department)
                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleDataList" class="form-label">Reason</label>
                            <select name="reason_id" id="" class="select2 form-control" required>
                                <option value="">-- Select reason--</option>
                                @foreach (reasons() as $reason)
                                    <option value="{{ $reason->id }}">{{ $reason->type }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleDataList" class="form-label">Currency</label>
                            <select name="currency" id="" class="select2 form-control" required>
                                <option value="">-- Select currency--</option>
                                <option value="TZS">TZS</option>
                                <option value="USD">USD</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleDataList" class="form-label">Amount</label>
                            <input type="number" class="form-control" name="amount" placeholder="Enter amount" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleDataList" class="form-label">Payment Type</label>
                            <select name="payment_type" id="" class="select2 form-control" required>
                                <option value="">-- Select payment type--</option>
                                <option value="cash">CASH</option>
                                <option value="bank">BANK</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleDataList" class="form-label">Attachments (< 2MB=> Optional)</label>
                            <input type="file" name="attachments[]" class="form-control"
                                accept="image/png, image/gif, image/jpeg" multiple>
                            @error('attachments[]')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="exampleDataList" class="form-label">Descriptions</label>
                            <textarea name="description" class="form-control" rows="5" placeholder="Type here ..." required></textarea>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="mb-3">
                            <button class="form-control btn btn-sm btn-primary">Submit</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    @include('backend.pages.v1.includes.request-list-table')
@stop
