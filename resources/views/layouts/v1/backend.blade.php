<!DOCTYPE html>
<html lang="en">

<head>
    @stack('css_before')
    @include('layouts.v1.head-content')
    @stack('css_after')
</head>

<body>
    @include('backend.layouts.side-menus')
    @include('backend.layouts.header')
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        @include('backend.pages.v1.includes.hero')
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <script>
        $('.select2').select2()
    </script>

    @stack('js_after')
    {{-- <script src="{{ asset('assets/js/menu-setting.js') }}"></script> --}}

</body>

</html>
