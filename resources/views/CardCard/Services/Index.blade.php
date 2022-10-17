@extends('layouts.master-layouts')

@section('title') Qamar Care List @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/css/mystyle/tabstyle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="row mt-4">
        <div class="col-4">
           <a href="{{route('IndexQamarCareCard')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
            <!-- <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i> CARE CARDS</span> -->
        </div>
     </div>


    <div class="row">
    <div class="mt-4 mb-4">
                      <blockquote class="blockquote border-dark  font-size-14 mb-0">
                                <p class="my-0   fw-medium text-dark text-muted card-title font-size-24 text-wrap">ASSIGNING SERVICES</p>
                        
                        </blockquote>
    </div>
    <div class="col-xl-12">
        <div class="row">

            <div class="col-md-4 mb-2">
               <a href="{{route('FoodPackQamarCareCard')}}">
                <div class="card-one mini-stats-wid border border-secondary">
                    <div class="card-body">
                      <blockquote class="blockquote font-size-14 mb-0">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="my-0 text-primary card-title fw-medium">FOOD PACKS</p>
                                <h6 class="text-muted mb-0">Assign Beneficiaries to food packs</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="mini-stat-icon avatar-sm rounded-circle ">
                                    <span class="avatar-title bg-dark">
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

            <div class="col-md-4 mb-2">
        <a href="{{route('AssigningServiceQamarCareCard')}}">
            <div class="card-one mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-primary card-title fw-medium">HEALTH PACKS</p>
                            <h6 class="text-muted mb-0">Assign Beneficiaries to health packs</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle ">
                                <span class="avatar-title bg-dark">
                                    <!-- <i class="bx bxs-user-rectangle    font-size-24"></i> -->
                                    <h1 class="mb-0 text-danger">1</h1>

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
<!-- end row -->




</div>
</div>
<!-- end row -->

@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
@endsection
