@extends('layouts.v2.backend')
@section('title', 'Users')
@section('content')
    <div class="row">
        <!-- Responsive Table -->
        <div class="col-lg-12">
            <div class="panel panel-default border-panel card-view shadow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Users</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <form class="panel-wrapper collapse in" method="post" action="#">
                    @csrf
                    <div class="panel-body">
                        <div class="row items-push">
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-wrap">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                                    <input type="text" class="form-control"
                                                        value="{{ $bookingId ?? '' }}" name="bookingId"
                                                        placeholder="-- Enter Agent Name --">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    @if (isset($busNumber))
                                                        <div class="input-group-addon">-- Bus Number --</div>
                                                    @else
                                                        <div class="input-group-addon"><i class="fa fa-map-marker"></i>
                                                        </div>
                                                    @endif

                                                    <select name="busNumber" class="form-control select2">
                                                        {{-- @if (!isset($busNumber))
                                                            <option value="">-- Bus Number --</option>
                                                        @endif

                                                        @foreach ($buses as $bus)
                                                            @if (isset($busNumber) && $busNumber == $bus->id)
                                                                <option value="{{ $bus->id }}">
                                                                    {{ $bus->number }}</option>
                                                            @endif
                                                        @endforeach
                                                        @foreach ($buses as $bus)
                                                            @if (!isset($busNumber) || $busNumber != $bus->id)
                                                                <option value="{{ $bus->id }}">
                                                                    {{ $bus->number }}</option>
                                                            @else
                                                                <option value="">-- None --</option>
                                                            @endif
                                                        @endforeach --}}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    @if (isset($busNumber))
                                                        <div class="input-group-addon">-- Bus Number --</div>
                                                    @else
                                                        <div class="input-group-addon"><i class="fa fa-map-marker"></i>
                                                        </div>
                                                    @endif

                                                    <select name="busNumber" class="form-control select2">
                                                        {{-- @if (!isset($busNumber))
                                                            <option value="">-- Bus Number --</option>
                                                        @endif

                                                        @foreach ($buses as $bus)
                                                            @if (isset($busNumber) && $busNumber == $bus->id)
                                                                <option value="{{ $bus->id }}">
                                                                    {{ $bus->number }}</option>
                                                            @endif
                                                        @endforeach
                                                        @foreach ($buses as $bus)
                                                            @if (!isset($busNumber) || $busNumber != $bus->id)
                                                                <option value="{{ $bus->id }}">
                                                                    {{ $bus->number }}</option>
                                                            @else
                                                                <option value="">-- None --</option>
                                                            @endif
                                                        @endforeach --}}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row items-push">
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-wrap">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                                    <input type="text" class="form-control"
                                                        value="{{ $bookingId ?? '' }}" name="bookingId"
                                                        placeholder="-- Enter Agent Name --">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    @if (isset($busNumber))
                                                        <div class="input-group-addon">-- Bus Number --</div>
                                                    @else
                                                        <div class="input-group-addon"><i class="fa fa-map-marker"></i>
                                                        </div>
                                                    @endif

                                                    <select name="busNumber" class="form-control select2">
                                                        {{-- @if (!isset($busNumber))
                                                            <option value="">-- Bus Number --</option>
                                                        @endif

                                                        @foreach ($buses as $bus)
                                                            @if (isset($busNumber) && $busNumber == $bus->id)
                                                                <option value="{{ $bus->id }}">
                                                                    {{ $bus->number }}</option>
                                                            @endif
                                                        @endforeach
                                                        @foreach ($buses as $bus)
                                                            @if (!isset($busNumber) || $busNumber != $bus->id)
                                                                <option value="{{ $bus->id }}">
                                                                    {{ $bus->number }}</option>
                                                            @else
                                                                <option value="">-- None --</option>
                                                            @endif
                                                        @endforeach --}}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row items-push">
                            <div class="col-sm-12 col-xs-12 text-center">
                                <button id="search-form-btn" class="btn btn-warning btn-sm"><i class="fa fa-search"></i> Get List</button>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table class="table mb-0 table-striped table-bordered">
                                    <thead>
                                        <tr class="bgPrimary">
                                            <th style="color: white;">{!! str_nbsp('S/No') !!}</th>
                                            <th style="color: white;">{!! str_nbsp('Agent Name') !!}</th>
                                            <th style="color: white;">{!! str_nbsp('Login Name') !!}</th>
                                            <th style="color: white;">{!! str_nbsp('Ward') !!}</th>
                                            <th style="color: white;">{!! str_nbsp('phone') !!}</th>
                                            <th style="color: white;">{!! str_nbsp('Email') !!}</th>
                                            <th style="color: white;">{!! str_nbsp('payment Type') !!}</th>
                                            <th style="color: white;">{!! str_nbsp('status') !!}</th>
                                            <th style="color: white;">{!! str_nbsp('reset password') !!}</th>
                                            <th style="color: white;">{!! str_nbsp('lock/unlock') !!}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $user)
                                            <tr>
                                                <td>{{ countLoop($users, $loop) }}</td>
                                                <td>{{ strtoupper($user->name) }}</td>
                                                <td>{{ strtoupper($user->username) }}</td>
                                                <td>{{ $user->ward }}</td>
                                                <td>{{ $user->phone }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->pay_type }}</td>
                                                <td>{{ $user->is_active ? 'ACTIVE' : 'LOCKED' }}</td>
                                                <td><a href="" class="btn btn-warning"><i class="fa fa-lock"></i>
                                                        {!! str_nbsp('Reset Password') !!}</a></td>
                                                <td class="text-center"><a href="{{ route('account.users.access', ['userId' => aes_encrypt($user->id), 'status' =>  aes_encrypt($user->is_active ? 0 : 1)]) }}" class="@if($user->is_active) text-danger @else text-success @endif"><i
                                                            class="fa @if($user->is_active) fa-lock @else fa-key @endif"></i></a></td>
                                            </tr>
                                        @empty
                                        @endforelse
                                    </tbody>
                                </table>

                            </div>
                            @isset($users)
                                {!! $users->links() !!}
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Responsive Table -->
    </div>
@stop

@push('js_after')
    <script></script>
@endpush
