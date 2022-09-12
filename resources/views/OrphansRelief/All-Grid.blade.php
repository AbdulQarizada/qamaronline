@extends('layouts.master-layouts')

@section('title') @lang('translation.Products') @endsection

@section('css')
    <!-- ION Slider -->
    <link href="{{ URL::asset('/assets/libs/ion-rangeslider/ion-rangeslider.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')


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
        <div class="col-md-12">

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
                        <ul class="nav nav-pills product-view-nav justify-content-end mt-3 mt-sm-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('AllGridOrphans')}}"><i class="bx bx-grid-alt"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('AllOrphans')}}"><i class="bx bx-list-ul"></i></a>
                            </li>
                        </ul>


                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="product-img position-relative">
                                <div class="avatar-sm product-ribbon">
                                    <span class="avatar-title rounded-circle  bg-danger">
                                        100%
                                    </span>
                                </div>
                                <img src="{{ URL::asset('/assets/images/product/img-1.png') }}" alt="" class="img-fluid mx-auto d-block">
                            </div>
                            <div class="mt-4 mt-xl-3">
                            <a href="javascript: void(0);" class="text-primary">Orphan</a>
                            <h4 class="mt-1 mb-3">Abdul Hakeem Test</h4>

                            <p class="text-muted float-start me-3">
                                <span class="bx bxs-star text-warning"></span>
                                <span class="bx bxs-star text-warning"></span>
                                <span class="bx bxs-star text-warning"></span>
                                <span class="bx bxs-star text-warning"></span>
                                <span class="bx bxs-star"></span>
                            </p>
                            <p class="text-muted mb-4"><b class="text-success text-uppercase">$225 USD</b></p>

                            <!-- <h5 class="mb-4">Support :  <b class="text-success text-uppercase">$225 USD</b></h5> -->
                            <!-- <p class="text-muted mb-4">To achieve this, it would be necessary to have uniform grammar pronunciation and more common words If several languages coalesce</p> -->
                  
                        </div>
                            <div class="text-center">
                                        <button type="button" class="btn btn-danger waves-effect waves-light mt-2 me-1">
                                            <i class="bx bx-happy-beaming me-2"></i> Sponsor Me
                                        </button>
                                        <button type="button" class="btn waves-effect  mt-2 waves-light">
                                            Read More <i class=" bx bx-right-arrow-circle  me-2"></i>
                                        </button>
                                    </div>
                        </div>
                        <div class="px-4 py-3 border-top">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item me-3">
                        <span class="badge bg-success">Verified</span>
                    </li>
                    <li class="list-inline-item me-3">
                        <i class="bx bx-calendar me-1"></i> 15 Oct, 19
                    </li>
                    <!-- <li class="list-inline-item me-3">
                        <i class="bx bx-comment-dots me-1"></i> 214
                    </li> -->
                </ul>
            </div>
                    </div>
                </div>
  
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
                        <li class="page-item disabled">
                            <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">1</a>
                        </li>
                        <li class="page-item active">
                            <a href="#" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">3</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">4</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">5</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
@section('script')
    <!-- Ion Range Slider-->
    <script src="{{ URL::asset('/assets/libs/ion-rangeslider/ion-rangeslider.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/product-filter-range.init.js') }}"></script>
@endsection
