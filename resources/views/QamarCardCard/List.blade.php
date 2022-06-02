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
        <div class="col-12">
            
            <div class="card">
            <h3 class="card-header bg-warning text-white">Qamar Care Cards</h3>
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
                            @foreach($qamarcarecards as $qamarcarecard)
                                <tr>
                                <td>{{$qamarcarecard -> id}}</td>
                                <td>{{$qamarcarecard -> FirstName}} {{$qamarcarecard -> LastName}}</td>
                                <td>{{$qamarcarecard -> Province}}</td>
                                <td>{{$qamarcarecard -> District}}</td>
                                <td>{{$qamarcarecard -> PNumber}}</td>
                                <td>
                       <div class="d-flex flex-wrap gap-2">
                    <a href="{{route('GetOneQamarCareCard', ['data' => $qamarcarecard -> id])}}" class="btn btn-secondary waves-effect waves-light">
                        <i class="bx bx-show-alt font-size-16 align-middle"></i>
                    </a>
                    <a href="{{route('EditQamarCareCard', ['data' => $qamarcarecard -> id])}}" class="btn btn-warning waves-effect waves-light">
                        <i class="bx bx-edit  font-size-16 align-middle"></i>
                    </a>
                    <form action="{{route('DeleteQamarCareCard' , ['data' => $qamarcarecard -> id])}}" method="POST">
                    @csrf     
                    @method('DELETE')
                        
                    <button type="submit"  class="btn btn-danger waves-effect waves-light">
                        <i class=" bx bx-trash-alt font-size-16 align-middle"></i> 
                    </button> 
                    </form>
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
