@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts')
@section('title') Education and Scholarship @endsection
@section('css')
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <a href="{{route('StatusScholarship', ['data' => $data -> Scholarship_ID])}}" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <a href="javascript:window.print()" class="btn btn-outline-dark mb-3 waves-effect waves-light"><i class=" bx bxs-printer   font-size-18"></i></a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
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
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> TazkiraID}}</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Date of Birth</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ Carbon\Carbon::parse($data ->  DOB) -> format("j F Y") }}</td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Gender</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> Gender}}</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Language</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> Language}}</td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Age</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{\Carbon\Carbon::parse($data -> DOB)->diff(\Carbon\Carbon::now())->format('%y');}} Years</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Introducer Name</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> IntroducerName}}</td>
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
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Emergency Number</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> EmergencyNumber }}</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Province</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> Province}}</td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">District</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> District}}</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Village</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> Village}}</td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">In Care Of</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> InCareName}}</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">In Care Number</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> InCareNumber}}</td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">In Care Relationship</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> InCareRelationship}}</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">In Care TazkiraID</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> InCareTazkiraID}}</td>
                </tr>
            </table>
            <table class="table table-nowrap">
                <h5 style="font-weight: bold;" class="card-header  text-dark">EDUCATION</h5>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Currently In School?</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> CurrentlyInSchool}}</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">School Name</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> SchoolName}}</td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">School Number </td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> SchoolNumber }}</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">School Email</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> SchoolEmail}}</td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Class</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> Class}}</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">School Province</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> SchoolProvince}}</td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">School District</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> SchoolDistrict}}</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">School Village</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> Village}}</td>
                </tr>
            </table>
            <table class="table table-nowrap">
                <h5 style="font-weight: bold;" class="card-header  text-dark">FAMILY AND INCOME INFORMATION</h5>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Father's Name</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> FatherName}}</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Monthly Family Income</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> MonthlyFamilyIncome}} (AFGHANI)</td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Monthly Family Expenses</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> MonthlyFamilyExpenses}} (AFGHANI)</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Number of Family Members</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> NumberFamilyMembers}} </td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Income Streem</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> IncomeStreem}}</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Level Of Poverty</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">
                        <div>
                            @if( $data -> LevelPoverty == 1)
                            <i class="bx bxs-star text-warning font-size-12"></i>
                            <i class="bx bxs-star text-secondary font-size-14"></i>
                            <i class="bx bxs-star text-secondary font-size-16"></i>
                            <i class="bx bxs-star text-secondary font-size-18"></i>
                            <i class="bx bxs-star text-secondary font-size-20"></i>
                            @endif
                            @if( $data -> LevelPoverty == 2)
                            <i class="bx bxs-star text-warning font-size-12"></i>
                            <i class="bx bxs-star text-warning font-size-14"></i>
                            <i class="bx bxs-star text-secondary font-size-16"></i>
                            <i class="bx bxs-star text-secondary font-size-18"></i>
                            <i class="bx bxs-star text-secondary font-size-20"></i>
                            @endif
                            @if( $data -> LevelPoverty == 3)
                            <i class="bx bxs-star text-warning font-size-12"></i>
                            <i class="bx bxs-star text-warning font-size-14"></i>
                            <i class="bx bxs-star text-warning font-size-16"></i>
                            <i class="bx bxs-star text-secondary font-size-18"></i>
                            <i class="bx bxs-star text-secondary font-size-20"></i>
                            @endif
                            @if( $data -> LevelPoverty == 4)
                            <i class="bx bxs-star text-warning font-size-12"></i>
                            <i class="bx bxs-star text-warning font-size-14"></i>
                            <i class="bx bxs-star text-warning font-size-16"></i>
                            <i class="bx bxs-star text-warning font-size-18"></i>
                            <i class="bx bxs-star text-secondary font-size-20"></i>
                            @endif
                            @if( $data -> LevelPoverty == 5)
                            <i class="bx bxs-star text-warning font-size-12"></i>
                            <i class="bx bxs-star text-warning font-size-14"></i>
                            <i class="bx bxs-star text-warning font-size-16"></i>
                            <i class="bx bxs-star text-warning font-size-18"></i>
                            <i class="bx bxs-star text-warning font-size-20"></i>
                            @endif
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        @if( $data -> Status == 'AppliedApplicant' )
        <a href="{{route('SelecteForInterviewApplicant', ['data' => $data -> id])}}" class="btn btn-outline-primary btn-lg waves-effect  waves-light btn-rounded approve m-3">
            <i class="mdi mdi-account-circle-outline font-size-16 align-middle me-1"></i>Select For Interview
        </a>
        <a href="{{route('RejectApplicant', ['data' => $data -> id])}}" class="btn btn-outline-danger btn-lg waves-effect  waves-light btn-rounded reject m-3">
            <i class="mdi mdi-account-multiple-remove-outline font-size-16 align-middle me-1"></i>Reject
        </a>
        @endif

        @if( $data -> Status == 'SelectedForInterview')
        <a href="{{route('FinalizeApplicant', ['data' => $data -> id])}}" class="btn btn-outline-success btn-lg waves-effect  waves-light btn-rounded approve m-3">
            <i class="mdi mdi-account-check-outline font-size-16 align-middle me-1"></i>Selecte For Scholarship
        </a>
        <a href="{{route('RejectApplicant', ['data' => $data -> id])}}" class="btn btn-outline-danger btn-lg waves-effect  waves-light btn-rounded reject m-3">
            <i class="mdi mdi-account-multiple-remove-outline font-size-16 align-middle me-1"></i>Reject
        </a>
        @endif

        @if( $data -> Status == 'FinalizedApplicant')
        <a href="{{route('AcceptedOfferApplicant', ['data' => $data -> id])}}" class="btn btn-outline-info btn-lg waves-effect  waves-light btn-rounded approve m-3">
            <i class="mdi mdi-account-details-outline font-size-16 align-middle me-1"></i>Applicant Accepted Offer
        </a>
        <a href="{{route('RejectApplicant', ['data' => $data -> id])}}" class="btn btn-outline-danger btn-lg waves-effect  waves-light btn-rounded reject m-3">
            <i class="mdi mdi-account-multiple-remove-outline font-size-16 align-middle me-1"></i>Reject
        </a>
        @endif


        @if($data -> Status == 'Rejected' || $data -> Status == 'AcceptedOffer' )
        <a href="{{route('ReInitiateApplicant', ['data' => $data -> id])}}" class="btn btn-outline-info btn-lg waves-effect  waves-light btn-rounded reinitiate m-3">
            <i class="bx bx-time-five  font-size-16 align-middle me-1"></i>Re-Initiate
        </a>
        @endif
    </div>
</div>
@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/pages/sweetalert.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>

<!-- form advanced init -->
<script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
<!-- Form Validation -->
<script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>
<script>
    $('.reinitiate').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'This record and it`s details will be re initiated!'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });


    $('.approve').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'This record and it`s details will be approved!'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

    $('.reject').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'This record and it`s details will be rejected!'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
</script>
@endsection
