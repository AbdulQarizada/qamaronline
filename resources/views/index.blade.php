@extends('layouts.master-layouts')

@section('title') @lang('translation.Dashboards') @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Home @endslot
@slot('title') Dashboard @endslot
@endcomponent

<div class="row">
    <div class="col-xl-4">
        <div class="card overflow-hidden">
            <div class="bg-primary bg-soft">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-3">
                            <h5 class="text-dark">Welcome Back !</h5>
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="{{ URL::asset('/assets/images/profile-img.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="avatar-md profile-user-wid mb-4">
                            <img src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg') }}" alt="" class="img-thumbnail rounded-circle">
                        </div>
                    </div>

                    <div class="col-sm-8">
                        <div class="pt-4">

                            <div class="row">
                                <div class="col-8">
                                <h5 class="font-size-15 text-truncate">{{ Str::ucfirst(Auth::user()->name) }}</h5>
                        <p class="text-muted mb-0 text-truncate">{{ Str::ucfirst(Auth::user()->name) }}</p>
                                </div>
                            
                            </div>
                            <!-- <div class="mt-4">
                                <a href="" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
        <div class="row">
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Date</p>
                                <h4 class="mb-0"><script>document.write(new Date().getFullYear())</script></h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-dark">
                                    <span class="avatar-title bg-dark">
                                        1
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Last Login</p>
                                <h4 class="mb-0"><script>document.write(new Date().getFullYear())</script></h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center ">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-dark">
                                        2
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Average Price</p>
                                <h4 class="mb-0">$16.2</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-dark">
                                        3
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Average Price</p>
                                <h4 class="mb-0">$16.2</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-dark">
                                       4
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Average Price</p>
                                <h4 class="mb-0">$16.2</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-dark">
                                        5
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Average Price</p>
                                <h4 class="mb-0">$16.2</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-dark">
                                       6
                                    </span>
                                </div>
                            </div>
                        </div>
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
<br />
 <br />
<div class="row">
<h1 class="display-6 mt-4 mb-4 fw-medium text-dark text-muted">Projects</h1>
<div class="col-xl-12">
    <div class="row">
        <div class="col-md-4">
            <div class="card mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-dark card-title fw-semibold">Orphans Relief</p>
                            <h6 class="text-muted mb-0">Orphans Relief</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle ">
                                <span class="avatar-title bg-dark">
                                    <i class="bx bx-smile font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                         <a href="OrphansRelief" class="btn btn-primary btn-lg">Enter</a>
                    </div>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote  font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-dark card-title fw-semibold">Aid and Relief</p>
                            <h6 class="text-muted mb-0">Aid and Relief</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle ">
                                <span class="avatar-title bg-dark">
                                    <i class="bx bx-briefcase-alt-2 font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                         <a href="AidAndRelief" class="btn btn-primary btn-lg">Enter</a>
                    </div>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote  font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-dark card-title fw-semibold">Wash</p>
                            <h6 class="text-muted mb-0">Wash</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle ">
                                <span class="avatar-title bg-dark">
                                    <i class="bx bx-gas-pump font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                         <a href="Wash" class="btn btn-primary btn-lg">Enter</a>
                    </div>
                    </blockquote>
                </div>
            </div>
        </div>
        

    </div>
    <!-- end row -->

    <div class="row">
<div class="col-xl-12">
    <div class="row">
        <div class="col-md-4">
            <div class="card mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-dark card-title fw-semibold">Education</p>
                            <h6 class="text-muted mb-0">Education</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle ">
                                <span class="avatar-title bg-dark">
                                    <i class="bx bxs-graduation font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                         <a href="Education" class="btn btn-primary btn-lg">Enter</a>
                    </div>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote  font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-dark card-title fw-semibold">Initiative</p>
                            <h6 class="text-muted mb-0">Initiative</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle ">
                                <span class="avatar-title bg-dark">
                                    <i class="bx bx-bulb font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                         <a href="Initiative" class="btn btn-primary btn-lg">Enter</a>
                    </div>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote  font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-dark card-title fw-semibold">Medical Sector</p>
                            <h6 class="text-muted mb-0">Medical Sector</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle ">
                                <span class="avatar-title bg-dark">
                                    <i class="bx bxs-ambulance font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                         <a href="MedicalSector" class="btn btn-primary btn-lg">Enter</a>
                    </div>
                    </blockquote>
                </div>
            </div>
        </div>
        

    </div>
    <!-- end row -->

    <br />
    <br />

    <div class="row ">
<h1 class="display-6 mt-4 mb-4 fw-medium text-dark text-muted">Benef. Services</h1>
<div class="col-xl-12">
    <div class="row">
        <div class="col-md-4">
            <div class="card mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-dark card-title fw-semibold">Food Appeal</p>
                            <h6 class="text-muted mb-0">Food Appeal</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle ">
                                <span class="avatar-title bg-dark">
                                    <i class="bx bx-fingerprint  font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                         <a href="FoodAppeal" class="btn btn-primary btn-lg">Enter</a>
                    </div>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote  font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-dark card-title fw-semibold">Qamar Care Card</p>
                            <h6 class="text-muted mb-0">Qamar Care Card</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle ">
                                <span class="avatar-title bg-dark">
                                    <i class="bx bx-credit-card font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                         <a href="QamarCareCard" class="btn btn-primary btn-lg">Enter</a>
                    </div>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote  font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-dark card-title fw-semibold">Appeals' Distributions</p>
                            <h6 class="text-muted mb-0">Appeals' Distributions</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle ">
                                <span class="avatar-title bg-dark">
                                    <i class="bx bx-task font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                         <a href="AppealsDistributions" class="btn btn-primary btn-lg">Enter</a>
                    </div>
                    </blockquote>
                </div>
            </div>
        </div>
        

    </div>
    <!-- end row -->


    <div class="row">
<div class="col-xl-12">
    <div class="row">
        <div class="col-md-4">
            <div class="card mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-dark card-title fw-semibold">Donors & Donor Boxes</p>
                            <h6 class="text-muted mb-0">Donors & Donor Boxes</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle ">
                                <span class="avatar-title bg-dark">
                                    <i class="bx bxs-box font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                         <a href="Donors&DonorBoxes" class="btn btn-primary btn-lg">Enter</a>
                    </div>
                    </blockquote>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-4">
            <div class="card mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote  font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-dark card-title fw-semibold">Quartly Reports</p>
                            <h6 class="text-muted mb-0">Quartly Reports</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle ">
                                <span class="avatar-title bg-dark">
                                    <i class="bx bx-briefcase-alt-2 font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                         <a href="QuartlyReports" class="btn btn-primary btn-lg">Enter</a>
                    </div>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote  font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-dark card-title fw-semibold">Yearly Reports</p>
                            <h6 class="text-muted mb-0">Yearly Reports</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle ">
                                <span class="avatar-title bg-dark">
                                    <i class="bx bx-gas-pump font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                         <a href="YearlyReports" class="btn btn-primary btn-lg">Enter</a>
                    </div>
                    </blockquote>
                </div>
            </div>
        </div> -->
        

    </div>
    <!-- end row -->


    <br />
    <br />

    <div class="row">
<h1 class="display-6 mt-4 mb-4 fw-medium text-dark text-muted">Reports</h1>
<div class="col-xl-12">
    <div class="row">
        <div class="col-md-4">
            <div class="card mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-dark card-title fw-semibold">Monthly Reports</p>
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
                         <a href="MonthlyReports" class="btn btn-primary btn-lg">Enter</a>
                    </div>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote  font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-dark card-title fw-semibold">Quartly Reports</p>
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
                         <a href="QuartlyReports" class="btn btn-primary btn-lg">Enter</a>
                    </div>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote  font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-dark card-title fw-semibold">Yearly Reports</p>
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
                         <a href="YearlyReports" class="btn btn-primary btn-lg">Enter</a>
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