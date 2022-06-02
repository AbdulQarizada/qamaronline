@extends('layouts.master-layouts')

@section('title') Add Qamar Care Card @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Qamar Care / Add Qamar Care Card @endslot
@slot('title')   @endslot
@endcomponent



<!-- 
<div class="row">
    <div class="col-md-12">
<div class="card">
        <div class="card-body">
        <h2 class="">Add Qamar Care Card</h2>
        </div>
    </div>
    </div>
    </div> -->
<div class="row">
    <div class="col-lg-12">
    <div class="card">
                <div class="card-body">
                    <h4 class="card-header mb-4">Add Qamar Care Card Beneficiary</h4>
                    <!-- <p class="card-title-desc">Please enter all information about the Beneficiaries of the Qamar Care Card.
                    </p> -->
                    <form class="needs-validation"  action="/CreateQamarCareCard" method="POST" novalidate>
                    @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="validationTooltip01" class="form-label">First name</label>
                                    <input type="text" class="form-control" id="validationTooltip01" name="FirstName"
                                        placeholder="First name"  required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="validationTooltip02" class="form-label">Last name</label>
                                    <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" name="LastName"
                                         required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="validationTooltipUsername" class="form-label">Email</label>
                                    <div class="input-group">
                                      
                                        <input type="email" class="form-control" id="validationTooltipUsername" name="Email"
                                            placeholder="Email" aria-describedby="validationTooltipUsernamePrepend"
                                            required>
                                        <div class="invalid-tooltip">
                                            Email address
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                         
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="validationTooltipUsername" class="form-label">Primary Number</label>
                                    <div class="input-group">
                                      
                                        <input type="number" class="form-control" id="validationTooltipUsername" name="PNumber"
                                            placeholder="Primary Number" aria-describedby="validationTooltipUsernamePrepend"
                                            required>
                                        <div class="invalid-tooltip">
                                        Primary Number
                                        </div>
                                    </div>
                                </div>
                            </div>
                                     
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="validationTooltipUsername" class="form-label">Secondary Number</label>
                                    <div class="input-group">
                                      
                                        <input type="number" class="form-control" id="validationTooltipUsername" name="SNumber"
                                            placeholder="Secondary Number" aria-describedby="validationTooltipUsernamePrepend"
                                            required>
                                        <div class="invalid-tooltip">
                                        Secondary Number
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 position-relative">
                                    <label for="validationTooltip03" class="form-label">Province</label>
                                    <select class="form-select" required name="Province">
                            <option>Select</option>
                            @foreach($provinces as $province)
                            <option value="{{$province -> Name}}">{{$province -> Name}}</option>
                            @endforeach
                           </select>
                                    <div class="invalid-tooltip">
                                        Please provide a valid Province.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 position-relative">
                                    <label for="validationTooltip04" class="form-label">District</label>
                                    <input type="text" class="form-control" id="validationTooltip04" placeholder="District" name="District"
                                        required>
                                    <div class="invalid-tooltip">
                                        Please provide a valid state.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>

                            <button class="btn btn-success btn-lg" type="submit">Save </button>
                            <a class="btn btn-danger btn-lg" href="QamarCareCard">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>
@endsection