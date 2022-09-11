@extends('layouts.master-layouts')

@section('title') Assign Services @endsection

@section('css')
<link href="{{ URL::asset('/assets/css/mystyle/tab.css') }}" rel="stylesheet" type="text/css" />

 
@endsection


@section('content')

@component('components.breadcrumb')
@slot('li_1') Qamar Care / Assign Services @endslot
@slot('title')   @endslot
@endcomponent
<div class="row">
        <div class="col-12">
           <a href="{{route('IndexQamarCareCard')}}" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        </div>
     </div>
<div class="container">
<div class="top-text-wrapper text-center">
          <!-- <h4>Please Select your option</h4> -->
        </div>
        <div class="grid-wrapper grid-col-auto">
          <label for="Individual" class="radio-card">
            <input type="radio" name="radio-card"  id="Individual" onclick="myFunction();"  />
            <div class="card-content-wrapper">
              <span class="check-icon"></span>
              <div class="card-content">
                <img
                  src="{{ URL::asset('/assets/images/qcc/TaeAugust11.jpg') }}"
                  alt=""
                />
                <h4>Individual</h4>
                <h5>Please click on this if your register your self as individual</h5>
              </div>
            </div>
          </label>
          <!-- /.radio-card -->

          <label for="Orgianization" class="radio-card">
            <input type="radio" name="radio-card" id="Orgianization" onclick="myFunction();"/>
            <div class="card-content-wrapper">
              <span class="check-icon"></span>
              <div class="card-content">
                <img
                  src="{{ URL::asset('/assets/images/qcc/6301.jpg') }}"
                  alt=""
                />
                <h4>Orgianization</h4>
                <h5>Please click on this if your register your self as organization</h5>
              </div>
            </div>
          </label>
          <!-- /.radio-card -->
        </div>
        <!-- /.grid-wrapper -->
      </div>

      <div class="row">
        <div class="col-12 text-center">
           <a id="next" class="btn btn-warning btn-lg waves-effect waves-light m-3">Next</a>
        </div>
     </div>
      @endsection

      @section('script')
      <script>
    function myFunction() {

        if(document.getElementById('Individual').checked) {
            document.getElementById('next').href = "{{route('CreateServiceProviderIndividual')}}";
        }

      if(document.getElementById('Orgianization').checked) {
            document.getElementById('next').href = "";
        }

      // if(document.getElementById('optionthree').checked) {
      //       document.getElementById('linkid').href = "#link3";
      //   }
    }
</script>
@endsection
