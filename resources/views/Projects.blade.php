@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts')


@section('title') Projects @endsection
@section('css')

    <link href="{{ URL::asset('/assets/css/mystyle/tabstyle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="row">
    @if(Auth::user()->IsOrphanRelief == 1 || Auth::user()->IsAidAndRelief == 1 || Auth::user()->IsWash == 1 || Auth::user()->IsEducation == 1 || Auth::user()->IsInitiative == 1|| Auth::user()->IsMedicalSector == 1)

    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">Projects</h1>
    @endif

    <div class="col-xl-12">
        <div class="row">
            @if(Auth::user()->IsOrphanRelief == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('IndexOrphansRelief')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-child  display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Orphans Relief</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsAidAndRelief == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('IndexOrphansRelief')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-briefcase-alt-2 display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Aid and Relief</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsWash == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('IndexOrphansRelief')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-gas-pump  display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Wash</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsEducation == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('IndexEducation')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bxs-graduation  display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Education</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif

            @if(Auth::user()->IsInitiative == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('IndexEducation')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-bulb  display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Initiative</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif

            @if(Auth::user()->IsMedicalSector == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('IndexEducation')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bxs-ambulance  display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Medical Sector</p>
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