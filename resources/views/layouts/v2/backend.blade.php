<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.v2.head-content')
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!-- /Preloader -->
    <div class="wrapper theme-2-active navbar-top-light horizontal-nav">

        @include('layouts.v2.header')

        @include('layouts.v2.side-bar-left')

        @include('layouts.v2.side-bar-right')


        <!-- Main Content -->
        <div class="page-wrapper">
            <div class="container" style="padding-top: 15px;">
                @yield('content')
            </div>

            <!-- Footer -->
            <footer class="footer pl-30 pr-30">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>{{ now()->format('Y') }} &copy; THEGIANT TECHNOLOGIES</p>
                        </div>
                        <div class="col-sm-6 text-right">
                            <p>Follow Us</p>
                            <a href="index.html#"><i class="fa fa-facebook"></i></a>
                            <a href="index.html#"><i class="fa fa-twitter"></i></a>
                            <a href="index.html#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- /Footer -->

        </div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

    <!-- JavaScript -->

    <!-- jQuery -->
    <script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Data table JavaScript -->
    <script src="{{ asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
	<script src="{{ asset('vendors/bower_components/jszip/dist/jszip.min.js') }}"></script>
	<script src="{{ asset('vendors/bower_components/pdfmake/build/pdfmake.min.js') }}"></script>
	<script src="{{ asset('vendors/bower_components/pdfmake/build/vfs_fonts.js') }}"></script>
	
	<script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
	<script src="{{ asset('dist/js/export-table-data.js') }}"></script>

    <!-- Progressbar Animation JavaScript -->
    {{-- <script src="{{ asset('vendors/bower_components/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/jquery.counterup/jquery.counterup.min.js') }}"></script> --}}

    <!-- Sparkline JavaScript -->
    {{-- <script src="{{ asset('vendors/jquery.sparkline/dist/jquery.sparkline.min.js') }}"></script> --}}

    <!-- Owl JavaScript -->
    {{-- <script src="{{ asset('vendors/bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script> --}}

    <!-- Switchery JavaScript -->
    {{-- <script src="{{ asset('vendors/bower_components/switchery/dist/switchery.min.js') }}"></script> --}}

    <!-- Vector Maps JavaScript -->
    {{-- <script src="{{ asset('vendors/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('vendors/vectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
    <script src="{{ asset('vendors/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script> --}}

    <!-- Toast JavaScript -->
    {{-- <script src="{{ asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script> --}}

    <!-- Piety JavaScript -->
    {{-- <script src="{{ asset('vendors/bower_components/peity/jquery.peity.min.js') }}"></script> --}}

    <!-- EChartJS JavaScript -->
    {{-- <script src="{{ asset('vendors/bower_components/echarts/dist/echarts-en.min.js') }}"></script> --}}

    <!-- Morris Charts JavaScript -->
    {{-- <script src="{{ asset('vendors/bower_components/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('vendors/bower_components/morris.js/morris.min.js') }}"></script> --}}
    <script src="{{ asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>

    <!-- ChartJS JavaScript -->
    {{-- <script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script> --}}


    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('dist/js/jquery.slimscroll.js') }}"></script>


    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('dist/js/dropdown-bootstrap-extended.js') }}"></script>

    <script src="{{ asset('js/select2.min.js') }}"></script>


    {{-- <script src="{{ asset('dist/js/vectormap-data.js') }}"></script> --}}


    {{-- <script src="{{ asset('dist/js/peity-data.js') }}"></script> --}}


    <!-- Init JavaScript -->
    <script src="{{ asset('dist/js/init.js') }}"></script>
    {{-- <script src="{{ asset('dist/js/dashboard-data.js') }}"></script> --}}
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <script>
        function logout() {
            $.post("{{ route('account.logout') }}", function(response) {
                if (response.status == 'success') {
                    window.open("{{ route('welcome') }}", "_SELF");
                } else {
                    window.location.reload()
                }
            })
        }

        $('.select2').select2()
    </script>

    @stack('js_after')
</body>

</html>
