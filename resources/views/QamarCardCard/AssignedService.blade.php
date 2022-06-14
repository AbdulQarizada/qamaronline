@extends('layouts.master-layouts')

@section('title') Assign To Services Cards @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Qamar Online @endslot
        @slot('title') Assign To Services Card @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
           <a href="{{route('IndexQamarCareCard')}}" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        </div>
     </div>
     <div class="row">
        <div class="col-12">
        <div class="card border border-3">
                    <div class="card-header">
                      <blockquote class="blockquote border-info  font-size-14 mb-0">
                                <p class="my-0   card-title fw-medium font-size-24 text-wrap">CARE CARD SERVICES</p>
                        
                        </blockquote>
                    </div>
                </div>
      
        </div>
     </div>
     <div class="row">
        <div class="col-3">
        <select class="form-select  form-select-lg mb-3 @error('Country') is-invalid @enderror"  onchange="window.location.href=this.value;" 
>
                                   <option value="{{route('AssigningServiceQamarCareCard')}}">Please Filter Your Choices</option>
                                   <option value="{{route('AssigningServiceQamarCareCard')}}">Eligible Beneficiaries</option>
                                    <option value="{{route('AssignedServicesQamarCareCard')}}">Assigned Services</option>
                                    <!-- <option value="{{route('RecievedServicesQamarCareCard')}}">Recieved Services</option> -->
                                    <!-- <option value="{{route('PrintedQamarCareCard')}}">Printed</option>
                                    <option value="{{route('ReleasedQamarCareCard')}}">Released</option> -->
                                    <!-- <option value="{{route('RejectedServicesQamarCareCard')}}">Rejected</option> -->



                                 

                                    </select>
        </div>
        <div class="col-9 ">
           <!-- <a href="{{route('CreateQamarCareCard')}}" class="btn btn-primary btn-lg waves-effect waves-light m-3 float-end">ADD SERVICE PROVIDER</a> -->
        </div>
     </div>
    <div class="row">
        <div class="col-12">
            
            <div class="card">
            <h3 class="card-header bg-info text-white"></h3>
                <div class="card-body">

                    
              
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100 m-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Beneficiary</th>
                                <th>Beneficiary Address</th>
                                <th>Beneficiary Phone </th>
                                <th>Service Provider</th>
                                <th>Service Address</th>
                                <th>Service Provider Phone</th>
                                <th>Discount</th>
                                <th>Assigned By</th>
                                <th>Actions</th>
                                
                            </tr>
                        </thead>


                        <tbody>
                            @foreach($qamarcarecards as $qamarcarecard)
                                <tr>
                                <td>{{$qamarcarecard -> id}}</td>
                                <td>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$qamarcarecard -> BFirstName}} {{$qamarcarecard -> BLastName}}</a></h5>
                                        <p class="text-muted mb-0">QCC-{{$qamarcarecard -> BQCC}}</p>
                                </td>
                                <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$qamarcarecard -> ProvinceName}}</a></h5>
                                  <p class="text-muted mb-0">{{$qamarcarecard -> DistrictName }}</p>
                               
                                    </div>
                                </td>
                                <td>    
                                      <div>
                                      <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary">{{$qamarcarecard -> BPrimaryNumber}}</a></h5>
                                        <p class="text-muted mb-0 badge badge-soft-warning">{{$qamarcarecard -> BSecondaryNumber}}</p>
                                         <p class="text-muted mb-0 badge badge-soft-danger">{{$qamarcarecard -> BRelativeNumber}}</p>
                                        </div>
                               </td> 
                               <td>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$qamarcarecard -> SPFirstName}} {{$qamarcarecard -> SPLastName}}</a></h5>
                                        <p class="text-muted mb-0">QCC-{{$qamarcarecard -> SPQCC}}</p>
                                </td>
                                <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$qamarcarecard -> ProvinceName}}</a></h5>
                                    <p class="text-muted mb-0">{{$qamarcarecard -> DistrictName }}</p> 
                               
                                    </div>
                                </td>
                                <td>    
                                      <div>
                                      <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary">{{$qamarcarecard -> SPPrimaryNumber}}</a></h5>
                                        <p class="text-muted mb-0 badge badge-soft-warning">{{$qamarcarecard -> SPSecondaryNumber}}</p>
                                         <!-- <p class="text-muted mb-0 badge badge-soft-danger">{{$qamarcarecard -> RelativeNumber}}</p> -->
                                        </div>
                               </td>
                               <td>
                                
                                <div class="avatar-sm ">
                                            
                                            @if( $qamarcarecard -> IsFree == 1)
                                            <span class="avatar-title bg-danger rounded-circle">Free</span>
                                            @endif
                                            @if( $qamarcarecard -> IsFree == null)
                                            <span class="avatar-title bg-danger rounded-circle">{{$qamarcarecard -> Discount}}%</span>
                                            @endif
                                 </div>
                               
                                </td>
                              <td>
                              <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$qamarcarecard -> Created_By }}</a></h5>
                                    <p class="text-muted mb-0">{{$qamarcarecard -> created_at}}</p> 

                               
                                </div>
                              </td>
                                   
                               <!-- <td>
                        

                                <div>


                                @if($qamarcarecard -> Status == 'Pending')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-secondary">{{$qamarcarecard -> Status}}</a></h5>
                                    <p class="text-muted mb-0">{{$qamarcarecard -> created_at}}</p> 

                                 @endif

                                @if($qamarcarecard -> Status == 'Approved')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">{{$qamarcarecard -> Status}} </a></h5>
                                    <p class="text-muted mb-0">{{$qamarcarecard -> created_at}}</p> 

                                 @endif

                                 @if($qamarcarecard -> Status == 'Rejected')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">{{$qamarcarecard -> Status}} </a></h5>
                                    <p class="text-muted mb-0">{{$qamarcarecard -> created_at}}</p> 

                                 @endif

                                 @if($qamarcarecard -> Status == 'Released')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">Eligible</a></h5>
                                    <p class="text-muted mb-0">{{$qamarcarecard -> created_at}}</p> 

                                 @endif

                                    </div>
                                </td> -->
                                <!-- <td>
                                @if( $qamarcarecard -> Status == "Pending")
                                @if( $qamarcarecard -> Created_By !="")

                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$qamarcarecard -> Created_By }}</a></h5>
                                    <p class="text-muted mb-0">Employee</p> 
                               
                                </div>
                                @endif
                                @if( $qamarcarecard -> Created_By =="")

                                   <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Anonymous</a></h5>
                                    <p class="text-muted mb-0">Requested</p> 

                                  </div>
                                @endif
                                @endif
                                </td> -->
                                
                <td>
                       <div class="d-flex flex-wrap gap-2">
                       <!-- <a href="{{route('StatusQamarCareCard', ['data' => $qamarcarecard -> id])}}" class="btn btn-warning waves-effect waves-light">
                        <i class="bx bx-show-alt font-size-16 align-middle"></i>
                    </a> -->
                    @if( $qamarcarecard -> Status == "Released")
                    <a href="{{route('AssignToServiceQamarCareCard', ['data' => $qamarcarecard -> id])}}" class="btn btn-success waves-effect waves-light">
                        <i class="bx bx-user-plus   font-size-16 align-middle"></i>
                    </a> 
                    @endif

                    @if( $qamarcarecard -> Status == "Pending")
                    <!-- <a href="{{route('ServiceReleasedQamarCareCard', ['data' => $qamarcarecard -> id])}}" class="btn btn-success waves-effect waves-light recieved">
                        <i class="bx bx-check-shield    font-size-16 align-middle"></i>
                    </a>  -->
                    
                    <a href="{{route('ServiceEditQamarCareCard', ['data' => $qamarcarecard -> id])}}" class="btn btn-info waves-effect waves-light">
                        <i class="bx bx-edit  font-size-16 align-middle"></i>
                    </a>
                     <a href="{{route('ServiceDeleteQamarCareCard', ['data' => $qamarcarecard -> id])}}" class="btn btn-danger waves-effect waves-light delete">
                        <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                    </a>
                    @endif

                    <!-- @if( $qamarcarecard -> Status == "Recieved")
                    <a href="{{route('AssignToServiceQamarCareCard', ['data' => $qamarcarecard -> id])}}" class="btn btn-success waves-effect waves-light">
                        <i class="bx bx-user-plus   font-size-16 align-middle"></i>
                    </a> 
                    @endif -->


                </div>
            </td>
                            </tr>
                            @endforeach
                
                       
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/sweetalert.min.js') }}"></script>

<script>
    $('.delete').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be deleted!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});

$('.recieved').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Does this perosn recieve service?',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});


</script>

@endsection
