@extends('layouts.master-layouts')

@section('title') Qamar Care List @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@if (Auth::check()) 
    @component('components.breadcrumb')
        @slot('li_1') Qamar Care Card @endslot
        @slot('title') Qamar Care Card Verify @endslot
    @endcomponent
   
    <div class="row">
        <div class="col-12">
           <a href="{{route('IndexQamarCareCard')}}" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        </div>
     </div>
     @endif
        <div class="row justify-content-center">
     <div class="col-lg-8 ">
     <h5 class="display-6 mb-4">Verify Your Qamar Care Card</h5>
     <form action="{{route('SearchQamarCareCard')}}" method="POST">
     @csrf
           <div class="hstack gap-3">
                    <label class="form-label font-size-24">QCC-</label>
                    <input class="form-control form-control-lg me-auto" type="text"  name="ID">
                    <button type="submit" class="btn btn-lg btn-primary">Search</button>
                    <div class="vr"></div>
                    <button type="reset" class="btn btn-lg btn-outline-danger">Reset</button>
              
          </div>
          </form>
    </div>
    <!-- end col -->
</div>
 <!-- end row -->

<br />
<br />
@if($qamarcarecards != null)

 <div class="row">
        <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 70px;">ID</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">QCC Number</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Date Created</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($qamarcarecards as $qamarcarecard)
                                <tr>
                                <td>
                                {{$qamarcarecard -> id}}
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{ $qamarcarecard -> FirstName}} {{ $qamarcarecard -> LastName}}</a></h5>
                                        <!-- <p class="text-muted mb-0">UI/UX Designer</p> -->
                                    </td>
                                    <td>QCC- {{$qamarcarecard -> QCC}}</td>
                                    <td>
                                    <div>
                                      <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary">{{$qamarcarecard -> PrimaryNumber}}</a></h5>
                                        <p class="text-muted mb-0 badge badge-soft-warning">{{$qamarcarecard -> SecondaryNumber}}</p>
                                         <p class="text-muted mb-0 badge badge-soft-danger">{{$qamarcarecard -> RelativeNumber}}</p>
                                        </div>
                                    </td>
                                    <td>
                                    {{$qamarcarecard -> created_at}}
                                    </td>
                                    <td>
                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                            <li class="list-inline-item px-2">
                                                @if($qamarcarecard -> Status == 'Pending')
                                                <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-secondary">Under Review</a></h5>

                                                @endif

                                                @if($qamarcarecard -> Status == 'Approved')
                                                    <i class="bx bx-check-circle text-success"></i>
                                                @endif

                                                @if($qamarcarecard -> Status == 'Rejected')
                                                    <i class="bx bx-x-circle text-danger "></i>
                                                @endif

                                                @if($qamarcarecard -> Status == 'Printed')
                                                    <i class="bx bx-x-circle text-danger "></i>
                                                @endif

                                                

                                            </li>
                                        </ul>
                                    </td>
                                
                            @endforeach
                         
                            </tbody>
                        </table>
                    </div>
             
                </div>
    </div>
    @endif
@endsection
@section('script')
    <!-- Required datatable js -->
  
@endsection
