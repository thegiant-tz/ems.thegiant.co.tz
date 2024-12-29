
<table id="print-buttons" class="table mb-0 table-striped table-bordered">
    <thead>
        <tr class="bgPrimary">
            <th style="color: white;">{!! str_nbsp('S/No') !!}</th>
            <th style="color: white;">{!! str_nbsp('Booking ID') !!}</th>
            <th style="color: white;">{!! str_nbsp('Booking DATE') !!}</th>
            <th style="color: white;">{!! str_nbsp('Departure date') !!}</th>
            <th style="color: white;">{!! str_nbsp('origin') !!}</th>
            <th style="color: white;">{!! str_nbsp('Destination') !!}</th>
            <th style="color: white;">{!! str_nbsp('bus no') !!}</th>
            <th style="color: white;">{!! str_nbsp('amount paid') !!}</th>
            <th style="color: white;">{!! str_nbsp('payment channel') !!}</th>
            <th style="color: white;">{!! str_nbsp('payment status') !!}</th>
            <th style="color: white;">{!! str_nbsp('sender name') !!}</th>
            <th style="color: white;">{!! str_nbsp('agent name') !!}</th>
            <th style="color: white;">{!! str_nbsp('agent code') !!}</th>
            <th style="color: white;">{!! str_nbsp('collection point') !!}</th>
            <th style="color: white;">{!! str_nbsp('status') !!}</th>
            <th style="color: white;">{!! str_nbsp('action') !!}</th>
        </tr>
    </thead>
    <tbody>

        @forelse  ($bookings as $index => $booking)
    <tr>
        <td><a href="javascript:void(0)">{{ countLoop($bookings, $loop) }}</a>
        </td>
        <td><a href="javascript:void(0)">{{ aes_decrypt($booking->codeId) }}</a>
        </td>
        <td>
            {{ $booking->bookingDate }}
        </td>
        <td><span class="text-muted">{{ $booking->shippingDate }}</span>
        </td>
        <td>{{ $booking->route->from }}</td>
        <td>{{ $booking->route->to }}</td>
        <td>
            @if (!is_null($booking->bus))
                {{ $booking->bus->number }}
            @endif
        </td>
        <td class="text-right">{{ number_format($booking->item->amount) }}</td>
        <td>CASH</td>
        <td class="text-center">
            <div class="label label-table label-success">Paid</div>
        </td>
        <td>{!! str_nbsp(strtoupper($booking->sender->name)) !!}</td>
        <td>{!! str_nbsp(strtoupper($booking->agent->name)) !!}</td>
        <td>{!! str_nbsp($booking->agent->username) !!}</td>
        <td>
            {{ $booking->route->from }}
        </td>
        <td>
            <div
                class="label label-table @if ($booking->status == 'Pending') label-danger @elseif($booking->status == 'In Transit') label-warning @else label-success @endif">
                {{ $booking->status }}</div>
        </td>
        <td class="text-center">
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