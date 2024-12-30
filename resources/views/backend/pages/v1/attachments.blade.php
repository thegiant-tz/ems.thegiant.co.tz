@extends('layouts.v1.backend')
@push('css_after')
    <!--lightbox css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/lightbox2-master/css/lightbox.min.css') }}">
@endpush
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card latest-update-card">
                <div class="card-header">
                    <h5>Information</h5>
                </div>
                <div class="latest-scroll" style="height:370px;position:relative; overflow:auto;">
                    <div class="card-body">
                        <div class="row items-push pt-3">
                            <div class="col-md-4">
                                <h6>Request ID:</h6>
                                <div>{{ $requestDetail->codeId }}</div>
                            </div>
                            <div class="col-md-4">
                                <h6>Date:</h6>
                                <div>{{ $requestDetail->created_at->format('d/m/Y H:i') }}</div>
                            </div>
                            <div class="col-md-4">
                                <h6>amount:</h6>
                                <div>{{ number_format($requestDetail->amount) }}</div>
                            </div>
                        </div>
                        <div class="row items-push pt-3">
                            <div class="col-4">
                                <h6>Reason:</h6>
                                <div>{{ $requestDetail->reason->type }}</div>
                            </div>
                            <div class="col-md-4">
                                <h6>Department:</h6>
                                <div>{{ $requestDetail->department->name }}</div>
                            </div>
                            <div class="col-md-4">
                                <h6>Payment Type:</h6>
                                <div>{{ strtoupper($requestDetail->payment_type) }}</div>
                            </div>
                        </div>
                        <div class="row items-push pt-3">

                            <div class="col-md-6">
                                <h6>Overall Status:</h6>
                                <div><label class="badge badge-light-danger">{{ $requestDetail->latestStatus }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="row items-push pt-3">
                            <div class="col-12">
                                <h6>Description:</h6>
                                <div>{{ $requestDetail->description }}</div>
                            </div>
                        </div>

                        @can('reject and approve request')
                            <form method="post" action="{{ route('account.request.action') }}" class="row items-push pt-3">
                                @csrf
                                <div class="col-12 p-3">
                                    <h6>Remarks:</h6>
                                    <textarea name="remarks" class="form-control" rows="4" required placeholder="Enter remarks"></textarea>
                                    <input type="hidden" name="codeId" value="{{ $requestDetail->codeId }}">
                                </div>
                                @if (!$requestDetail->is_rejected)
                                    <div class="col-6 col-md-4">
                                        <button name="reject" class="btn btn-danger form-control">Reject</button>
                                    </div>
                                @endif
                                @if (!$requestDetail->is_approved)
                                <div class="col-6 col-md-4">
                                    <button name="approve" class="btn btn-primary form-control">Approve</button>
                                </div>
                                @endif
                            </form>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card latest-update-card">
                <div class="card-header">
                    <h5>Latest Activity</h5>
                </div>
                <div class="latest-scroll" style="height:370px;position:relative; overflow:auto;">
                    <div class="card-body">
                        <div class="latest-update-box">
                            @foreach ($requestDetail->requestTrackers as $requestTracker)
                                <div class="row p-t-20 @if ($requestDetail->requestTrackers->last()->id == $requestTracker->id) p-b-0 @else p-b-20 @endif">
                                    <div class="col-auto text-end update-meta">
                                        <i class="b-primary update-icon ring"></i>
                                    </div>
                                    <div class="col p-l-5">
                                        <div class="row">
                                            <div class="col-6">
                                                <h6 class="m-0">
                                                    {{ isMyRequestTracker($requestTracker) ? 'Me' : ucwords(strtolower($requestTracker->user->name)) }}
                                                </h6>
                                            </div>
                                            <div class="col-6 text-end">{{ $requestTracker->user->role->name }}</div>
                                        </div>
                                        <p class="m-b-0"> {{ \Str::limit($requestTracker->remarks, 250, '...') }}</p>
                                        <div class="row">
                                            <div class="col-6">{{ $requestTracker->created_at->format('d/m/Y H:i') }}
                                            </div>
                                            <div class="col-6 text-end"><label
                                                    class="badge badge-light-danger">{{ $requestTracker->status }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="row p-b-0">
                                <div class="col-auto text-end update-meta">
                                    <i class="b-primary update-icon ring"></i>
                                </div>
                                <div class="col p-l-5">
                                    <a href="widget-data.html#!">
                                        <h6 class="m-0">Showcases</h6>
                                    </a>
                                    <p class="m-b-0">Lorem dolor sit amet, <a href="widget-data.html#!"
                                            class="text-c-blue"> More</a></p>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Gallery-Grid ] start -->
        <div class="col-sm-12">
            <!-- [ Image-Grid ] start -->
            <div class="card">
                <div class="card-header">
                    <h5>Attachments({{ $requestDetail->attachments->count() }})</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($requestDetail->attachments as $attachment)
                            <div class="col-lg-4 col-sm-6">
                                <div class="thumbnail mb-4">
                                    <div class="thumb">
                                        <a href="{{ asset('storage/' . $attachment->path) }}" data-lightbox="1">
                                            <img src="{{ asset('storage/' . $attachment->path) }}" alt=""
                                                class="img-fluid img-thumbnail"
                                                style="height: 250px; object-fit: cover; width: 100%;">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- [ Image-Grid ] end -->
        </div>
        <!-- [ Gallery-Grid ] end -->
    </div>
@stop

@push('js_after')
    <!--lightbox Js -->
    <script src="{{ asset('assets/plugins/lightbox2-master/js/lightbox.min.js') }}"></script>
    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        })
    </script>
@endpush
