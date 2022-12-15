@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts')
@section('title') Education and Scholarship @endsection
@section('css')
<link href="{{ URL::asset('/assets/css/mystyle/tabstyle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <a href="{{route('root')}}" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
    </div>
</div>
<div class="row">
    @if(Auth::user()->IsEducation == 1)
    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">Education and Scholarship</h1>
    @endif
    <div class="col-xl-12">
        <div class="row">
            @if(Auth::user()->IsEducation == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('AllScholarship')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-bullseye-arrow display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Scholarships</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsEducation == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('AllApplicantEducation')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-supervisor-circle-outline text-info display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Applicants</p>
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
@endsection