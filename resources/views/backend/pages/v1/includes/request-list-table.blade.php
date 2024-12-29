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
                            <th>Reason</th>
                            <th>Department</th>
                            <th>Amount</th>
                            <th>Payment Type</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($requestDetails as $requestDetail)
                        <tr>
                            <td>{{ countLoop($requestDetails, $loop) }}</td>
                            <td>{{ $requestDetail->codeId }}</td>
                            <td>{{ \Str::limit($requestDetail->description, 50, '...') }}</td>
                            <td>{{ $requestDetail->reason->type }}</td>
                            {{-- <td><label class="badge badge-light-danger">Open</label> --}}
                            {{-- </td> --}}
                            <td>{{ $requestDetail->department->name }}</td>
                            <td>{{ number_format($requestDetail->amount) }}</td>
                            <td>{{ strtoupper($requestDetail->payment_type) }}</td>
                            <td>{{ $requestDetail->created_at->format('d/m/Y') }}</td>
                            <td><label class="badge badge-light-danger">{{ $requestDetail->latestStatus }}</label></td>
                            <td class="text-center"><a href="{{ route('account.request.attachments', ['codeId' => aes_encrypt($requestDetail->codeId)]) }}"><i class="fa fa-eye"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>