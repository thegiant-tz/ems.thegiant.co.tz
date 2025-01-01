@extends('layouts.v1.backend')
@section('title', 'Calendar')
@push('css_after')
    <link rel="stylesheet" href="{{ asset('assets/plugins/fullcalendar/css/fullcalendar.min.css') }}">
    <!-- page css -->
    <link rel="stylesheet" href="{{ asset('assets/css/pages/pages.css') }}">
@endpush
@section('content')
<div class="row">
    <!-- [ Full-calendar ] start -->
    <div class="col-sm-12">
        <div class="card fullcalendar-card">
            <div class="card-header">
                <h5>Calendar</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    {{-- <div class="col-xl-2 col-md-12">
                        <div id='external-events' class="external-events">
                            <h4>Events</h4>
                            <div class='fc-event'>My Event 1</div>
                            <div class='fc-event'>My Event 2</div>
                            <div class='fc-event'>My Event 3</div>
                            <div class='fc-event'>My Event 4</div>
                            <div class='fc-event'>My Event 5</div>

                            <div class="form-group">
                                <div class="switch switch-primary d-inline m-r-10">
                                    <input type="checkbox" id="drop-remove">
                                    <label for="drop-remove"
                                        class="cr switch-alignment"></label>
                                </div>
                                <label>Remove Event</label>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-md-12">
                        <div id='calendar' class='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Full-calendar ] end -->
</div>
@stop

@push('js_after')
    <!-- Full calendar js -->
    <script src="{{ asset('assets/plugins/fullcalendar/js/lib/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/fullcalendar/js/lib/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/fullcalendar/js/fullcalendar.min.js') }}"></script>
    <script type="text/javascript">
        // Full calendar
        $(window).on('load', function () {
            $('#external-events .fc-event').each(function () {
                $(this).data('event', {
                    title: $.trim($(this).text()),
                    stick: true
                });
                $(this).draggable({
                    zIndex: 999,
                    revert: true,
                    revertDuration: 0
                });
            });
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                defaultDate: "{{ today()->format('Y-m-d') }}",
                editable: false,
                droppable: false,
                events: [{
                    title: 'All Day Event',
                    start: '2025-01-02',
                    borderColor: '#19BCBF',
                    backgroundColor: '#19BCBF',
                    textColor: '#fff'
                }, {
                    title: 'Long Event',
                    start: '2018-08-07',
                    end: '2018-08-10',
                    borderColor: '#FF425C',
                    backgroundColor: '#FF425C',
                    textColor: '#fff'
                }, {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2018-08-09T16:00:00',
                    borderColor: '#FF9764',
                    backgroundColor: '#FF9764',
                    textColor: '#fff'
                }, {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2018-08-16T16:00:00',
                    borderColor: '#3ebfea',
                    backgroundColor: '#3ebfea',
                    textColor: '#fff'
                }, {
                    title: 'Conference',
                    start: '2018-08-11',
                    end: '2018-08-13',
                    borderColor: '#13bd8a',
                    backgroundColor: '#13bd8a',
                    textColor: '#fff'
                }, {
                    title: 'Meeting',
                    start: '2018-08-12T10:30:00',
                    end: '2018-08-12T12:30:00'
                }, {
                    title: 'Lunch',
                    start: '2018-08-12T12:00:00',
                    borderColor: '#FF425C',
                    backgroundColor: '#FF425C',
                    textColor: '#fff'
                }, {
                    title: 'Happy Hour',
                    start: '2018-08-12T17:30:00',
                    borderColor: '#463699',
                    backgroundColor: '#463699',
                    textColor: '#fff'
                }, {
                    title: 'Birthday Party',
                    start: '2018-08-13T07:00:00'
                }, {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2018-08-28',
                    borderColor: '#2DCEE3',
                    backgroundColor: '#2DCEE3',
                    textColor: '#fff'
                }],
                drop: function () {
                    if ($('#drop-remove').is(':checked')) {
                        $(this).remove();
                    }
                }
            });
        });
    </script>
@endpush
