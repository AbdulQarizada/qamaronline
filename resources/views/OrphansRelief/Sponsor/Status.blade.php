@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts')

@section('title') Orphan and Sponsorships @endsection

@section('css')


@endsection

@section('content')

@foreach($datas as $data)
<div class="row">
    <div class="col-12">
        <a href="{{route('AllSponsor')}}" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <a href="javascript:window.print()" class="btn btn-dark  waves-effect waves-light"><i class=" bx bxs-printer   font-size-18"></i></a>

    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-nowrap">
                <tr>
                    <td>
                        <img src="{{URL::asset('/uploads/Users/Profiles/'.$data -> Profile)}}" style="width: 130px; height: 135px;" class="rounded">
                    </td>
                    <td style="float:right;">
                        <div class="text-center">
                            <h4 class="font-size-18 mb-1"><a href="#" class="badge badge-soft-success">Scan Me </a></h4>
                            <div class="mb-3" class="rounded">
                                {!! DNS2D::getBarcodeSVG(''.$data->id, 'QRCODE', 6, 6, true) !!}
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-nowrap">
                <h5 style="font-weight: bold;" class="card-header  text-dark">PEROSNAL INFORMATION</h5>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">First Name</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> FirstName}} </td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Last Name</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> LastName}}</td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Tazkira ID</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> Tazkira_ID}}</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Date of Birth</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> DOB}}</td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Gender</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> Gender}}</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Job</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> Job}}</td>
                </tr>
            </table>
            <table class="table table-nowrap">
                <h5 style="font-weight: bold;" class="card-header  text-dark">ADDRESS AND CONTACT</h5>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Primary Number</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> PrimaryNumber}}</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Secondary Number</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> SecondaryNumber}}</td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Email</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> email}}</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Province</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> Province}}</td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">District</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> District}}</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Village</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> Village}}</td>
                </tr>
            </table>
            <table class="table table-nowrap">
                <h5 style="font-weight: bold;" class="card-header  text-dark mb-3">ROLE AND PERMISSION</h5>
                @if($data -> IsActive == 1)
                <span class="font-size-18 m-3"><a href="#" class="badge badge-soft-success">Active</a></span>
                @endif
                @if($data -> IsActive != 1)
                <span class="font-size-18 m-3"><a href="#" class="badge badge-soft-danger">InActive</a></span>
                @endif
            </table>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        @if($data -> IsActive == 1)
        <a href="{{route('DeActivateUser', ['data' => $data -> id])}}" class="btn btn-danger waves-effect waves-light deactivate m-3" data-toggle="tooltip" data-placement="top" title="DeActivate">
            De-ACTIVATE
        </a>
        @endif
        @if($data -> IsActive == 0)
        <a href="{{route('ActivateUser', ['data' => $data -> id])}}" class="btn btn-success waves-effect waves-light activate m-3" data-toggle="tooltip" data-placement="top" title="Activate">
            ACTIVATE
        </a>
        <a href="{{route('DeleteSponsor', ['data' => $data -> id])}}" class="btn btn-danger waves-effect waves-light delete-confirm">
            <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
        </a>
        @endif
    </div>
</div>
@endforeach
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

    $('.activate').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This record and it`s details will be activated!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

    $('.deactivate').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This record and it`s details will be deactivated!',
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