@extends('layouts.master-layouts')

@section('title') @lang('translation.Dashboards') @endsection
@section('css')
    
    <link href="{{ URL::asset('/assets/css/mystyle/tabstyle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

@component('components.breadcrumb')
@slot('li_1') Home @endslot
@slot('title') Reports @endslot
@endcomponent



    <div class="row">
<h1 class="display-6 mt-4 mb-4 fw-medium text-dark text-muted">Reports</h1>
<div class="col-xl-12">
    <div class="row">
        <div class="col-md-4">
            <div class="card-one  mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-primary card-title fw-semibold">Monthly Reports</p>
                            <h6 class="text-muted mb-0">Monthly Reports</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle ">
                                <span class="avatar-title bg-dark">
                                    <i class="bx bxs-report  font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                         <a href="MonthlyReports" class="btn btn-info btn-lg">Enter</a>
                    </div>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-one  mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote  font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-primary card-title fw-semibold">Quartly Reports</p>
                            <h6 class="text-muted mb-0">Quartly Reports</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle ">
                                <span class="avatar-title bg-dark">
                                    <i class="bx bxs-report  font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                         <a href="QuartlyReports" class="btn btn-info btn-lg">Enter</a>
                    </div>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-one  mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote  font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-primary card-title fw-semibold">Yearly Reports</p>
                            <h6 class="text-muted mb-0">Yearly Reports</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle ">
                                <span class="avatar-title bg-dark">
                                    <i class="bx bxs-report  font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                         <a href="YearlyReports" class="btn btn-info btn-lg">Enter</a>
                    </div>
                    </blockquote>
                </div>
            </div>
        </div>
        

    </div>
    <!-- end row -->



<!-- subscribeModal -->
<!-- <div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">
                    <div class="avatar-md mx-auto mb-4">
                        <div class="avatar-title bg-light rounded-circle text-primary h1">
                            <i class="mdi mdi-email-open"></i>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <h4 class="text-primary">Subscribe !</h4>
                            <p class="text-muted font-size-14 mb-4">Subscribe our newletter and get notification to stay
                                update.</p>

                            <div class="input-group bg-light rounded">
                                <input type="email" class="form-control bg-transparent border-0" placeholder="Enter Email address" aria-label="Recipient's username" aria-describedby="button-addon2">

                                <button class="btn btn-primary" type="button" id="button-addon2">
                                    <i class="bx bxs-paper-plane"></i>
                                </button>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- end modal -->

@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endsection