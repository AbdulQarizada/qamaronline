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

    <link href="{{ URL::asset('/assets/css/mystyle/OrphanGrid.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="bg-white">
    <div id="layout-wrapper">
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="row">
                            @foreach($datas as $data)
                            <div class="col-md-3">
                                <div class="product-container">
                                    <div class="product-image">
                                        <span class="hover-link"></span>

                                        <a href="{{route('AddToCartOrphans', ['data' => $data -> id])}}" class="product-link">Sponsor Me</a>
                                        <img class="img-responsive" src="{{URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)}}" alt="">
                                    </div>
                                    <div class="product-description">
                                        <div class="product-label">

                                            <div class="product-name textoverflow">
                                                <h1>{{$data -> FirstName}} / {{\Carbon\Carbon::parse($data -> DOB)->diff(\Carbon\Carbon::now())->format('%y Years old');}} </h1>
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <div>
                                                            <li class="list-inline-item me-3">
                                                                <span class="text-danger text-uppercase">Waiting Since:</span>
                                                                {{$data -> created_at -> format("d-m-Y") }}

                                                            </li>
                                                            <p class="text-muted"><i class="bx bx-user-circle  font-size-16 align-middle text-primary me-1"></i>ID: {{$data -> id}} </p>
                                                            <p class="text-muted text-uppercase"><i class="bx bx-home-alt  font-size-16 align-middle text-primary me-1 "></i> {{$data -> ProvinceName}} - Afghanistan </p>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
                                    <li class="page-item disabled">
                                        <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>