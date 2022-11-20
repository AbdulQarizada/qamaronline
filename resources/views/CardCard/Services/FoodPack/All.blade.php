@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts')



@section('title') Food Packs @endsection

@section('css')

@endsection

@section('content')


<div class="row mt-4">
    <div class="col-6">
        @if(Cookie::get('Layout') == 'LayoutNoSidebar')

        <a href="{{route('IndexCareCard')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        @endif
        @if(Cookie::get('Layout') == 'LayoutSidebar')

        <a href="{{route('IndexCareCard')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        @endif
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>FOD PACKS</span>

    </div>
</div>
<div class="row">
    <div class="col-12 ">
        <a href="{{route('CreateFoodPack')}}" class="btn btn-success btn-lg waves-effect  waves-light mb-3 float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD FOOD PACK</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <h3 class="card-header bg-dark text-white"></h3>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table  table-striped table-bordered dt-responsive nowrap w-100 m-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Food Pack Name</th>
                                <th>Address</th>
                                <th>Expected Date</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> Name}}</a></h5>
                                </td>
                                <td>
                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> ProvinceName}}</a></h5>
                                        <p class="text-muted mb-0">{{$data -> DistrictName}}</p>
                                    </div>
                                </td>
                                <td> {{$data -> ExpectedDate}} </td>
                                <td> {{$data -> Description}} </td>
                                <td> </td>
                                <td>
                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data ->  UFirstName }} {{$data ->  ULastName }}</a></h5>
                                        <p class="text-muted mb-0">{{$data ->  UJob }}</p>

                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-wrap gap-2">
                                        <a href="{{route('EditFoodPack', ['data' => $data -> id])}}" class="btn btn-info waves-effect waves-light">
                                            <i class="bx bx-edit  font-size-16 align-middle"></i>
                                        </a>
                                        <a href="{{route('DeleteFoodPack', ['data' => $data -> id])}}" class="btn btn-danger waves-effect waves-light delete-confirm">
                                            <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/pages/sweetalert.min.js') }}"></script>


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
</script>
@endsection