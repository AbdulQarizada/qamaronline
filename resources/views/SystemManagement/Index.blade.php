@extends('layouts.master-layouts')

@section('title') ORPHANS AND SPONSORSHIPS @endsection

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/css/mystyle/tabstyle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')


<div class="row">
    <div class="col-12">
        <a href="{{route('root')}}" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
    </div>
</div>
<div class="row">
    <div class="mt-4 mb-4">
        <blockquote class="blockquote border-primary  font-size-14 mb-0">
            <p class="my-0   fw-medium text-dark text-muted card-title font-size-24 text-wrap">SYSTEM MANAGEMENT</p>

        </blockquote>
    </div>
    <div class="col-xl-12">
        <div class="row">

            <div class="col-md-4 mb-2">
                <a href="{{route('AllUser')}}">
                    <div class="card-one mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-medium">USERS</p>
                                        <h6 class="text-muted mb-0">USERS</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                <i class="bx bx-id-card   font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <!-- end row -->

    </div>
</div>

@endsection
@section('script')

@endsection