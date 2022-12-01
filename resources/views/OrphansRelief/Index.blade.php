@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts')
@section('title') Orphan and Sponsorships @endsection
@section('css')
<link href="{{ URL::asset('/assets/css/mystyle/tabstyle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@if(Cookie::get('Layout') == 'LayoutNoSidebar')
<div class="row">
    <div class="col-12">
        <a href="{{route('root')}}" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light">
            <i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back
        </a>
    </div>
</div>
<div class="row mt-4">
    @if(Auth::user()->IsOrphanRelief == 1)
    <div class="mt-4 mb-4">
        <p class="my-0 fw-medium text-dark text-muted card-title font-size-24 text-wrap text-uppercase">Orphan and Sponsorships</p>
    </div>
    @endif
    <div class="col-xl-12">
        <div class="row">
            @if(Auth::user()->IsOrphanRelief == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('AllOrphans')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-details-outline text-primary display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Orphans</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsOrphanRelief == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('AllSponsor')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi mdi-account-child text-info display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Sponsors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsOrphanRelief == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('AllSubscription')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-box-multiple-outline text-warning display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Subscriptions</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsOrphanRelief == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('AllCard')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-card-account-details-outline text-dark display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Cards</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsOrphanRelief == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('AllPayment')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-cash-multiple text-success display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Payments</p>
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
@endif
@endsection
@section('script')
@endsection
