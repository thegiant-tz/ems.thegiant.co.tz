@extends('layouts.v2.backend')
@section('title', 'View bookings')
@push('css_after')
    <style>
        @media print {

            /* Use class names to hide specific columns in print view */
            .noPrint {
                display: none !important;
            }
        }
    </style>
@endpush
@section('content')
    {{-- @include('layouts.v2.includes.hero', ['pageTitle' => 'View bookings']) --}}
    <div class="row">
        <!-- Responsive Table -->
        <div class="col-lg-12">
            <div class="panel panel-default border-panel card-view shadow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">bookings</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <form class="panel-wrapper collapse in" method="post"
                    action="{{ route('account.booking.search', ['item' => request()->item]) }}">
                    @csrf
                    <div class="panel-body">
                        <div class="row items-push">
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-wrap">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                                    <input type="text" class="form-control"
                                                        value="{{ $bookingId ?? '' }}" name="bookingId"
                                                        placeholder="-- Booking ID --">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <div class="input-group-addon">-- Booking Date --</div>
                                                    <input type="date" name="bookingDate"
                                                        value="{{ $bookingDate ?? '' }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <div class="input-group-addon">-- Departure Date --</div>
                                                    <input type="date" name="departureDate"
                                                        value="{{ $departureDate ?? '' }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    @if (isset($busNumber))
                                                        <div class="input-group-addon">-- Bus Number --</div>
                                                    @else
                                                        <div class="input-group-addon"><i class="fa fa-map-marker"></i>
                                                        </div>
                                                    @endif

                                                    <select name="busNumber" class="form-control select2">
                                                        @if (!isset($busNumber))
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
                                                        @endforeach
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
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    @if (isset($origin))
                                                        <div class="input-group-addon">-- Origin --</div>
                                                    @else
                                                        <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                                    @endif

                                                    <select name="origin" class="form-control select2"
                                                        onchange="submitSearchForm()">
                                                        @if (!isset($origin))
                                                            <option value="">-- Origin --</option>
                                                        @endif

                                                        @foreach ($routeOrigins as $routeOrigin)
                                                            @if (isset($origin) && $origin == $routeOrigin->from)
                                                                <option value="{{ $routeOrigin->from }}">
                                                                    {{ $routeOrigin->from }}</option>
                                                            @endif
                                                        @endforeach
                                                        @foreach ($routeOrigins as $routeOrigin)
                                                            @if (!isset($origin) || $origin != $routeOrigin->from)
                                                                <option value="{{ $routeOrigin->from }}">
                                                                    {{ $routeOrigin->from }}</option>
                                                            @else
                                                                <option value="">-- None --</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    @if (isset($destination))
                                                        <div class="input-group-addon">-- Destination --</div>
                                                    @else
                                                        <div class="input-group-addon"><i class="fa fa-map-marker"></i>
                                                        </div>
                                                    @endif

                                                    <select name="destination" class="form-control select2">
                                                        @if (!isset($destination))
                                                            <option value="">-- Destination --</option>
                                                        @endif

                                                        @foreach ($routeDestinations as $routeDestination)
                                                            @if (isset($destination) && $destination == $routeDestination->to)
                                                                <option value="{{ $routeDestination->to }}">
                                                                    {{ $routeDestination->to }}</option>
                                                            @endif
                                                        @endforeach
                                                        @foreach ($routeDestinations as $routeDestination)
                                                            @if (!isset($destination) || $destination != $routeDestination->to)
                                                                <option value="{{ $routeDestination->to }}">
                                                                    {{ $routeDestination->to }}</option>
                                                            @else
                                                                <option value="">-- None --</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    @if (isset($agentName))
                                                        <div class="input-group-addon">-- Agent Name --</div>
                                                    @else
                                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                                    @endif

                                                    <select name="agentName" class="form-control select2">
                                                        @if (!isset($agentName))
                                                            <option value="">-- Agent Name --</option>
                                                        @endif

                                                        @foreach ($agents as $agent)
                                                            @if (isset($agentName) && $agentName == $agent->id)
                                                                <option value="{{ $agent->id }}">
                                                                    {{ $agent->name }}</option>
                                                            @endif
                                                        @endforeach
                                                        @foreach ($agents as $agent)
                                                            @if (!isset($agentName) || $agentName != $agent->id)
                                                                <option value="{{ $agent->id }}">
                                                                    {{ $agent->name }}</option>
                                                            @else
                                                                <option value="">-- None --</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    @if (isset($agentCode))
                                                        <div class="input-group-addon">-- Agent Code --</div>
                                                    @else
                                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                                    @endif

                                                    <select name="agentCode" class="form-control select2">
                                                        @if (!isset($agentCode))
                                                            <option value="">-- Agent Code --</option>
                                                        @endif

                                                        @foreach ($agents as $agent)
                                                            @if (isset($agentCode) && $agentCode == $agent->id)
                                                                <option value="{{ $agent->id }}">
                                                                    {{ $agent->username }}</option>
                                                            @endif
                                                        @endforeach
                                                        @foreach ($agents as $agent)
                                                            @if (!isset($agentCode) || $agentCode != $agent->id)
                                                                <option value="{{ $agent->id }}">
                                                                    {{ $agent->username }}</option>
                                                            @else
                                                                <option value="">-- None --</option>
                                                            @endif
                                                        @endforeach
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
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-money"></i></div>
                                                    <select name="paymentChannel" class="form-control select2"
                                                        disabled="">
                                                        <option value="">-- Payment Channel --</option>
                                                        <option value="Cash">Cash</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-info-circle"></i></div>
                                                    {{-- <input type="text" class="form-control" id="exampleInputuname_3" placeholder="Payment Status"> --}}
                                                    <select name="paymentStatus" class="form-control select2"
                                                        disabled = "">
                                                        <option value="">-- Payment Status --</option>
                                                        <option value="Pending">Pending</option>
                                                        <option value="Confirmed">Confirmed</option>
                                                        <option value="Declined">Declined</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    @if (isset($collectionPoint))
                                                        <div class="input-group-addon">-- Collection Point --</div>
                                                    @else
                                                        <div class="input-group-addon"><i class="fa fa-map-marker"></i>
                                                        </div>
                                                    @endif

                                                    <select name="collectionPoint" class="form-control select2">
                                                        @if (!isset($collectionPoint))
                                                            <option value="">-- Collection Point --</option>
                                                        @endif

                                                        @foreach ($boardingPoints as $boardingPoint)
                                                            @if (isset($collectionPoint) && $collectionPoint == $boardingPoint->id)
                                                                <option value="{{ $boardingPoint->id }}">
                                                                    {{ $boardingPoint->point }}</option>
                                                            @endif
                                                        @endforeach
                                                        @foreach ($boardingPoints as $boardingPoint)
                                                            @if (!isset($collectionPoint) || $collectionPoint != $boardingPoint->id)
                                                                <option value="{{ $boardingPoint->id }}">
                                                                    {{ $boardingPoint->point }}</option>
                                                            @else
                                                                <option value="">-- None --</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-info-circle"></i></div>
                                                    <select name="bookingStatus" class="form-control select2">
                                                        <option value="">-- Booking Status --</option>
                                                        @if (isCargoPage())
                                                            <option value="Pending">Pending</option>
                                                            <option value="In Transit">Onboarded</option>
                                                            <option value="Delivered">Offboarded</option>
                                                        @else
                                                            <option value="Processing">Processing</option>
                                                            <option value="Booked">Booked</option>
                                                        @endif
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
                                <button id="search-form-btn" class="btn btn-warning btn-sm"><i class="fa fa-search"></i>
                                    Get List</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                @if (iscargoPage())
                                    @include('backend.pages.v2.includes.cargo-items')
                                @else
                                    @include('backend.pages.v2.includes.psg-items')
                                @endif

                            </div>
                            @if (count($bookings) > 0)
                                {!! $bookings->links() !!}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Responsive Table -->
    </div>
@stop

@push('js_after')
    <script>
        function submitSearchForm() {
            $('#search-form-btn').click();
        }

        $(document).ready(function() {
            $('#print-buttons').DataTable({
                dom: "Bfrtip",
                "pageLength": 57, // Set the default page size to 10,
                buttons: [
                    'excel',
                    {
                        extend: 'print',
                        text: 'Print',
                        customize: function (win) {
                            // Use jQuery to hide columns with the 'no-print' class during print
                            $(win.document.body).find('table thead th.noPrint, table tbody td.noPrint').css('display', 'none');
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
