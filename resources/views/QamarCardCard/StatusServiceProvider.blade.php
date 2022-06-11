@extends('layouts.master-layouts')

@section('title') Qamar Care List @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Qamar Care Card @endslot
        @slot('title') Qamar Care Card List @endslot
    @endcomponent

    @foreach($datas as $data)
    <div class="row">
        <div class="col-12">
           <a href="{{route('AllQamarCareCard')}}" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
           <a href="javascript:window.print()" class="btn btn-dark  waves-effect waves-light"><i class=" bx bxs-printer   font-size-18"></i></a>
      
        </div>
     </div>
     
                       <div class="row">
                            <div class="col-lg-12">
                                <div>
                                    <div >
                                    <div class="table-responsive">
                                    <table class="table table-nowrap">
                                             <tr>
                                                <td>
                                                     <img src="{{URL::asset('/uploads/QamarCareCard/ServiceProvider/Profiles/'.$data -> Profile)}}" style="width: 130px; height: 135px;" class="rounded">
                                                </td>
                                                <td style="text-align: center;">
                                                     <!-- <img src="{{URL::asset('/assets/images/letterhead.png')}}" style="width: 400px; height: 100%;" class="rounded-circle"> -->

                                                </td>
                                                 <td  style="float:right;">
                                                    <div class="">
                                                         <div class="text-center">
                                                            <h4 class="font-size-18 mb-1"><a href="#" class="badge badge-soft-success">Scan Me </a></h4>

                                                            <div class="mb-3" class="rounded">
                                                                 {!!     DNS2D::getBarcodeSVG(''.$data->QCC,  'QRCODE', 6, 6, true) !!} 

                                                                 
                                                            </div>     
                                                         </div>
                                                     </div>
                                                </td>
                                               </tr>
                                             </table>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap">
                                                
                                                <h5 style="font-weight: bold;" class="card-header  text-dark">PEROSNAL INFORMATION</h5>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">First Name</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> FirstName}} </td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Last Name</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> LastName}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Tazkira ID</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> TazkiraID}}</td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Date of Birth</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> DOB}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Gender</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> Gender}}</td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Language</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> Language}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Current Job</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> CurrentJob}}</td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Profession</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> Profession}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Education Level</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> EducationLevel}}</td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Qamar Care Card Number</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;" ><h4 class="font-size-18 mb-1"><a href="#" class="badge badge-soft-danger">QCC-{{$data -> QCC}} </a></h4>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Province</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> Province}}</td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">District</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> District}}</td>
                                                    </tr>
                                                    
                                                    <!-- <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Tazkira</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target=".exampleModal">
                                                                [View Tazkira]
                                                            </a>
                                                        </td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;"></td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> TazkiraID}}</td>
                                                    </tr> -->
                                                  
                                            </table>

                                            <table class="table table-nowrap">
                                                <h5 style="font-weight: bold;" class="card-header  text-dark">SERIVCE AND CONTACT</h5>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Primary Number</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> PrimaryNumber}}</td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Secondary Number</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> SecondaryNumber}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Service Province</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> ProvinceService }}</td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Service District</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> DistrictService }}</td>
                                                    </tr>
                                                    <!-- <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">District</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> District}}</td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Village</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> Village}}</td>
                                                    </tr> -->
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Email</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> Email}}</td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Service Type</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> ServiceType}}</td>
                                                    </tr>
                                                  
                                            </table>

                                            <!-- <table class="table table-nowrap">
                                                <h5 style="font-weight: bold;" class="card-header  text-dark">FAMILY AND INCOME INFORMATION</h5>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Father's Name</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> FatherName}}</td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Spuose's Name</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> SpuoseName}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Eldest Son Age</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> EldestSonAge}}</td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Monthly Family Income</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> MonthlyFamilyIncome}} (AFGHANI)</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Monthly Family Expenses</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> MonthlyFamilyExpenses}} (AFGHANI)</td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Number of  Family Members</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> NumberFamilyMembers}} (AFGHANI)</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Income Streem</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> IncomeStreem}}</td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Level Of Poverty</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">
                                                        
                                                        
                                                        
                                <div>
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
                                    </div>
                                
                                                    
                                                    
                                                    
                                                    </td>
                                                    </tr>
                                                  
                                                  
                                            </table> -->
                                            <!-- <table class="table table-nowrap">
                                                <h5 style="font-weight: bold;" class="card-header  text-dark">DOCUMENTS</h5>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Tazkira</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><a href="{{URL::asset('/uploads/QamarCareCard/Beneficiaries/Tazkiras/'.$data -> Tazkira)}}" class="badge badge-soft-info">{{ $data -> FirstName}} {{ $data -> LastName}} Tazkira</a></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Other</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                    </tr>
                                                                                              
                                            </table> -->
                                            <!-- <table class="table table-nowrap">
                                                    <tr>
                                                        <td style="width: 20%;  padding: 5px;">    
                                                        <input class="form-check-input font-size-18" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label font-size-18 text-success" for="formCheck1">
                                                           Approve
                                                        </label>
                                                        </td>
                                                        <td style="width: 20%;  padding: 5px;">    
                                                        <input class="form-check-input font-size-18" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label font-size-18 text-danger" for="formCheck1">
                                                           Reject
                                                        </label>
                                                        </td>
                                                        <td style="width: 20%;  padding: 5px;">    
                                                        <label class="form-check-label font-size-18" for="formCheck1">
                                                           Signature
                                                        </label>
                                                        </td>
                                                    </tr>
                                                  
                                                  
                                            </table> -->
                                            

                                        </div>
                             <!-- <div class="d-print-none">
                                    
                                    <div class="float-right">

                                        @if($data -> Status == 'Pending')
                                          <div class="row">
                                            
                                          <div class="col-md-1">
                                          <form action="{{route('ApproveQamarCareCard', [$data -> id])}}" method="POST">
                                             @method('PUT')
                                             @csrf
                        
                                           <button type="submit"  class="btn btn-success waves-effect waves-light mr-1">Approve</button> 
                                         </form>
                                              </div>
                                              <div class="col-md-1">
                                              <form action="{{route('RejectQamarCareCard', [$data -> id])}}" method="POST">
                                             @method('PUT')
                                             @csrf
                        
                                           <button type="submit"  class="btn btn-danger waves-effect waves-light mr-1">Reject</button> 
                                         </form>
                                              </div>
                                          </div>
                                       
                                        

                                       

                                        @endif



                                        @if($data -> Status == 'Approved')
                                        <form action="{{route('ReInitiateQamarCareCard', [$data -> id])}}" method="POST">
                                             @method('PUT')
                                             @csrf
                        
                                           <button type="submit"  class="btn btn-info waves-effect waves-light mr-1">Re-Initiate</button> 
                                           <a href="{{route('PrintQamarCareCard', [$data -> id])}}" class="btn btn-dark waves-effect waves-light mr-1"><i class="bx bx-printer font-size-18"></i></a> 

                                         </form>

                                        @endif


                                        @if($data -> Status == 'Rejected')
                                        <form action="{{route('ReInitiateQamarCareCard', [$data -> id])}}" method="POST">
                                             @method('PUT')
                                             @csrf
                        
                                           <button type="submit"  class="btn btn-info waves-effect waves-light mr-1">Re-Initiate</button> 
                                         </form>
                                        @endif

                                        @if($data -> Status == 'Printed')
                                        <form action="{{route('ReInitiateQamarCareCard', [$data -> id])}}" method="POST">
                                             @method('PUT')
                                             @csrf
                        
                                           <button type="submit"  class="btn btn-info waves-effect waves-light mr-1">Re-Initiate</button>
                                           <a href="{{route('PrintQamarCareCard', [$data -> id])}}" class="btn btn-info waves-effect waves-light mr-1"><i class="bx bx-printer font-size-18"></i></a> 

                                         </form>


                                        @endif
                                    </div>
                                </div> -->
                                        </div>
                                        <br />
                                        <div>
                                        <!-- <p class="font-size-18 card-header  text-dark" >Tazkira </p>
                                        <br />
                                        <img src="{{URL::asset('/uploads/Tazkiras/'.$data -> Tazkira)}}" style="width: 600px; height:100%" > -->
                                        <div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
        <div class="col-12">
           <!-- <a href="{{route('AllQamarCareCard')}}" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a> -->
           <!-- <a href="javascript:window.print()" class="btn btn-dark  waves-effect waves-light"><i class=" bx bxs-printer   font-size-18"></i></a> -->
           @if( $data -> Status == 'Approved' || $data -> Status == 'Rejected')
                    <a href="{{route('ReInitiateServiceProviderQamarCareCard', ['data' => $data -> id])}}" class="btn btn-info waves-effect waves-light reinitiate m-3">
                        <i class="bx bx-time-five  font-size-16 align-middle"></i>Re-Initiate
                    </a>
                    @endif
                    @if( $data -> Status == 'Pending')
                    <a href="{{route('ApproveServiceProviderQamarCareCard', ['data' => $data -> id])}}" class="btn btn-success waves-effect waves-light approve m-3">
                        <i class="bx bx-check-circle font-size-16 align-middle"></i>Approve
                    </a>
                     <a href="{{route('RejectServiceProviderQamarCareCard', ['data' => $data -> id])}}" class="btn btn-danger waves-effect waves-light reject m-3">
                        <i class=" bx bx-x-circle font-size-16 align-middle"></i>Reject
                    </a>
                    @endif
        </div>
     </div>
@endforeach
@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/pages/sweetalert.min.js') }}"></script>

<script>
    $('.reinitiate').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be re initiated!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});

// $('.print').on('click', function (event) {
//     event.preventDefault();
//     const url = $(this).attr('href');
//     swal({
//         title: 'Are you sure?',
//         text: 'Are you sure that this record is printed!',
//         icon: 'warning',
//         buttons: ["Cancel", "Yes!"],
//     }).then(function(value) {
//         if (value) {
//             window.location.href = url;
//         }
//     });
// });

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
