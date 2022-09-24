@extends('layouts.master-layouts')

@section('title') Users List @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    
@endsection

@section('content')


    <div class="row mt-4">
        <div class="col-4">
           <a href="{{route('IndexOrphansRelief')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
    
        </div>
        <!-- <div class="col-6">
                                <h1 class="fw-medium font-size-24 ">Orphans List</h1>
        </div> -->
     </div>

     <div class="row">
        <div class="col-12 ">
        <div class="card border border-3">
                    <div class="card-header">
                      <blockquote class="blockquote border-warning  font-size-14 mb-0">
                                <p class="my-0   card-title fw-medium font-size-24 text-wrap">USERS</p>
                        
                        </blockquote>
                    </div>
                </div>
      
        </div>
     </div>
     <div class="row">
      <div class="col-3">
        <select class="form-select  form-select-lg mb-3 @error('Country') is-invalid @enderror"  onchange="window.location.href=this.value;" 
>
                                   <option value="{{route('AllOrphans')}}">Please Filter Your Choices</option>

                                    <option value="{{route('AllOrphans')}}">All</option>
                                    <option value="{{route('PendingOrphans')}}">Pending</option>
                                    <option value="{{route('ApprovedOrphans')}}">Approved</option>
                                    <option value="{{route('ActiveOrphans')}}">Active</option>
                                    <option value="{{route('InActiveOrphans')}}">InActive</option>
                                    <option value="{{route('RejectedOrphans')}}">Rejected</option>



                                 

                                    </select>
        </div>
        <div class="col-9 ">
          <div class="button">
           <!-- <a href="{{route('AllGridOrphans')}}" class="btn  btn-lg waves-effect  waves-light mb-3 m-1 float-end"> <i class="bx bx-grid-alt font-size-24 align-middle"></i></a> -->
           <a href="{{route('CreateUser')}}" class="btn btn-primary btn-lg waves-effect  waves-light mb-3 m-1 float-end">ADD USER</a>
           </div>
       
        </div>
     </div>
    <div class="row">
        <div class="col-12">
            
            <div class="card">
            <h3 class="card-header bg-warning text-white"></h3>
                <div class="card-body">
                <!-- <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <select class="form-select  form-select-lg  @error('Country') is-invalid @enderror"  onchange="window.location.href=this.value;" 
>
                                   <option value="{{route('AllQamarCareCard')}}">Please Filter Your Choices</option>

                                    <option value="{{route('AllQamarCareCard')}}">All</option>
                                    <option value="{{route('PendingQamarCareCard')}}">Pending</option>
                                    <option value="{{route('ApprovedQamarCareCard')}}">Approved</option>
                                    <option value="{{route('PrintedQamarCareCard')}}">Printed</option>
                                    <option value="{{route('ReleasedQamarCareCard')}}">Released</option>
                                    <option value="{{route('RejectedQamarCareCard')}}">Rejected</option>



                                 

                                    </select>
                                </div>
                            </div>
                    </div> -->
              
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100 m-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Address</th>
                                <th>Phone Numbers</th>
                                <th>JOB</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Actions</th>
                                
                            </tr>
                        </thead>


                        <tbody>
                            @foreach($datas as $data)
                                <tr>
                                <td>{{$data -> id}}</td>
                                <td>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> FirstName}} {{$data -> LastName}}</a></h5>
                                        <p class="text-muted mb-0">{{$data -> IntroducerName}}</p>
                                </td>
                                <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> ProvinceName}}</a></h5>
                                    <p class="text-muted mb-0">{{$data -> DistrictName}}</p> 
                               
                                    </div>
                                </td>
                                <td>    
                                      <div>
                                      <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary">{{$data -> PrimaryNumber}}</a></h5>
                                        <p class="text-muted mb-0 badge badge-soft-warning">{{$data -> SecondaryNumber}}</p>
                                        </div>
                               </td> 
                               <td>
                                  {{$data -> Job}}
                                </td>
                              
                               <td>
                                <div>


                                @if($data -> IsActive == 1)
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">Active</a></h5>

                                 @endif
                                 @if($data -> IsActive == 0)
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">Not Active</a></h5>

                                 @endif

                                    </div>
                                </td>
                                <td>
                                @if( $data -> Created_By !="")

                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data ->  UFirstName }} {{$data ->  ULastName }}</a></h5>
                                    <p class="text-muted mb-0">{{$data ->  UJob }}</p> 
                               
                                </div>
                                @endif
                                @if( $data -> Created_By =="")

                                   <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Anonymous</a></h5>
                                    <p class="text-muted mb-0">Requested</p> 

                                  </div>
                                @endif
                                </td>
                    <td>
                       <div class="d-flex flex-wrap gap-2">
                    <a href="{{route('StatusOrphans', ['data' => $data -> id])}}" class="btn btn-warning waves-effect waves-light">
                        <i class="bx bx-show-alt font-size-16 align-middle"></i>
                    </a>
                       <a href="{{route('EditUser', ['data' => $data -> id])}}" class="btn btn-info waves-effect waves-light">
                        <i class="bx bx-edit  font-size-16 align-middle"></i>
                    </a>
                    @if($data -> Status == 'Pending')
                    <!-- <a href="{{route('EditQamarCareCard', ['data' => $data -> id])}}" class="btn btn-info waves-effect waves-light">
                        <i class="bx bx-edit  font-size-16 align-middle"></i>
                    </a> -->
                     <a href="{{route('DeleteOrphan', ['data' => $data -> id])}}" class="btn btn-danger waves-effect waves-light delete-confirm">
                        <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                    </a>
                    @endif


                    @if( $data -> Status == 'Approved')
                    <a href="{{route('AssignToServiceQamarCareCard', ['data' => $data -> id])}}" class="btn btn-success waves-effect waves-light">
                        <i class="bx bx-user-plus   font-size-16 align-middle"></i>
                    </a> 
                    @endif

                    @if( $data -> Status == 'Rejected')
                    <!-- <a href="{{route('EditQamarCareCard', ['data' => $data -> id])}}" class="btn btn-info waves-effect waves-light">
                        <i class="bx bx-edit  font-size-16 align-middle"></i>
                    </a> -->
                     <a href="{{route('DeleteOrphan', ['data' => $data -> id])}}" class="btn btn-danger waves-effect waves-light delete-confirm">
                        <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                    </a>
                    @endif

                    <!-- @if($data -> Status == 'Printed')
                    <a href="{{route('Releasedata', ['data' => $data -> id])}}" class="btn btn-success waves-effect waves-light release">
                        <i class="bx bx-user-check  font-size-16 align-middle"></i>
                    </a>
                    @endif -->
                   



                </div></td>
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
    $('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be permanantly deleted!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});

$('.release').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This card is released!',
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
