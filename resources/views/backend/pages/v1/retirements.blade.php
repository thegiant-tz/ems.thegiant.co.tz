@extends('layouts.v1.backend')
@section('content')
    @can('fill retirements form')
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
    @endcan

    <div class="col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>Requests</h5>
                <div class="card-header-right p-3">
                    <a href="#">See All</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover m-b-0 ">
                        <thead>
                            <tr>
                                <th>S/No</th>
                                <th>Request Id</th>
                                <th>Descriptions</th>
                                <th>Date</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($retirements as $retirement)
                                <tr>
                                    <td>{{ countLoop($retirements, $loop) }}</td>
                                    <td>{{ $retirement->requestDetail->codeId }}</td>
                                    <td>{{ $retirement->description }}</td>
                                    <td>{{ $retirement->created_at->format('d/m/Y') }}</td>
                                    <td class="text-center"><a
                                            href="{{ route('account.request.attachments', ['codeId' => aes_encrypt($retirement->requestDetail->codeId), 'page' => 'retirement']) }}"><i
                                                class="fa fa-eye"></i></a></td>
                                </tr>
                            @empty
                                <td colspan="5" class="text-center">No data found</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
