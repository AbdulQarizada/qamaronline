@extends('layouts.master-layouts')

@section('title') Qamar Care List @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/css/mystyle/tabstyle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Qamar Online @endslot
        @slot('title') Qamar Care Card @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
           <a href="{{route('root')}}" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        </div>
     </div>
    <div class="row">

    <div class="col-xl-12">
        <div class="row">
            <div class="col-md-4 mb-2">
                <div class="card-one mini-stats-wid border border-warning">
                    <div class="card-body">
                      <blockquote class="blockquote border-warning font-size-14 mb-0">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="my-0 text-warning card-title fw-medium">Care Cards</p>
                                <h6 class="text-muted mb-0">Care Cards</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="mini-stat-icon avatar-sm rounded-circle ">
                                    <span class="avatar-title bg-warning">
                                        <i class="bx bx-list-ol  font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                       
                        <div class="d-flex mt-4">
                             <a href="{{route('ListQamarCareCard')}}" class="btn btn-warning btn-lg">Enter</a>
                        </div>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card-one  mini-stats-wid border border-primary">
                    <div class="card-body">
                      <blockquote class="blockquote border-primary font-size-14 mb-0">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="my-0 text-primary card-title fw-medium">Add Care Card</p>
                                <h6 class="text-muted mb-0">Qamar Care Cards</h4>
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
                             <a  href="{{route('CreateQamarCareCard')}}" class="btn btn-primary btn-lg">Enter</a>
                        </div>
                        </blockquote>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-2">
                <div class="card-one  mini-stats-wid border border-success">
                    <div class="card-body">
                      <blockquote class="blockquote border-success  font-size-14 mb-0">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="my-0 text-success card-title fw-medium  text-wrap">Approved Care Cards</p>
                                <h6 class="text-muted mb-0">Approved Care Cards</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-success">
                                    <span class="avatar-title bg-success">
                                        <i class="bx bx-check-circle  font-size-24 "></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                       
                        <div class="d-flex mt-4">
                             <a href="{{route('ApprovedQamarCareCard')}}" class="btn btn-success btn-lg">Enter</a>
                        </div>
                        </blockquote>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->

    </div>
</div>
<!-- end row -->
<br />
<div class="row">

<div class="col-xl-12">
    <div class="row">
        <div class="col-md-4">
            <div class="card-one mini-stats-wid border border-danger">
                <div class="card-body">
                  <blockquote class="blockquote border-danger font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-danger card-title fw-medium">Rejected Care Cards</p>
                            <h6 class="text-muted mb-0">Rejected Care Cards</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle ">
                                <span class="avatar-title bg-danger">
                                    <i class="bx bx-x-circle   font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                         <a href="{{route('RejectedQamarCareCard')}}" class="btn btn-danger btn-lg">Enter</a>
                    </div>
                    </blockquote>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-4">
            <div class="card-one  mini-stats-wid border border-primary">
                <div class="card-body">
                  <blockquote class="blockquote border-primary font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-primary card-title fw-medium">Add Care Card</p>
                            <h6 class="text-muted mb-0">Qamar Care Cards</h4>
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
                         <a  href="{{route('CreateQamarCareCard')}}" class="btn btn-primary btn-lg">Enter</a>
                    </div>
                    </blockquote>
                </div>
            </div>
        </div> -->
        <!-- <div class="col-md-4">
            <div class="card-one  mini-stats-wid border border-success">
                <div class="card-body">
                  <blockquote class="blockquote border-success  font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-success card-title fw-medium  text-wrap">Approved Care Cards</p>
                            <h6 class="text-muted mb-0">Approved Care Cards</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle bg-success">
                                <span class="avatar-title bg-success">
                                    <i class="bx bx-check-circle  font-size-24 "></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                         <a href="{{route('ApprovedQamarCareCard')}}" class="btn btn-success btn-lg">Enter</a>
                    </div>
                    </blockquote>
                </div>
            </div>
        </div> -->

    </div>
    <!-- end row -->
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
