@extends('layouts.master-layouts')

@section('title') Orphans List @endsection

@section('css')
<!-- ION Slider -->
<link href="{{ URL::asset('/assets/libs/ion-rangeslider/ion-rangeslider.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="row mt-4">
    @if (Auth::check())
    <div class="col-4">
        <a href="{{route('IndexOrphansRelief')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>

    </div>
    @endif
    <!-- <div class="col-6">
                                <h1 class="fw-medium font-size-24 ">Orphans List</h1>
        </div> -->

        @if(Session::has('cart'))
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive rounded">
            <table class="table project-list-table table-nowrap align-middle table-borderless">
                <tbody>
                    @foreach($datas as $data)
                    <tr>
                        <td><img src="{{URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data['item']['Profile'])}}" alt="" class="avatar-lg rounded-circle"></td>
                        <td>
                            <h5 class="text-truncate font-size-18 fw-semibold "><a href="#" class="text-dark">{{$data['item']['FirstName']}} </a></h5>
                            <span class="fw-semibold">$40 USD /</span><span class="fw-semibold text-success text-uppercase">Montly</span>
                        <td><span class="text-danger text-uppercase">Waiting Since: </span>{{$data['item']['created_at'] -> format("j F Y")}}</td>
                        <td><span class="badge bg-success">Verified</span></td>
                        <td>
                            <a href="{{route('RemoveFromCartPayment', $data['item']['id'])}}" class="btn btn-danger waves-effect waves-light delete-confirm">
                                <i class=" bx bx-x-circle  font-size-16 align-middle"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <span><a href="{{route('AllGridOrphans')}}" class="btn btn-success btn-lg waves-effect  waves-light mb-3 m-1 float-end"><i class="bx bx-plus-circle  font-size-16 align-middle"></i></a></span>
        <span class="waves-effect  waves-light mb-3 m-1 mt-3 float-end font-size-18 text-uppercase">Add one more orphan <i class="bx bx-right-arrow-alt "></i></span>
    </div>
</div>
<form method="POST" class="form-horizontal" action="{{ route('StorePayment') }}" enctype="multipart/form-data" id="Payment">
    @csrf
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="display-6 fw-semibold text-success text-uppercase"> Payment Options</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="container">
                        <div class="top-text-wrapper text-center">
                        </div>
                        <div class="grid-wrapper grid-col-auto">
                            <label for="Montly" class="radio-card">
                                <input type="radio" name="radio-card" id="Montly" />
                                <div class="card-content-wrapper">
                                    <span class="check-icon"></span>
                                    <div class="card-content">
                                        <img src="{{ URL::asset('/assets/images/checkout/give.jpg') }}" alt="" />

                                        <input id="MontlyPaymentOption" type="radio" name="PaymentOption" value="Montly" hidden>
                                        <input id="MontlyPaymentAmount" type="radio" name="PaymentAmount" value="{{ $totalPriceMontly =  count($datas) * 40}}" hidden>

                                        <p class="fw-semibold display-6">${{ $totalPriceMontly =  count($datas) * 40}}</p>
                                        <p class="font-size-24 fw-semibold text-success text-uppercase">Pay Montly</p>
                                    </div>
                                </div>
                            </label>
                            <!-- /.radio-card -->

                            <label for="Yearly" class="radio-card">
                                <input type="radio" name="radio-card" id="Yearly" />
                                <div class="card-content-wrapper">
                                    <span class="check-icon"></span>
                                    <div class="card-content">
                                        <img src="{{ URL::asset('/assets/images/checkout/give.jpg') }}" alt="" />
                                        <input id="YearlyPaymentOption" type="radio" name="PaymentOption" value="Yearly" hidden>
                                        <input id="YearlyPaymentAmount" type="radio" name="PaymentAmount" value="{{ $totalPriceYearly = count($datas) * 40 * 12}}" hidden>

                                        <p class="fw-semibold display-6">${{ $totalPriceYearly = count($datas) * 40 * 12}}</p>
                                        <p class="font-size-24 fw-semibold text-success text-uppercase">Pay Yearly</p>
                                    </div>
                                </div>
                            </label>
                            <!-- /.radio-card -->
                        </div>
                        <!-- /.grid-wrapper -->
                    </div>
                </div>
            </div>
            <div class="card " id="PaymentPart">
                <div class="card-header">
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'd-none' : ''  }}">
                                {{ Session::get('error') }}
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 position-relative">
                                        <label for="FullName" class="label mb-3">Full Name </label>
                                        <input type="text" class="form-control form-control-lg @error('FullName') is-invalid @enderror" value="{{ old('FullName') }}" id="FullName" name="FullName" required>
                                        @error('FullName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 position-relative">
                                        <label for="CardNumber" class="label ">Card Number </label>
                                        <div id="input--cc" class="creditcard-icon">
                                            <input type="text" class="form-control CardNumber form-control-lg @error('CardNumber') is-invalid @enderror" value="{{ old('CardNumber') }}" id="CardNumber" name="CardNumber" required>
                                        </div>
                                        @error('CardNumber')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 position-relative">
                                        <label for="Email" class="label">Email </label>
                                        <input type="email" class="form-control form-control-lg @error('Email') is-invalid @enderror" value="{{ old('Email') }}" id="Email" name="Email" required>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3 position-relative">
                                        <label for="ValidMonth" class="label">Valid Month </i></label>
                                        <input type="text" class="form-control form-control-lg @error('ValidMonth') is-invalid @enderror" value="{{ old('ValidMonth') }}" id="ValidMonth" name="ValidMonth" placeholder="MM" maxlength="2" required>

                                        @error('ValidMonth')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3 position-relative">
                                        <label for="ValidYear" class="label">Valid Year </i></label>
                                        <input type="text" class="form-control form-control-lg @error('ValidYear') is-invalid @enderror" value="{{ old('ValidYear') }}" id="ValidYear" name="ValidYear" placeholder="YY" minlength="2" maxlength="2" required>

                                        @error('ValidYear')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>

                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3 position-relative">
                                        <label for="CVV" class="label">CVV / CVC * </i></label>
                                        <input type="text" class="form-control form-control-lg @error('CVV') is-invalid @enderror" value="{{ old('CVV') }}" id="CVV" name="CVV" required>

                                        @error('CVV')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 position-relative">
                                        <label class="info">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</label>

                                    </div>

                                </div>
                                <div class="m-3 text-center">
                                    <button class="btn1 btn-info btn-lg waves-effect waves-light" type="submit">Pay Now</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <p class="text-success font-size-18 fw-semibold text-dark">powered by<i class="fab fa-cc-stripe "></i> </p>

                </div>
            </div>
        </div>
    </div>
</form>
@else
<div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <h2>No Items in Cart!</h2>
    </div>
</div>
@endif
</div>

<!-- <div class="row">
        <div class="col-12 ">
        <div class="card border border-3">
                    <div class="card-header">
                      <blockquote class="blockquote border-warning  font-size-14 mb-0">
                                <p class="my-0   card-title fw-medium font-size-24 text-wrap">ORPHANS</p>

                        </blockquote>
                    </div>
                </div>

        </div>
     </div> -->
<div class="row">
    <!-- <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Filter</h4>

                    <div>
                        <h5 class="font-size-14 mb-3">Clothes</h5>
                        <ul class="list-unstyled product-list">
                            <li><a href="#"><i class="mdi mdi-chevron-right me-1"></i> T-shirts</a></li>
                            <li><a href="#"><i class="mdi mdi-chevron-right me-1"></i> Shirts</a></li>
                            <li><a href="#"><i class="mdi mdi-chevron-right me-1"></i> Jeans</a></li>
                            <li><a href="#"><i class="mdi mdi-chevron-right me-1"></i> Jackets</a></li>
                        </ul>
                    </div>
                    <div class="mt-4 pt-3">
                        <h5 class="font-size-14 mb-3">Price</h5>
                        <input type="text" id="pricerange">
                    </div>

                    <div class="mt-4 pt-3">
                        <h5 class="font-size-14 mb-3">Discount</h5>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="productdiscountCheck1">
                            <label class="form-check-label" for="productdiscountCheck1">
                                Less than 10%
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="productdiscountCheck2">
                            <label class="form-check-label" for="productdiscountCheck2">
                                10% or more
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="productdiscountCheck3" checked>
                            <label class="form-check-label" for="productdiscountCheck3">
                                20% or more
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="productdiscountCheck4">
                            <label class="form-check-label" for="productdiscountCheck4">
                                30% or more
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="productdiscountCheck5">
                            <label class="form-check-label" for="productdiscountCheck5">
                                40% or more
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="productdiscountCheck6">
                            <label class="form-check-label" for="productdiscountCheck6">
                                50% or more
                            </label>
                        </div>

                    </div>

                    <div class="mt-4 pt-3">
                        <h5 class="font-size-14 mb-3">Customer Rating</h5>
                        <div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" id="productratingCheck1">
                                <label class="form-check-label" for="productratingCheck1">
                                    4 <i class="bx bxs-star text-warning"></i> & Above
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" id="productratingCheck2">
                                <label class="form-check-label" for="productratingCheck2">
                                    3 <i class="bx bxs-star text-warning"></i> & Above
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" id="productratingCheck3">
                                <label class="form-check-label" for="productratingCheck3">
                                    2 <i class="bx bxs-star text-warning"></i> & Above
                                </label>
                            </div>

                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" id="productratingCheck4">
                                <label class="form-check-label" for="productratingCheck4">
                                    1 <i class="bx bxs-star text-warning"></i>
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div> -->
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
        <div class="col-md-4 col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="product-img position-relative">
                        <div class="avatar-sm product-ribbon">
                            @if( $data -> LevelPoverty == 1)
                            <span class="avatar-title bg-danger rounded-circle ">20%</span>
                            @endif
                            @if( $data -> LevelPoverty == 2)
                            <span class="avatar-title bg-danger rounded-circle ">40%</span>
                            @endif
                            @if( $data -> LevelPoverty == 3)
                            <span class="avatar-title bg-danger rounded-circle ">60%</span>
                            @endif
                            @if( $data -> LevelPoverty == 4)
                            <span class="avatar-title bg-danger rounded-circle ">80%</span>
                            @endif
                            @if( $data -> LevelPoverty == 5)
                            <span class="avatar-title bg-danger rounded-circle font-size-24">100%</span>
                            @endif
                        </div>
                        <img src="{{URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)}}" alt="" class="img-fluid mx-auto d-block">
                    </div>
                    <div class="mt-4 mt-xl-3">
                        <a href="javascript: void(0);" class="text-primary">Orphan</a>
                        <h5 class="mt-1 mb-3"> {{$data -> FirstName}} {{$data -> LastName}} </h5>

                        <p class="text-muted float-start me-3">
                            @if( $data -> LevelPoverty == 1)
                            <i class="bx bxs-star text-warning font-size-12"></i>
                            <i class="bx bxs-star text-secondary font-size-14"></i>
                            <i class="bx bxs-star text-secondary font-size-16"></i>
                            <i class="bx bxs-star text-secondary font-size-18"></i>
                            <i class="bx bxs-star text-secondary font-size-20"></i>

                            @endif
                            @if( $data -> LevelPoverty == 2)
                            <i class="bx bxs-star text-warning font-size-12"></i>
                            <i class="bx bxs-star text-warning font-size-14"></i>
                            <i class="bx bxs-star text-secondary font-size-16"></i>
                            <i class="bx bxs-star text-secondary font-size-18"></i>
                            <i class="bx bxs-star text-secondary font-size-20"></i>
                            @endif
                            @if( $data -> LevelPoverty == 3)
                            <i class="bx bxs-star text-warning font-size-12"></i>
                            <i class="bx bxs-star text-warning font-size-14"></i>
                            <i class="bx bxs-star text-warning font-size-16"></i>
                            <i class="bx bxs-star text-secondary font-size-18"></i>
                            <i class="bx bxs-star text-secondary font-size-20"></i>
                            @endif
                            @if( $data -> LevelPoverty == 4)
                            <i class="bx bxs-star text-warning font-size-12"></i>
                            <i class="bx bxs-star text-warning font-size-14"></i>
                            <i class="bx bxs-star text-warning font-size-16"></i>
                            <i class="bx bxs-star text-warning font-size-18"></i>
                            <i class="bx bxs-star text-secondary font-size-20"></i>
                            @endif
                            @if( $data -> LevelPoverty == 5)
                            <i class="bx bxs-star text-warning font-size-12"></i>
                            <i class="bx bxs-star text-warning font-size-14"></i>
                            <i class="bx bxs-star text-warning font-size-16"></i>
                            <i class="bx bxs-star text-warning font-size-18"></i>
                            <i class="bx bxs-star text-warning font-size-20"></i>
                            @endif
                        </p>
                        <p class="text-muted mb-4"><b class="text-success text-uppercase">$40 USD </b>/ Month</p>

                        <!-- <h5 class="mb-4">Support :  <b class="text-success text-uppercase">$225 USD</b></h5> -->
                        <!-- <p class="text-muted mb-4">To achieve this, it would be necessary to have uniform grammar pronunciation and more common words If several languages coalesce</p> -->

                    </div>
                    <div class="text-center">
                        <a href="{{route('StatusOrphans', ['data' => $data -> id])}}" class="btn btn-warning waves-effect waves-light mt-2 me-1">
                            <i class="bx bx-happy-beaming me-2"></i> Sponsor Me
                        </a>
                        <a href="{{route('OrphanDetailOrphans', ['data' => $data -> id])}}" class="btn waves-effect  mt-2 waves-light">
                            Read More <i class=" bx bx-right-arrow-circle  me-2"></i>
                        </a>
                    </div>
                </div>
                <div class="px-4 py-3 border-top">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item me-3">
                            <span class="badge bg-success">Verified</span>
                        </li>
                        <li class="list-inline-item me-3">
                            <span class="text-danger text-uppercase">Waiting Since:</span>
                            <i class="bx bx-calendar me-1"></i> {{$data -> created_at}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
                <li class="page-item disabled">
                    <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                </li>
                <li class="page-item active">
                    <a href="#" class="page-link">1</a>
                </li>
                <!-- <li class="page-item ">
                    <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">3</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">4</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">5</a> -->
                </li>
                <li class="page-item">
                    <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end row -->


// $('#datatable').DataTable( {
    //     responsive: true,

    //     lengthMenu: [[100, 200, 300, 400, 500, 1000, -1], [100, 200, 300, 400, 500, 1000, "All"]],

    //     dom: 'lBfrtip',
    //     buttons: [
    //         {
    //             autoFilter: true,
    //             extend: 'excel',
    //             text: 'Download To Excel',
    //             exportOptions: {
    //                 modifier: {
    //                     page: 'current'
    //                 }
    //             }
    //         }
    //     ]
    // } );
@endsection
@section('script')
<!-- Ion Range Slider-->
<script src="{{ URL::asset('/assets/libs/ion-rangeslider/ion-rangeslider.min.js') }}"></script>

<!-- init js -->
<script src="{{ URL::asset('/assets/js/pages/product-filter-range.init.js') }}"></script>
@endsection