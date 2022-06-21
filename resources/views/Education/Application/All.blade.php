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
                      <blockquote class="blockquote border-info  font-size-14 mb-0">
                                <p class="my-0   card-title fw-medium font-size-24 text-wrap">APPLICANTS</p>
                        
                        </blockquote>
                    </div>
                </div>
      
        </div>
     </div>
     <div class="row">
        <div class="col-3">
        <select class="form-select  form-select-lg mb-3 @error('Country') is-invalid @enderror"  onchange="window.location.href=this.value;" 
>
                        



                                 

                                    </select>
        </div>
        <div class="col-9 ">
        <!-- <i class="bx bx-plus-circle  font-size-24 label-icon"></i> btn-label -->
           <a  href="{{route('CreateApplicationEducation')}}" class="btn btn-primary btn-lg waves-effect  waves-light mb-3 float-end">ADD APPLICANTS</a>
       
           <!-- <a  href="{{route('SuccessApplicationEducation')}}" class="btn btn-primary btn-lg waves-effect  waves-light mb-3 float-end">Sucess</a> -->
       
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
                                <th>Full Name</th>
                                <th>Address</th>
                                <th>Phone Numbers</th>
                                <th>Family Status</th>
                                <th>Status</th>
                                <th>Crated By</th>
                                <th>Actions</th>
                                
                            </tr>
                        </thead>


                        <tbody>
                            @foreach($applicants as $applicant)
                                <tr>
                                <td>{{$applicant -> id}}</td>
                                <td>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$applicant -> FirstName}} {{$applicant -> LastName}}</a></h5>
                                        <p class="text-muted mb-0">QCC-{{$applicant -> QCC}}</p>
                                </td>
                                <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$applicant -> ProvinceName}}</a></h5>
                                    <p class="text-muted mb-0">{{$applicant -> DistrictName}}</p> 
                               
                                    </div>
                                </td>
                                <td>    
                                      <div>
                                      <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary">{{$applicant -> PrimaryNumber}}</a></h5>
                                        <p class="text-muted mb-0 badge badge-soft-warning">{{$applicant -> SecondaryNumber}}</p>
                                         <p class="text-muted mb-0 badge badge-soft-danger">{{$applicant -> RelativeNumber}}</p>
                                        </div>
                               </td> 
                               <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$applicant -> FamilyStatus}}</a></h5>
                                       @if( $applicant -> LevelPoverty == 1)
                                         <i class="bx bxs-star text-warning font-size-12"></i>
                                         <i class="bx bxs-star text-secondary font-size-14"></i>
                                         <i class="bx bxs-star text-secondary font-size-16"></i>
                                         <i class="bx bxs-star text-secondary font-size-18"></i>
                                         <i class="bx bxs-star text-secondary font-size-20"></i>

                                       @endif
                                       @if( $applicant -> LevelPoverty == 2)
                                       <i class="bx bxs-star text-warning font-size-12"></i>
                                         <i class="bx bxs-star text-warning font-size-14"></i>
                                         <i class="bx bxs-star text-secondary font-size-16"></i>
                                         <i class="bx bxs-star text-secondary font-size-18"></i>
                                         <i class="bx bxs-star text-secondary font-size-20"></i>
                                       @endif
                                       @if( $applicant -> LevelPoverty == 3)
                                       <i class="bx bxs-star text-warning font-size-12"></i>
                                         <i class="bx bxs-star text-warning font-size-14"></i>
                                         <i class="bx bxs-star text-warning font-size-16"></i>
                                         <i class="bx bxs-star text-secondary font-size-18"></i>
                                         <i class="bx bxs-star text-secondary font-size-20"></i>
                                       @endif
                                       @if( $applicant -> LevelPoverty == 4)
                                       <i class="bx bxs-star text-warning font-size-12"></i>
                                         <i class="bx bxs-star text-warning font-size-14"></i>
                                         <i class="bx bxs-star text-warning font-size-16"></i>
                                         <i class="bx bxs-star text-warning font-size-18"></i>
                                         <i class="bx bxs-star text-secondary font-size-20"></i>
                                       @endif
                                       @if( $applicant -> LevelPoverty == 5)
                                       <i class="bx bxs-star text-warning font-size-12"></i>
                                         <i class="bx bxs-star text-warning font-size-14"></i>
                                         <i class="bx bxs-star text-warning font-size-16"></i>
                                         <i class="bx bxs-star text-warning font-size-18"></i>
                                         <i class="bx bxs-star text-warning font-size-20"></i>
                                       @endif
                                    </div>
                                </td>
                              
                               <td>
                                <div>


                                @if($applicant -> Status == 'Pending')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-secondary">{{$applicant -> Status}}</a></h5>
                                    <p class="text-muted mb-0">{{$applicant -> created_at}}</p> 

                                 @endif

                                @if($applicant -> Status == 'Approved')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">{{$applicant -> Status}} </a></h5>
                                    <p class="text-muted mb-0">{{$applicant -> created_at}}</p> 

                                 @endif

                                 @if($applicant -> Status == 'Rejected')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">{{$applicant -> Status}} </a></h5>
                                    <p class="text-muted mb-0">{{$applicant -> created_at}}</p> 

                                 @endif



                                 @if($applicant -> Status == 'ReInitiated')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-info">{{$applicant -> Status}}</a></h5>
                                    <p class="text-muted mb-0">{{$applicant -> created_at}}</p> 

                                 @endif

                                 @if($applicant -> Status == 'Released')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">{{$applicant -> Status}}</a></h5>
                                    <p class="text-muted mb-0">{{$applicant -> created_at}}</p> 

                                 @endif

                                 @if($applicant -> Status == 'Printed')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-dark">{{$applicant -> Status}}</a></h5>
                                    <p class="text-muted mb-0">{{$applicant -> created_at}}</p> 

                                 @endif

                                    </div>
                                </td>
                                <td>
                                @if( $applicant -> Created_By !="")

                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$applicant -> Created_By }}</a></h5>
                                    <p class="text-muted mb-0">Employee</p> 
                               
                                </div>
                                @endif
                                @if( $applicant -> Created_By =="")

                                   <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Anonymous</a></h5>
                                    <p class="text-muted mb-0">Requested</p> 

                                  </div>
                                @endif
                                </td>
                    <td>
                       <div class="d-flex flex-wrap gap-2">
                
                    @if($applicant -> Status == 'Pending')
       
                    @endif


                    @if( $applicant -> Status == 'Approved')

                    <a href="{{route('Printingapplicant', ['data' => $applicant -> id])}}" class="btn btn-dark waves-effect waves-light print">
                        <i class="bx bxs-printer   font-size-16 align-middle"></i>
                    </a>
                    @endif

                    @if( $applicant -> Status == 'Rejected')
                    <a href="{{route('Editapplicant', ['data' => $applicant -> id])}}" class="btn btn-info waves-effect waves-light">
                        <i class="bx bx-edit  font-size-16 align-middle"></i>
                    </a>
                     <a href="{{route('Deleteapplicant', ['data' => $applicant -> id])}}" class="btn btn-danger waves-effect waves-light delete-confirm">
                        <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                    </a>
                    @endif

                    @if($applicant -> Status == 'Printed')
                    <a href="{{route('Releaseapplicant', ['data' => $applicant -> id])}}" class="btn btn-success waves-effect waves-light release">
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
