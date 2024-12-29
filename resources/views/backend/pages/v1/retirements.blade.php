@extends('layouts.v1.backend')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Request Form</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('account.request.retirements.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row items-push">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleDataList" class="form-label">Request ID:</label>
                            <select name="request_detail_id" id="" class="select2 form-control">
                                <option value="">-- Select ID--</option>
                                @foreach ($requestDetails as $requestDetail)
                                <option value="{{ $requestDetail->id }}">{{ $requestDetail->codeId }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleDataList" class="form-label">Attachments (< 2MB)</label>
                                    <input type="file" name="attachments[]" class="form-control" multiple>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="exampleDataList" class="form-label">Descriptions</label>
                            <textarea name="description" class="form-control" rows="3" placeholder="Type here ..."></textarea>
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
@stop
