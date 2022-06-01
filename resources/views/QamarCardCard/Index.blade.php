@extends('layouts.master')

@section('title') Qamar Care List @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Qamar Online @endslot
        @slot('title') Qamar Care Card @endslot
    @endcomponent


    <div class="row">
    <div style="float:right">
                    <a href="CreateQamarCareCard" class="btn btn-primary btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-plus-circle  font-size-16 label-icon"></i> Add Care Card</a>
                    <a href="ViewApprovedList" class="btn btn-success btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-list-ul  font-size-16 label-icon"></i> Approved Cards</a>
                    </div>
        <div class="col-12">
            
            <div class="card">
                <div class="card-body">

                    <!-- <h3 class="card-title">Qamar Care Card Operations</h3>  -->
              
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap w-100 m-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Province</th>
                                <th>District</th>
                                <th>Phone Number</th>
                                <th>Actions</th>
                                
                            </tr>
                        </thead>


                        <tbody>
                            @foreach($qamarcarecards as $qamarcarecard)
                                <tr>
                                <td>{{$qamarcarecard -> id}}</td>
                                <td>{{$qamarcarecard -> FirstName}}</td>
                                <td>{{$qamarcarecard -> LastName}}</td>
                                <td>{{$qamarcarecard -> Province}}</td>
                                <td>{{$qamarcarecard -> District}}</td>
                                <td>{{$qamarcarecard -> PNumber}}</td>
                                <td>
                       <div class="d-flex flex-wrap gap-2">
                    <a href="button" class="btn btn-secondary waves-effect waves-light">
                        <i class="bx bx-cog font-size-16 align-middle"></i>
                    </a>
                    <a href="button" class="btn btn-warning waves-effect waves-light">
                        <i class="bx bx-edit  font-size-16 align-middle"></i>
                    </a>
                    <a href="button" class="btn btn-danger waves-effect waves-light">
                        <i class=" bx bx-trash-alt font-size-16 align-middle"></i> 
                    </a>
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
@endsection
