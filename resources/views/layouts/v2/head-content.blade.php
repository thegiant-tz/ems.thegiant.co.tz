<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>EMS | @yield('title')</title>
<meta name="description" content="Application for managing buses" />
<meta name="keywords"
    content="admin, admin dashboard, admin template, cms, crm, BM Coach Admin, responsive admin, sass, panel, software, ui, visualization, web app, application" />
<meta name="author" content="Shaaban H Rajabu" />

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}" />

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">

<!-- Data table CSS -->
<link href="{{ asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}" rel="stylesheet"
    type="text/css" />

<!-- Toast CSS -->
<link href="{{ asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet"
    type="text/css">

<!-- Morris Charts CSS -->
<link href="{{ asset('vendors/bower_components/morris.js/morris.css') }}" rel="stylesheet" type="text/css" />

<!-- Chartist CSS -->
<link href="{{ asset('vendors/bower_components/chartist/dist/chartist.min.css') }}" rel="stylesheet" type="text/css" />


<!-- vector map CSS -->
<link href="{{ asset('vendors/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">

<!-- Custom CSS -->
<link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@stack('css_after')