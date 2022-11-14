@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts')

@section('title') System Management @endsection

@section('css')
<link href="{{ URL::asset('/assets/css/mystyle/tabstyle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')


<div class="row">
    <div class="col-12">
        <a href="{{route('root')}}" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
    </div>
</div>
<div class="row">
    @if(Auth::user()->IsSuperAdmin == 1)
    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">System Management</h1>
    @endif
    <div class="col-xl-12">
        <div class="row">
            @if(Auth::user()->IsSuperAdmin == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('AllUser')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-group-outline display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Users</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsSuperAdmin == 1)
            <div class="col-md-2 mb-2">
                <a data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-format-line-weight text-info display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">ADD LOOK UPS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">ADD LOOK UP</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">


                                    <form class="needs-validation" action="{{route('CreateLookups')}}" method="POST" enctype="multipart/form-data" novalidate>
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3 position-relative">
                                                    <label for="Parent_Name" class="form-label">Main Catagory <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <div class="input-group">

                                                        <select class="form-select  form-select-lg @error('Parent_Name') is-invalid @enderror" value="{{ old('Parent_Name') }}" required id="Parent_Name" name="Parent_Name">
                                                            @foreach($catagorys as $catagory)
                                                            <option value="{{ $catagory -> Name}}">{{ $catagory -> Name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('Parent_Name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3 position-relative">
                                                    <label for="Name" class="form-label ">Name<i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <input type="text" class="form-control form-control-lg @error('Name') is-invalid @enderror" value="{{ old('Name') }}" id="Name" name="Name" required>
                                                    @error('Name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                        <button class="btn btn-success btn-lg" type="submit">Save </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>

    </div>
</div>

@endsection
@section('script')

@endsection