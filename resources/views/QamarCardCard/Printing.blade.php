@extends('layouts.master-layouts')

@section('title') Qamar Care List @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- <style>
    table, th, td {
  border: 1px solid red;
}
</style> -->

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
           <a href="{{route('PrintQamarCareCard', ['data' => $data -> id])}}" class="btn btn-success waves-effect waves-light print"><i class="bx bxs-printer   font-size-16 align-middle"></i>Confirm Print</a>
         </div>
    </div>

                     
                <div class="row">
                  

                       <div  style=" background-image: url('{{ URL::asset('/assets/images/qcc/front.jpeg') }}'); height: 40vh; background-repeat: no-repeat; "> 
                       
                       
                       
                       <table class="table-responsive" style="margin-left:90px; margin-top:120px;">
                      
                          <!-- <tr>
                              <td > <span class="h5">QCC-{{$data -> QCC}}</span></span></td>
                          </tr> -->
                        
                          <tr>

                              <td ><span class="h5"></span></td>
                          <td style="padding-left:138px;"  rowspan="5"> <img src="{{URL::asset('/uploads/QamarCareCard/Beneficiaries/Profiles/'.$data -> Profile)}}" style="width: 120px; height: 120px;" class="rounded"></td>

                          </tr>
                          <tr >
                              <td style="padding-left:25px;"><span class="h5">{{$data -> FirstName}} {{$data -> LastName}}</span></td>
                          </tr>
                          <tr >
                              <td style="padding-top:15px; padding-left:25px;  "><span class="h5">{{$data -> FatherName}} </span></td>
                          </tr>
                         
                          <tr >
                              <td style="padding-left:25px; padding-top:12px;  "><span class="h5">{{$data -> Gender}} </span></td>
                          </tr>
                          <tr >
                              <td style="padding-top:10px; padding-left:25px;"><span class="h5">{{$data -> Province}} </span></td>
                          </tr>
                        
                          <!-- <tr >
                              <td style=" padding-top:15px; padding-left:145px;">
                                <div class="rating-star">
                                   <input type="hidden" class="rating"  data-filled="mdi mdi-star text-warning " data-empty="mdi mdi-star-outline text-muted" value="{{$data -> LevelPoverty}}" name="LevelPoverty" id="LevelPoverty" readonly/>
                                </div>
                             </td>
                          </tr> -->
                     </table>
                     <table >
                    
                     <tr >
                          <td style=" padding-top:22px; padding-left:235px;">
                            <div class="rating-star">
                               <input type="hidden" class="rating"  data-filled="mdi mdi-star text-warning " data-empty="mdi mdi-star-outline text-muted" value="{{$data -> LevelPoverty}}" name="LevelPoverty" id="LevelPoverty" readonly/>
                            </div>
                         </td>
                      </tr> 
                   </table>
                
                </div>
                    </div>
               

                 <div class="row">
                      
                      <div  style=" background-image: url('{{ URL::asset('/assets/images/qcc/back.jpeg') }}'); 40vh; background-repeat: no-repeat; "> 
                      
                      
                      
                      <table class="table-responsive" style="margin-left:115px; margin-top:125px;">
                     
               
                         <tr >
                             <td style=" padding-top:120px; padding-bottom:130px; padding-left:90px;"><span class="h5"> {!!     DNS2D::getBarcodeSVG(''.$data->QCC,  'QRCODE', 3, 3, true) !!} </span></td>
                         </tr>
                     
                    </table>
                   
                   </div>
                </div>

             
                                             



                        <!-- end row -->

@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/pages/sweetalert.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-rating/bootstrap-rating.min.js') }} "></script>

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
