@extends('layouts.master-layouts')

@section('title') Qamar Care List @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Qamar Online @endslot
        @slot('title') Qamar Care Card @endslot
    @endcomponent
    <div class="row">

    <div class="col-xl-12">
        <div class="row">
            <div class="col-md-4">
                <div class="card mini-stats-wid border border-warning">
                    <div class="card-body">
                      <blockquote class="blockquote border-warning font-size-14 mb-0">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="my-0 text-warning card-title fw-medium font-size-24">Qamar Care Cards</p>
                                <h6 class="text-muted mb-0">Here you can add qamar care card for beneficiaries</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="mini-stat-icon avatar-sm rounded-circle ">
                                    <span class="avatar-title bg-warning">
                                        <i class="bx bx-plus-circle font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                       
                        <div class="d-flex mt-4">
                             <a href="CreateQamarCareCard" class="btn btn-warning btn-lg">Enter</a>
                        </div>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid border border-primary">
                    <div class="card-body">
                      <blockquote class="blockquote border-primary font-size-14 mb-0">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="my-0 text-primary card-title fw-medium font-size-24">Qamar Care Cards</p>
                                <h6 class="text-muted mb-0">Here you can add qamar care card for beneficiaries</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                    <span class="avatar-title bg-primary">
                                        <i class="bx bx-plus-circle font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                       
                        <div class="d-flex mt-4">
                             <a href="CreateQamarCareCard" class="btn btn-primary btn-lg">Enter</a>
                        </div>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid border border-success">
                    <div class="card-body">
                      <blockquote class="blockquote border-success  font-size-14 mb-0">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="my-0 text-success card-title fw-medium font-size-24">Qamar Care Cards</p>
                                <h6 class="text-muted mb-0">Here you can add qamar care card for beneficiaries</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-success">
                                    <span class="avatar-title bg-success">
                                        <i class="bx bx-plus-circle font-size-24 "></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                       
                        <div class="d-flex mt-4">
                             <a href="CreateQamarCareCard" class="btn btn-success btn-lg">Enter</a>
                        </div>
                        </blockquote>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->

        <!-- <div class="card">
            <div class="card-body">
                <div class="d-sm-flex flex-wrap">
                    <h4 class="card-title mb-4">Email Sent</h4>
                    <div class="ms-auto">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Week</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Month</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Year</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="stacked-column-chart" class="apex-charts" dir="ltr"></div>
            </div>
        </div> -->
    </div>
</div>
<!-- end row -->

  

@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
@endsection
