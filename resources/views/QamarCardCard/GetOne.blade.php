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
           <a href="{{route('IndexQamarCareCard')}}" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        </div>
     </div>
                       <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                   
                                            
                                            <img src="assets/images/care_card_holders/" style="width: 130px; height: 135px;">
                                            <br /><br />
                                            
                                            <table class="table table-nowrap">
                                                <h5 style="font-weight: bold;">Personal Details</h5>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Full Name & ID</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> FirstName}} {{ $data -> LastName}}</td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Father's Name</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Spouse's Name</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Gender</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Date of Birth</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Family Status</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Occupation</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Job Type</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Eldest Son Age</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Language</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Tazkira</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target=".exampleModal">
                                                                [View Tazkira]
                                                            </a>
                                                        </td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;"></td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                    </tr>
                                                  
                                            </table>
                                            <hr />

                                            <table class="table table-nowrap">
                                                <h5 style="font-weight: bold;">Family Details</h5>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Monthly Family Income</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Monthly Family Expenses</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Stream of Income</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Level of Poverty</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Number of Family Members</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;"></td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                    </tr>
                                                  
                                            </table>

                                            <hr />

                                            <table class="table table-nowrap">
                                                <h5 style="font-weight: bold;">Contact Details</h5>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Primary Contact Number</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Secondary Contact Number</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Emergency Contact</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Email</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Village</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">District</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Province</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;"></td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Complete Address</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Remarks</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                    </tr>
                                                  
                                            </table>
                                            

                                        </div>
                                      <div class="d-print-none">
                                    
                                    <form action="my_application" method="post" enctype="multipart/form-data">
                                    <div class="float-right">
                                        <!-- <a href="javascript:window.print()" class="btn btn-dark waves-effect waves-light mr-1"><i class="fa fa-print"></i></a> -->
                                        <a href="assets/images/care_card_holders/"  class="btn btn-success waves-effect waves-light mr-1">Approve</a>
                                        <a href="assets/images/care_card_holders/"  class="btn btn-danger waves-effect waves-light mr-1">Reject</a>
                                    </div>
                                    </form>
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
