@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts')


@section('title') Beneficiary List @endsection

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')


<div class="row mt-4">
    <div class="col-6">
        @if(Cookie::get('Layout') == 'LayoutNoSidebar')

<a href="{{route('IndexFoodPack')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
@endif
@if(Cookie::get('Layout') == 'LayoutSidebar')

<a href="{{route('IndexCareCard')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
@endif
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>Beneficiary List</span>

    </div>
</div>
<div class="row">
<div class="col-2">
        <select class="form-select  form-select-lg mb-3 @error('Country') is-invalid @enderror" onchange="window.location.href=this.value;" id="item" name="item">
            @foreach($provinces as $province)
            <option value="{{route('SearchAllList', ['data' => $province -> id])}}">{{ $province -> Name}}</option>

            @endforeach
        </select>
    </div>
    <div class="col-10 ">
        <a href="{{route('AllCreateFoodPack')}}" class="btn btn-success btn-lg waves-effect  waves-light mb-3 float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD BENEFICIARY</a>
    </div>
</div>
<div class="row">
    <div class="col-12">

        <div class="card">
            <h3 class="card-header bg-dark text-white"></h3>

            <div class="card-body">

                <div class="table-responsive">
                    <table id="datatable-buttons" class="table  table-striped table-bordered dt-responsive nowrap w-100 m-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Beneficairy Name</th>
                                <th>Province</th>
                                <th>Primary Number</th>
                                <th>Secondary Number</th>
                                <th>TazkiraID</th>
                                <th>Referenced By</th>
                                <th>Action</th>

                            </tr>
                        </thead>


                        <tbody>
                            @foreach($datas as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> FullName}}</a></h5>
                                </td>
                                <td>
                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> ProvinceName}}</a></h5>

                                    </div>
                                </td>
                                <td> {{$data -> PrimaryNumber}} </td>
                                <td> {{$data -> SecondaryNumber}} </td>

                                <td> {{$data -> TazkiraID}} </td>
                                <td>
                                <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data ->  RefernceFirstName }} {{$data ->  RefernceLastName }}</a></h5>

                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <!-- <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data ->  UFirstName }} {{$data ->  ULastName }}</a></h5> -->

                                    </div>
                                </td>

                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
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

<script src="{{ URL::asset('/assets/js/pages/sweetalert.min.js') }}"></script>


<!-- Bootstrap rating js -->
<script src="{{ URL::asset('/assets/libs/bootstrap-rating/bootstrap-rating.min.js') }} "></script>

<script src="{{ URL::asset('/assets/js/pages/rating-init.js') }}"></script>

<script>
    $('.delete-confirm').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This record and it`s details will be permanantly deleted!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });




    // $('#datatable').DataTable( {
    //     responsive: true,

    //     lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],

    //     dom: 'lBfrtip',
    //     buttons: [
    //         {
    //             autoFilter: true,
    //             extend: 'excel',
    //             text: 'Export To Excel',
    //             exportOptions: {
    //                 modifier: {
    //                     page: 'current'
    //                 }
    //             }
    //         }
    //     ]
    // } );
</script>
@endsection