@extends('layouts.master-layouts')

@section('title') Rejected Cards @endsection

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
            
            <div class="card">
            <h3 class="card-header bg-danger text-white">Rejected Qamar Care Cards</h3>

                <div class="card-body">

              
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap w-100 m-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Province</th>
                                <th>District</th>
                                <th>Phone Number</th>
                                <th>Actions</th>
                                
                            </tr>
                        </thead>


                        <tbody>
                            @foreach($approveds as $approved)
                                <tr>
                                <td>{{$approved -> id}}</td>
                                <td>{{$approved -> FirstName}} {{$approved -> LastName}}</td>
                                <td>{{$approved -> Province}}</td>
                                <td>{{$approved -> District}}</td>
                                <td>{{$approved -> PNumber}}</td>
                                <td>
                       <div class="d-flex flex-wrap gap-2">
                       <a href="{{route('PrintQamarCareCard', ['data' => $approved -> id])}}" class="btn btn-secondary waves-effect waves-light">
                        <i class="bx bx-show-alt font-size-16 align-middle"></i>
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
