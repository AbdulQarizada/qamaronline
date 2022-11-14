@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts')

@section('title') Orphan and Sponsorships @endsection


@section('content')
<div class="row">
    <div class="col-12 ">
        <div class="card border border-3">
            <div class="card-header">
                <blockquote class="blockquote border-dark  font-size-14 mb-0">
                    <p class="my-0   card-title fw-medium font-size-24 text-wrap">My Orphans</p>

                </blockquote>
            </div>
        </div>
    </div>
</div>
<div class="row">
    @foreach($datas as $data)
    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-4">
                    <div class="mt-4 mt-md-0">
                            <img class="img-thumbnail rounded-circle avatar-xl" alt="Orphan Profile" src="{{URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)}}" data-holder-rendered="true">
                        </div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <h5 class="text-truncate font-size-15"><a href="javascript: void(0);" class="text-dark font-size-24">{{$data ->  FirstName }}</a></h5>
                        <p class="text-muted mb-4">{{$data ->  WhyShouldYouHelpMe }}</p>
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 border-top">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item me-3">
                        <span class="badge bg-success">Sponsored</span>
                    </li>
                    <li class="list-inline-item me-3">
                        <i class="bx bx-calendar me-1"></i> End Date: {{$data ->  Sponsored_EndDate  }}
                    </li>
                    <li class="list-inline-item me-3 text-success">
                        <i class="mdi mdi-currency-usd me-1"></i>40 Montly
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="row">
    <div class="col-lg-12">
        <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
            {!! $datas->links() !!} <span class="m-2 text-white badge badge-soft-dark">{{ $datas->total() }} Total Records</span>
        </ul>
    </div>
</div>

@endsection