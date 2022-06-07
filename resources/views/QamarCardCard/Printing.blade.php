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
           <a href="javascript:window.print()" class="btn btn-dark waves-effect waves-light mr-1"><i class="fa fa-print"></i></a>
           <a href="{{route('PrintQamarCareCard', ['data' => $data -> id])}}" class="btn btn-success waves-effect waves-light print">
                        <i class="bx bxs-printer   font-size-16 align-middle"></i>
                        Confirm Print
                    </a>
        </div>
     </div>
                       <div class="row">
                      
                       <div  style=" background-image: url('{{ URL::asset('/assets/images/printcard.jpg') }}'); height: 100vh; background-repeat: no-repeat; "> 
                       
                       
                       
                       <table class="table-responsive" style="margin-left:70px; margin-top:95px;">
                      
                          <tr>
                              <td > <span class="h5">QCC-{{$data -> QCC}}</span></span></td>
                          </tr>
                          <tr>
                              <td ><span class="h5">{{$data -> FirstName}} {{$data -> LastName}}</span></td>
                          </tr>
                          <tr >
                              <td style=" padding-top:5px; padding-left:5px;"><span class="h5">{{$data -> FatherName}} </span></td>
                          </tr>
                     </table>
                    
                    </div>

                        <!-- end row -->

@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/pages/sweetalert.min.js') }}"></script>

<script>


$('.print').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'Are you sure that this record is printed!',
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
