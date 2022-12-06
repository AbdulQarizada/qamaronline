@extends('Layouts.master-without-nav')
@section('title') Orphan and Sponsorships @endsection
@section('css')

@endsection
@section('body')

<body>
    @endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success {{ !Session::has('done') ? 'd-none' : ''  }}">
            {{ Session::get('done') }}
        </div>
    </div>
</div>
@if($datas-> count() > 0)
<div class="row">
    @foreach($datas as $data)
    <div class="col-md-3">
        <div class="product-container">
            <div class="product-image">
                <a href="{{route('AddToCartPayment', ['data' => $data -> id])}}" class="product-link btn bg-warning text-white rounded">
                    <h3 class="text-white bold">Sponsor Me</h3>
                </a>
                <img class="img-responsive" src="{{URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)}}" alt="">
            </div>
            <div class="product-description">
                <div class="product-label">
                    <div class="product-name textoverflow">
                        <h1>{{$data -> FirstName}} / {{\Carbon\Carbon::parse($data -> DOB)->diff(\Carbon\Carbon::now())->format('%y');}} </h1>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div>
                                    <li class="list-inline-item me-3">
                                        <span class="text-danger text-uppercase">Waiting Since:</span>
                                        {{$data -> created_at -> format("j F Y")  }}
                                    </li>
                                    <p class="text-muted text-uppercase"><i class="bx bx-home-alt  font-size-16 align-middle text-primary me-1 "></i> {{$data -> ProvinceName}} - Afghanistan </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="row">
    <div class="col-lg-12">
        <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
            {!! $datas->links() !!} <span class="m-2 text-white badge bg-dark">{{ $datas->total() }} Total Records</span>
        </ul>
    </div>
</div>
@else
<div class="row">
    <div class="col-lg-12">
        <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
           <span class="m-2  text-danger display-4">No Orphan to sponsor at this time</span>
        </ul>
    </div>
</div>
@endif
@endsection
@section('script')
@endsection