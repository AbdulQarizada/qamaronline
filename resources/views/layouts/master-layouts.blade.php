<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | Qamar Foundation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">
    <!-- Bootstrap Css -->
    <link href="{{ URL::asset('/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ URL::asset('/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ URL::asset('/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    
    @yield('css')

</head>

@section('body')
@if (Auth::check())
    <body  data-topbar="dark" data-layout="horizontal">
        @endif
    @if (!Auth::check())
    <body  class="bg-white" data-topbar="dark" data-layout="horizontal">
    @endif

@show
@include('sweetalert::alert')

    <!-- Begin page -->
    <div id="layout-wrapper">
    
    @if (Auth::check())
        @include('layouts.horizontal')
        @endif
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <!-- Start content -->
                <div class="container-fluid">
                    @yield('content')
                </div> <!-- content -->
            </div>
            <br />
            <br />
            <br />
            <br />
            @if (Auth::check())
            @include('layouts.footer')
        @endif

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <!-- END Right Sidebar -->

    @include('layouts.vendor-scripts')
</body>

</html>
