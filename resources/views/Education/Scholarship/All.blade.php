@extends('layouts.master-layouts')

@section('title') Qamar Care List @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    
@endsection

@section('content')


    <div class="row mt-4">
        <div class="col-4">
           <a href="{{route('IndexEducation')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
    
        </div>
     </div>

     <div class="row">
        <div class="col-12 ">
        <div class="card border border-3">
                    <div class="card-header">
                      <blockquote class="blockquote border-warning  font-size-14 mb-0">
                                <p class="my-0   card-title fw-medium font-size-24 text-wrap">All Scholarships</p>
                        
                        </blockquote>
                    </div>
                </div>
      
        </div>
     </div>
     <div class="row">
        <div class="col-3">
        <select class="form-select  form-select-lg mb-3 @error('Country') is-invalid @enderror"  onchange="window.location.href=this.value;" 
>
                                   <option value="{{route('AllQamarCareCard')}}">Please Filter Your Choices</option>

                                    <option value="{{route('AllQamarCareCard')}}">All</option>
                                    <option value="{{route('PendingQamarCareCard')}}">Active</option>
                                    <option value="{{route('ApprovedQamarCareCard')}}">Closed</option>
                                    <!-- <option value="{{route('PrintedQamarCareCard')}}">Printed</option>
                                    <option value="{{route('ReleasedQamarCareCard')}}">Released</option>
                                    <option value="{{route('RejectedQamarCareCard')}}">Rejected</option> -->



                                 

                                    </select>
        </div>
        <div class="col-9 ">
        <!-- <i class="bx bx-plus-circle  font-size-24 label-icon"></i> btn-label -->
           <a href="{{route('CreateScholarship')}}" class="btn btn-primary btn-lg waves-effect  waves-light mb-3 float-end">ADD Scholarship</a>
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
                                <th>Name</th>
                                <th>Location</th>
                                <!-- <th>Phone Numbers</th> -->
                                <th>Dates</th>
                                <th>Status</th>
                                <th>Crated By</th>
                                <th>Actions</th>
                                
                            </tr>
                        </thead>


                        <tbody>
                            @foreach($scholarships as $scholarship)
                                <tr>
                                <td>{{$scholarship -> id}}</td>
                                <td>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$scholarship -> Name}} </a></h5>
                                        <p class="text-muted mb-0">{{$scholarship -> ScholarshipType}}</p>
                                </td>
                                <td>
                                   <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$scholarship -> Country}} </a></h5>
                                        <p class="text-muted mb-0">{{$scholarship -> ScholarshipType}}</p>
                                </td>
                                <!-- <td>    
                                      <div>
                                      <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary">{{$scholarship -> PrimaryNumber}}</a></h5>
                                        <p class="text-muted mb-0 badge badge-soft-warning">{{$scholarship -> SecondaryNumber}}</p>
                                         <p class="text-muted mb-0 badge badge-soft-danger">{{$scholarship -> RelativeNumber}}</p>
                                        </div>
                               </td>  -->
                               <td>
                               <div>
                                      <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary">{{$scholarship -> StartDate}}</a></h5>
                                        <!-- <p class="text-muted mb-0 badge badge-soft-warning">{{$scholarship -> StartDate}}</p> -->
                                         <p class="text-muted mb-0 badge badge-soft-danger">{{$scholarship -> EndDate}}</p>
                                        </div>
                                </td>
                              
                               <td>
                                <div>


                                @if($scholarship -> Status == 'Pending')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-secondary">{{$scholarship -> Status}}</a></h5>
                                    <p class="text-muted mb-0">{{$scholarship -> created_at}}</p> 

                                 @endif

                                @if($scholarship -> Status == 'Approved')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">{{$scholarship -> Status}} </a></h5>
                                    <p class="text-muted mb-0">{{$scholarship -> created_at}}</p> 

                                 @endif


                                    </div>
                                </td>
                                <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$scholarship -> Created_By }}</a></h5>
                                    <p class="text-muted mb-0">Employee</p> 
                               
                                </div>
                                </td>
                    <td>
                       <div class="d-flex flex-wrap gap-2">
                    <a href="{{route('StatusQamarCareCard', ['data' => $scholarship -> id])}}" class="btn btn-warning waves-effect waves-light">
                        <i class="bx bx-show-alt font-size-16 align-middle"></i>
                    </a>
                    @if($scholarship -> Status == 'Pending')
                    <a href="{{route('EditQamarCareCard', ['data' => $scholarship -> id])}}" class="btn btn-info waves-effect waves-light">
                        <i class="bx bx-edit  font-size-16 align-middle"></i>
                    </a>
                     <a href="{{route('DeleteQamarCareCard', ['data' => $scholarship -> id])}}" class="btn btn-danger waves-effect waves-light delete-confirm">
                        <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                    </a>
                    @endif


                    @if( $scholarship -> Status == 'Approved')

                    <a href="{{route('PrintingQamarCareCard', ['data' => $scholarship -> id])}}" class="btn btn-dark waves-effect waves-light print">
                        <i class="bx bxs-printer   font-size-16 align-middle"></i>
                    </a>
                    @endif

                    @if( $scholarship -> Status == 'Rejected')
                    <a href="{{route('EditQamarCareCard', ['data' => $scholarship -> id])}}" class="btn btn-info waves-effect waves-light">
                        <i class="bx bx-edit  font-size-16 align-middle"></i>
                    </a>
                     <a href="{{route('DeleteQamarCareCard', ['data' => $scholarship -> id])}}" class="btn btn-danger waves-effect waves-light delete-confirm">
                        <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                    </a>
                    @endif

                    @if($scholarship -> Status == 'Printed')
                    <a href="{{route('ReleaseQamarCareCard', ['data' => $scholarship -> id])}}" class="btn btn-success waves-effect waves-light release">
                        <i class="bx bx-user-check  font-size-16 align-middle"></i>
                    </a>
                    @endif
                   



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
