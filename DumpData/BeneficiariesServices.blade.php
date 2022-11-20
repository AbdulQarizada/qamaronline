@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts')


@section('title') Benefeciary Services @endsection
@section('css')

<link href="{{ URL::asset('/assets/css/mystyle/tabstyle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

<div class="row ">
    @if(Auth::user()->IsFoodAppeal == 1 || Auth::user()->IsQamarCareCard == 1 || Auth::user()->IsAppealsDistributions == 1 || Auth::user()->IsDonorsAndDonorBoxes == 1)
    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">Benefeciary Services</h1>
    @endif

    <div class="col-xl-12">
        <div class="row">

            @if(Auth::user()->IsQamarCareCard == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('IndexCareCard')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-credit-card display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Care Card</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsFoodAppeal == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('IndexEducation')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-fingerprint display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Appeals</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsAppealsDistributions == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('IndexCareCard')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-task display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Distribution</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsDonorsAndDonorBoxes == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('IndexCareCard')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bxs-box display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Donors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            @endif

        </div>
    </div>
</div>


@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endsection