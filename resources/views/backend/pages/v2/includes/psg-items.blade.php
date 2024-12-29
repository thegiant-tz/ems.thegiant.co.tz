<table id="print-buttons" class="table mb-0 table-striped table-bordered ">
    <thead>
        <tr class="bgPrimary">
            <th style="color: white;">{!! str_nbsp('S/No') !!}</th>
            <th style="color: white;">{!! str_nbsp('Booking ID') !!}</th>
            <th style="color: white;" class="noPrint">{!! str_nbsp('Booking DATE') !!}</th>
            <th style="color: white;">{!! str_nbsp('Departure date') !!}</th>
            <th style="color: white;">{!! str_nbsp('origin') !!}</th>
            <th style="color: white;" class="noPrint">{!! str_nbsp('Destination') !!}</th>
            <th style="color: white;">{!! str_nbsp('bus no') !!}</th>
            <th style="color: white;">{!! str_nbsp('amount paid') !!}</th>
            <th style="color: white;">{!! str_nbsp('seat no') !!}</th>
            <th style="color: white;">{!! str_nbsp('payment channel') !!}</th>
            <th style="color: white;" class="noPrint">{!! str_nbsp('payment status') !!}</th>
            <th style="color: white;">{!! str_nbsp('psg name') !!}</th>
            <th style="color: white;">{!! str_nbsp('psg phone') !!}</th>
            <th style="color: white;">{!! str_nbsp('agent name') !!}</th>
            <th style="color: white;">{!! str_nbsp('agent code') !!}</th>
            <th style="color: white;" class="noPrint">{!! str_nbsp('collection point') !!}</th>
            <th style="color: white;" class="noPrint">{!! str_nbsp('status') !!}</th>
            <th style="color: white;" class="noPrint">{!! str_nbsp('action') !!}</th>
        </tr>
    </thead>
    <tbody>
        @forelse  ($bookings as $index => $booking)

            <tr>
                <td><a href="javascript:void(0)">{{ countLoop($bookings, $loop) }}</a>
                </td>
                <td><a href="javascript:void(0)">{{ $booking->ticketNo }}</a>
                </td>
                <td class="noPrint">
                    {{ $booking->bookedAt }}
                </td>
                <td><span class="text-muted">{{ $booking->depDate }}</span>
                </td>
                <td>{{ $booking->timetable->route->from }}-{{ $booking->boardingPoint }}</td>
                <td>{{ $booking->timetable->route->to }}-{{ $booking->droppingPoint }}</td>
                <td>
                    @if (!is_null($booking->timetable->bus))
                        {!! str_nbsp($booking->timetable->bus->number ) !!}
                    @endif
                </td>
                <td class="text-right">{{ number_format($booking->fare) }}</td>
                <td class="text-right">{{ $booking->seatNo }}</td>
                <td>CASH</td>
                <td class="text-center noPrint">
                    <div class="label label-table label-success">Paid</div>
                </td>
                <td>{!! str_nbsp(strtoupper($booking->psgName)) !!}</td>
                <td>{!! str_nbsp(strtoupper($booking->psgPhone)) !!}</td>
                <td>{!! str_nbsp(strtoupper($booking->agentName)) !!}</td>
                <td>{!! str_nbsp($booking->agentCode) !!}</td>
                <td class="noPrint">
                    {{ $booking->timetable->route->from }}
                </td>
                <td class="noPrint">
                    <div
                        class="label label-table @if ($booking->status == 'Processing') label-warning @elseif($booking->status == 'Booked') label-success @else label-danger @endif">
                        {{ $booking->status }}</div>
                </td>
                <td class="text-center noPrint" >
                    <a href="#">
                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>

        @empty
            <tr>
                <td class="text-muted" colspan="14">No Data Found</td>
            </tr>
        @endforelse
    </tbody>
</table>
