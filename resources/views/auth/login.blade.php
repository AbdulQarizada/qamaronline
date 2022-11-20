@extends('layouts.master-without-nav')

@section('title')
@lang('translation.Login')
@endsection

@section('body')

<body>
    @endsection

    @section('content')
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-white bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-black p-4">

                                        <!-- <h5 class="text-primary">Qamar Foundation</h5>
                                            <p>Sign in to continue to Qamar Online Systems.</p> -->
                                    </div>
                                </div>
                                <!-- <div class="col-5 align-self-end">
                                        <img src="{{ URL::asset('/assets/images/profile-img.png') }}" alt=""
                                            class="img-fluid">
                                    </div> -->
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="auth-logo">


                                <a href="index" class="auth-logo-dark">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="{{ URL::asset('/assets/images/logo.png') }}" alt="" class="rounded-circle" height="34">

                                        </span>

                                    </div>
                                </a>
                            </div>
                            @error('email')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @enderror
                            <div class="p-2">

                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter Email" autocomplete="email" autofocus>

                                    </div>

                                    <div class="mb-3">
                                        <div class="float-end">
                                            @if (Route::has('password.request'))
                                            <!-- <a href="{{ route('password.request') }}" class="text-muted">Forgot password?</a> -->
                                            @endif
                                        </div>
                                        <label class="form-label">Password</label>
                                        <div class="input-group auth-pass-inputgroup @error('password') is-invalid @enderror">
                                            <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="password" placeholder="Enter password" aria-label="password" aria-describedby="password-addon">
                                            <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            Remember me
                                        </label>
                                    </div>
                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>© <script> document.write(new Date().getFullYear()) </script> QAMARONLINE. Developed with <i class="mdi mdi-heart text-danger"></i> by Qamar MIS Team</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection