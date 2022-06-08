@extends('layouts.master-layouts')

@section('title') Approved Cards @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Qamar Online @endslot
        @slot('title') Approved Card @endslot
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
                      <blockquote class="blockquote border-secondary  font-size-14 mb-0">
                                <p class="my-0   card-title fw-medium font-size-24 text-wrap">SERVICE PROVIDERS</p>
                        
                        </blockquote>
                    </div>
                </div>
      
        </div>
     </div>
     <div class="row">
        <div class="col-4">
        <!-- <select class="form-select  form-select-lg mb-3 @error('Country') is-invalid @enderror"  onchange="window.location.href=this.value;" 
>
                                   <option value="{{route('AllQamarCareCard')}}">Please Filter Your Choices</option>

                                    <option value="{{route('AllQamarCareCard')}}">All</option>
                                    <option value="{{route('PendingQamarCareCard')}}">Pending</option>
                                    <option value="{{route('ApprovedQamarCareCard')}}">Approved</option>
                                    <option value="{{route('PrintedQamarCareCard')}}">Printed</option>
                                    <option value="{{route('ReleasedQamarCareCard')}}">Released</option>
                                    <option value="{{route('RejectedQamarCareCard')}}">Rejected</option>



                                 

                                    </select> -->
        </div>
        <div class="col-8 ">
        <!-- <i class="bx bx-plus-circle  font-size-24 label-icon"></i> btn-label -->
           <a href="{{route('ServiceProviderIndexQamarCareCard')}}" class="btn btn-primary btn-lg waves-effect  waves-light mb-3 float-end">ADD SERVICE PROVIDER</a>
        </div>
     </div>
    <div class="row">
        <div class="col-12">
            
            <div class="card">
            <h3 class="card-header bg-secondary text-white"></h3>
                <div class="card-body">

                    
              
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap w-100 m-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Address</th>
                                <th>Phone Numbers</th>
                                <!-- <th>Family Status</th> -->
                                <th>Crated By</th>
                                <!-- <th>Actions</th> -->
                                
                            </tr>
                        </thead>


                        <tbody>
                            @foreach($serviceproviders as $serviceprovider)
                                <tr>
                                <td>{{$serviceprovider -> id}}</td>
                                <td>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$serviceprovider -> FirstName}} {{$serviceprovider -> LastName}}</a></h5>
                                        <p class="text-muted mb-0">QCC-{{$serviceprovider -> QCC}}</p>
                                </td>
                                <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$serviceprovider -> Province}}</a></h5>
                                    <p class="text-muted mb-0">{{$serviceprovider -> District}}</p> 
                               
                                    </div>
                                </td>
                                <td>    
                                      <div>
                                      <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary">{{$serviceprovider -> PrimaryNumber}}</a></h5>
                                        <p class="text-muted mb-0 badge badge-soft-warning">{{$serviceprovider -> serviceprovider}}</p>
                                         <!-- <p class="text-muted mb-0 badge badge-soft-danger">{{$serviceprovider -> serviceprovider}}</p> -->
                                        </div>
                               </td> 
                        
                                <td>
                                @if( $serviceprovider -> Created_By !="")

                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$serviceprovider -> Created_By }}</a></h5>
                                    <p class="text-muted mb-0">Employee</p> 
                               
                                </div>
                                @endif
                                @if( $serviceprovider -> Created_By =="")

                                   <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Anonymous</a></h5>
                                    <p class="text-muted mb-0">Requested</p> 

                                  </div>
                                @endif
                                </td>
                                <!-- <td>
                       <div class="d-flex flex-wrap gap-2">
                    <a href="{{route('StatusQamarCareCard', ['data' => $serviceprovider -> id])}}" class="btn btn-warning waves-effect waves-light">
                        <i class="bx bx-show-alt font-size-16 align-middle"></i>
                    </a>
               
                    <a href="{{route('ApproveQamarCareCard', ['data' => $serviceprovider -> id])}}" class="btn btn-success waves-effect waves-light approve">
                        <i class="bx bx-check-circle font-size-16 align-middle"></i>
                    </a>
                     <a href="{{route('RejectQamarCareCard', ['data' => $serviceprovider -> id])}}" class="btn btn-danger waves-effect waves-light reject">
                        <i class=" bx bx-x-circle font-size-16 align-middle"></i>
                    </a>
                </div>
            </td> -->
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
    $('.approve').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be approved!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});

$('.reject').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be rejected!',
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
