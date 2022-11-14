@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts')

@section('title') Orphan and Sponsorships @endsection

@section('css')
<link href="{{ URL::asset('/assets/css/mystyle/OrphanGrid.css') }}" rel="stylesheet" type="text/css" />


@endsection

@section('content')

<div class="row mt-4">
    @if (Auth::check())
    <div class="col-4">
        <a href="{{route('IndexOrphansRelief')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
    </div>
    @endif
</div>

<div class="row mb-3">
    <div class="col-md-4 col-sm-4">
        <div class="mt-2">
            <h5></h5>
        </div>
    </div>
    <div class="col-lg-8 col-sm-6">
        <form class="mt-4 mt-sm-0 float-sm-end d-sm-flex align-items-center">
            <div class="search-box me-2">
                <div class="position-relative">
                    <input type="text" class="form-control border-0" placeholder="Search...">
                    <i class="bx bx-search-alt search-icon"></i>
                </div>
            </div>
            @if (Auth::check())
            <ul class="nav nav-pills product-view-nav justify-content-end mt-3 mt-sm-0">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('AllGridOrphans')}}"><i class="bx bx-grid-alt"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('AllOrphans')}}"><i class="bx bx-list-ul"></i></a>
                </li>
            </ul>
            @endif

        </form>
    </div>
</div>

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
        {!! $datas->links() !!}
        </ul>
    </div>
</div>

@endsection
@section('script')


@endsection