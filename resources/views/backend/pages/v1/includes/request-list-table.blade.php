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
                <table id="export-buttons" class="table table-striped table-hover m-b-0 nowrap">
                    <thead>
                        <tr>
                            <th>S/No</th>
                            <th>Request Id</th>
                            @can('view initiator column')
                                <th>Initiator</th>
                            @endcan
                            <th>Descriptions</th>
                            <th>Reason</th>
                            <th>Department</th>
                            <th>Amount</th>
                            <th>Payment Type</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th class="noPrint">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($requestDetails as $requestDetail)
                            <tr>
                                <td>{{ countLoop($requestDetails, $loop) }}</td>
                                <td>{{ $requestDetail->codeId }}</td>
                                @can('view initiator column')
                                    <td>{{ $requestDetail->user->name }}</td>
                                @endcan

                                <td>{{ \Str::limit($requestDetail->description, 50, '...') }}</td>
                                <td>{{ $requestDetail->reason->type }}</td>
                                {{-- <td><label class="badge badge-light-danger">Open</label> --}}
                                {{-- </td> --}}
                                <td>{{ $requestDetail->department->name }}</td>
                                <td>{{ number_format($requestDetail->amount) }}</td>
                                <td>{{ strtoupper($requestDetail->payment_type) }}</td>
                                <td>{{ $requestDetail->created_at->format('d/m/Y') }}</td>
                                <td><label
                                        class="badge badge-light-{{ requestStatusColor($requestDetail->latestStatus) }}">{{ $requestDetail->latestStatus }}</label>
                                </td>
                                <td class="text-center noPrint"><a
                                        href="{{ route('account.request.attachments', ['codeId' => aes_encrypt($requestDetail->codeId)]) }}"><i
                                            class="fa fa-eye"></i></a></td>
                            </tr>
                        @empty
                            <td colspan="11" class="text-center">No data found</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
