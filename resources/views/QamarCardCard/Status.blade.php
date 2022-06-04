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
    <div class="row">
        <div class="col-12">
           <a href="{{route('AllQamarCareCard')}}" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        </div>
     </div>
                       <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                   
                                            
                                            <img src="{{URL::asset('storage/assets/uploads/Profiles/'.$data -> Profile)}}" style="width: 130px; height: 135px;">
                                            <br /><br />
                                            
                                            <table class="table table-nowrap">
                                                <h5 style="font-weight: bold;" class="card-header bg-primary text-white">PEROSNAL INFORMATION</h5>
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
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">What type of job you can do?</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> FutureJob}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Education Level</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> EducationLevel}}</td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Qamar Care Card Number</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;" ><h4 class="font-size-18 mb-1"><a href="#" class="badge badge-soft-danger">QCC-{{$data -> QCC}} </a></h4>
                                                        </td>
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
                                            <br />

                                            <table class="table table-nowrap">
                                                <h5 style="font-weight: bold;" class="card-header bg-primary text-white">ADDRESS AND CONTACT</h5>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Primary Number</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> PrimaryNumber}}</td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Secondary Number</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> SecondaryNumber}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Emergency Number</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> EmergencyNumber}}</td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Province</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> Province}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">District</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> District}}</td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Village</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> Village}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Email</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> Email}}</td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;"></td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                    </tr>
                                                  
                                            </table>

                                            <br />

                                            <table class="table table-nowrap">
                                                <h5 style="font-weight: bold;" class="card-header bg-primary text-white">FAMILY AND INCOME INFORMATION</h5>
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
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> LevelPoverty}}</td>
                                                    </tr>
                                                  
                                                  
                                            </table>

                                            <br />
                                            <table class="table table-nowrap">
                                                <h5 style="font-weight: bold;" class="card-header bg-primary text-white">DOCUMENTS</h5>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Tazkira</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> Tazkira}}</td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Other</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> Other}}</td>
                                                    </tr>
                                         
                                                  
                                                  
                                            </table>
                                            

                                        </div>
                             <div class="d-print-none">
                                    
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
                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

@endsection
@section('script')
    <!-- Required datatable js -->
  
@endsection
