@extends('layouts.master-layouts')

@section('title') Orphans Details @endsection

@section('content')
<div class="row mt-4">
    <div class="col-4">
        <a href="{{route('AllGridOrphans')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>

    </div>
    <!-- <div class="col-6">
                                <h1 class="fw-medium font-size-24 ">Orphans List</h1>
        </div> -->
</div>
<!-- <div class="row">
        <div class="col-12 ">
        <div class="card border border-3">
                    <div class="card-header">
                      <blockquote class="blockquote border-warning  font-size-14 mb-0">
                                <p class="my-0   card-title fw-medium font-size-24 text-wrap">ORPHANS DETAILS</p>
                        
                        </blockquote>
                    </div>
                </div>
      
        </div>
     </div> -->
<div class="row">
    @foreach($datas as $data)
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="product-detai-imgs">
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-4">
                                    <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="product-1-tab" data-bs-toggle="pill" href="#product-1" role="tab" aria-controls="product-1" aria-selected="true">
                                            <img src="{{URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)}}" alt="" class="img-fluid mx-auto d-block rounded">
                                        </a>
                                        <a class="nav-link" id="product-2-tab" data-bs-toggle="pill" href="#product-2" role="tab" aria-controls="product-2" aria-selected="false">
                                            <img src="{{URL::asset('/uploads/OrphansRelief/Orphans/FamilyPic/'.$data -> FamilyPic)}}" alt="" class="img-fluid mx-auto d-block rounded">
                                        </a>
                                        <a class="nav-link" id="product-3-tab" data-bs-toggle="pill" href="#product-3" role="tab" aria-controls="product-3" aria-selected="false">
                                            <img src="{{URL::asset('/uploads/OrphansRelief/Orphans/HousePic/'.$data -> HousePic)}}" alt="" class="img-fluid mx-auto d-block rounded">
                                        </a>
                                        <a class="nav-link" id="product-4-tab" data-bs-toggle="pill" href="#product-4" role="tab" aria-controls="product-4" aria-selected="false">
                                            <img src="{{URL::asset('/uploads/OrphansRelief/Orphans/Tazkiras/'.$data -> Tazkira)}}" alt="" class="img-fluid mx-auto d-block rounded">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7 offset-md-1 col-sm-9 col-8">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="product-1" role="tabpanel" aria-labelledby="product-1-tab">
                                            <div>
                                                <img src="{{URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)}}" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="product-2" role="tabpanel" aria-labelledby="product-2-tab">
                                            <div>
                                                <img src="{{URL::asset('/uploads/OrphansRelief/Orphans/FamilyPic/'.$data -> FamilyPic)}}" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="product-3" role="tabpanel" aria-labelledby="product-3-tab">
                                            <div>
                                                <img src="{{URL::asset('/uploads/OrphansRelief/Orphans/HousePic/'.$data -> HousePic)}}" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="product-4" role="tabpanel" aria-labelledby="product-4-tab">
                                            <div>
                                                <img src="{{URL::asset('/uploads/OrphansRelief/Orphans/Tazkiras/'.$data -> Tazkira)}}" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center mt-2">
                                        <a href="{{route('AddToCartOrphans', ['data' => $data -> id])}}" class="btn btn-warning waves-effect waves-light mt-2 me-1">
                                            <i class="bx bx-happy-beaming me-2"></i> Sponsor Me
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="mt-4 mt-xl-3">
                            <a href="javascript: void(0);" class="text-primary">Orphan</a>
                            <h4 class="mt-1 mb-3">{{$data -> FirstName}} {{$data -> LastName}}</h4>

                            <!-- <p class="text-muted float-start me-3">
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
                            </p> -->
                            <!-- <p class="text-muted mb-4"><b class="text-success text-uppercase">$40 USD </b>/ Month</p> -->
                            <div class="mt-4">
                                <h5 class=" text-uppercase text-primary">why Should You Help Me?</h5>

                                <div class="d-flex py-3 border-bottom">
                                    <div class="flex-shrink-0 me-3">
                                        <img src="{{URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)}}" class="avatar-xs rounded-circle" alt="img" />
                                    </div>

                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 font-size-15">{{$data -> FirstName}} {{$data -> LastName}}</h5>
                                        <p class="text-muted text-break">{{$data -> WhyShouldYouHelpMe}}</p>

                                    </div>

                                </div>
                                <!-- <div class="text-center mt-2">
                                    <a href="{{route('StatusOrphans', ['data' => $data -> id])}}" class="btn btn-warning waves-effect waves-light mt-2 me-1">
                            <i class="bx bx-happy-beaming me-2"></i> Sponsor Me
</a>
                        
                                    </div> -->
                            </div>
                            <!-- <div class="row mb-3">
                                <div class="col-md-6">
                                    <div>
                                        <p class="text-muted"><i class="bx bx-unlink font-size-16 align-middle text-primary me-1"></i> Wireless</p>
                                        <p class="text-muted"><i class="bx bx-shape-triangle font-size-16 align-middle text-primary me-1"></i> Wireless Range : 10m</p>
                                        <p class="text-muted"><i class="bx bx-battery font-size-16 align-middle text-primary me-1"></i> Battery life : 6hrs</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <p class="text-muted"><i class="bx bx-user-voice font-size-16 align-middle text-primary me-1"></i> Bass</p>
                                        <p class="text-muted"><i class="bx bx-cog font-size-16 align-middle text-primary me-1"></i> Warranty : 1 Year</p>
                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="product-color">
                                <h5 class="font-size-15">Color :</h5>
                                <a href="javascript: void(0);" class="active">
                                    <div class="product-color-item border rounded">
                                        <img src="assets/images/product/img-7.png" alt="" class="avatar-md">
                                    </div>
                                    <p>Black</p>
                                </a>
                                <a href="javascript: void(0);">
                                    <div class="product-color-item border rounded">
                                        <img src="assets/images/product/img-7.png" alt="" class="avatar-md">
                                    </div>
                                    <p>Blue</p>
                                </a>
                                <a href="javascript: void(0);">
                                    <div class="product-color-item border rounded">
                                        <img src="assets/images/product/img-7.png" alt="" class="avatar-md">
                                    </div>
                                    <p>Gray</p>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <!-- <div class="mt-5">
                    <h5 class="mb-3 text-uppercase">About Me </h5>

                    <div class="table-responsive">
                        <table class="table mb-0 table-bordered">
                            <tbody>
                                <tr>
                                  
                                    <th scope="row" style="width: 400px;">Gender</th>
                                    <td>{{$data -> Gender }}</td>
                                    <th scope="row" style="width: 400px;">Date Of Birth</th>
                                    <td>{{$data ->  DOB }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Province</th>
                                    <td>{{$data -> Province}}</td>
                                    <th scope="row" style="width: 400px;">District</th>
                                    <td>{{$data -> District}}</td>
                                </tr>
                                <tr>
                                <th scope="row" style="width: 400px;">Father Name</th>
                                    <td>{{$data -> FatherName }}</td>
                                    <th scope="row">In Care Of</th>
                                    <td>{{$data -> InCareName }}</td>
                                  
                                </tr>
                                <tr>
                                    <th scope="row">Monthly Family Income</th>
                                    <td>{{$data ->  MonthlyFamilyIncome }}</td>
                                    <th scope="row" style="width: 400px;">Monthly Family Expensive</th>
                                    <td>{{$data -> MonthlyFamilyExpenses}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Family Status</th>
                                    <td>{{$data -> FamilyStatus}}</td>
                                    <th scope="row" style="width: 400px;">In School</th>
                                    <td>{{$data -> CurrentlyInSchool }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> -->
                <!-- end Specifications -->



            </div>
        </div>
        <!-- end card -->
    </div>
    @endforeach
</div>
<!-- end row -->


@endsection