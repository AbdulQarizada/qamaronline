@extends('layouts.master-without-nav')

@section('title')
   Successfull Application
@endsection

@section('body')

    <body>
    @endsection

    @section('content')


        <section class="my-5 pt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="home-wrapper">
                            <div class="mb-5">
                                <a href="index" class="d-block auth-logo">
                                    <!-- <img src="{{ URL::asset('/assets/images/logo-dark@2x.png') }}" alt="" height="80"
                                        class="auth-logo-dark mx-auto">
                                    <img src="{{ URL::asset('/assets/images/logo-dark@2x.png') }}" alt="" height="80"
                                        class="auth-logo-light mx-auto"> -->
                                </a>
                                <!-- <h1 class="mt-5">Qamar Foundation</h1> -->
                            </div>


                            <div class="row justify-content-center">
                                <div class="col-sm-4">
                                    <div class="maintenance-img">
                                        <img src="{{ URL::asset('/assets/images/Work_6.png') }}" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-5 text-success">Congratulations</h1>
                            <p  class="font-size-14">Your payment has been revieved. we have send you an email along with password, please login to your account.</p>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card mt-4 maintenance-box">
                                        <div class="card-body">
                                        <img src="{{ URL::asset('/assets/images/logo-dark@2x.png') }}" alt="" height="50"
                                        class="auth-logo-light mx-auto">
                                            <h5 class="font-size-15 text-uppercase mt-2">Haven't Heard about Qamar?</h5>
                                            <p class="text-muted mb-0">Please click on the link below to know more about Qamar Charity Foundation.</p>
                                            <a href="https://qamarcharity.org/">Qamar Charity Foundation <i class="bx bx-right-arrow-alt "></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mt-4 maintenance-box">
                                        <div class="card-body">
                                        <img src="{{ URL::asset('/assets/images/logo-dark@2x.png') }}" alt="" height="50"
                                        class="auth-logo-light mx-auto">
                                            <h5 class="font-size-15 text-uppercase mt-2">
                                                Login to our system?</h5>
                                            <p class="text-muted mb-0">With the credentials that have been sent to your email, now you can login to our system.</p>
                                            <a href="https://online.qamarcharity.org/">Login<i class="bx bx-right-arrow-alt "></i></a>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mt-4 maintenance-box">
                                        <div class="card-body">
                                            <i class="bx bx-envelope mb-4 h1 text-primary"></i>
                                            <h5 class="font-size-15 text-uppercase">
                                                Do you need Support?</h5>
                                            <p class="text-muted mb-0">If you are going to need any support please do not be hesiated to reach us at. <a
                                                    href="mailto:info@qamarcharity.org"
                                                    class="text-decoration-underline">orphanrelief@qamarcharity.org</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endsection
