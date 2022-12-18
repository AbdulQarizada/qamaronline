
<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            @if (Auth::check())
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-dashnaord">Dashboard</li>
                <li><a href="{{route('root')}}" key="t-home"><i class="mdi mdi-monitor-dashboard"></i> <span key="t-layouts">Dashboard</span></a></li>
                @if(Auth::user()->IsOrphanRelief == 1 || Auth::user()->IsAidAndRelief == 1 || Auth::user()->IsWash == 1 || Auth::user()->IsEducation == 1 || Auth::user()->IsInitiative == 1|| Auth::user()->IsMedicalSector == 1)
                <li class="menu-title" key="t-apps">Projects</li>
                @endif
                @if(Auth::user()->IsOrphanRelief == 1 || Auth::user()->IsOrphanSponsor == 1)
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-child"></i>
                        <span key="t-layouts">Orphan & Sponsorships</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        @if(Auth::user()->IsOrphanRelief == 1)
                        <li><a href="{{route('AllOrphans')}}" key="t-horizontal"><i class="mdi mdi-account-details-outline"></i> Orphans</a></li>
                        <li><a href="{{route('AllSponsor')}}" key="t-horizontal"><i class="mdi mdi mdi-account-child"></i> Sponsors</a></li>
                        <li><a href="{{route('AllPayment')}}" key="t-horizontal"><i class="mdi mdi-cash-multiple"></i> Payments</a></li>
                        <li><a><hr /></a></li>
                        @endif
                        @if(Auth::user()->IsOrphanSponsor == 1)
                        <li><a href="{{route('MyOrphans')}}" key="t-horizontal"><i class="mdi mdi-account-circle-outline"></i> My Orphans</a></li>
                        <li><a href="{{route('MyPayments')}}" key="t-horizontal"><i class="mdi mdi-currency-usd"></i> My Payments</a></li>
                        <li><a href="{{route('MyCard')}}" key="t-horizontal"><i class="bx bxl-mastercard "></i> My Card</a></li>
                        @endif
                    </ul>
                </li>
                @endif
                @if(Auth::user()->IsEducation == 1)
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-graduation"></i>
                        <span key="t-layouts">Education</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        @if(Auth::user()->IsEducation == 1)
                        <li><a href="{{route('AllScholarship')}}" key="t-horizontal"><i class="mdi mdi-bullseye-arrow"></i> Scholarships</a></li>
                        @endif
                    </ul>
                </li>
                @endif
                @if(Auth::user()->IsQamarCareCard == 1)
                <li class="menu-title" key="t-apps">Benefeciary Services</li>
                @endif
                @if(Auth::user()->IsQamarCareCard == 1)
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-credit-card"></i>
                        <span key="t-layouts">Qamar Care Card</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{route('CreateCareCard')}}" key="t-compact-create"><i class="bx bx-credit-card"></i>Care Cards</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-horizontal">Services</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" key="t-horizontal">Service Providers</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="{{route('IndividualServiceProviders')}}" key="t-topbar-light">All Individual Ser.Pro.</a></li>
                                        <li><a href="{{route('OrganizationServiceProviders')}}" key="t-preloader">All Organization Ser.Pro.</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-vertical">Online</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{route('VerifyCareCard')}}" key="t-colored-verify">Verify Cards</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                @endif
                @if(Auth::user()->IsRepresentative == 1)
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-supervisor-circle-outline"></i>
                        <span key="t-layouts">Representative</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        @if(Auth::user()->IsVolunteer == 1)
                        <li><a href="{{route('AllRepresentative')}}" key="t-horizontal"><i class="mdi mdi-account-supervisor-circle-outline"></i>Representatives</a></li>
                        @endif
                    </ul>
                </li>
                @endif
                @if(Auth::user()->IsVolunteer == 1)
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-star-outline"></i>
                        <span key="t-layouts">Volunteer</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        @if(Auth::user()->IsVolunteer == 1)
                        <li><a href="{{route('AllVolunteer')}}" key="t-horizontal"><i class="mdi mdi-account-star-outline"></i>Volunteers</a></li>
                        @endif
                    </ul>
                </li>
                @endif
                @if(Auth::user()->IsSuperAdmin == 1)
                <li class="menu-title" key="t-apps">System Management</li>
                @endif
                @if(Auth::user()->IsSuperAdmin == 1)
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-application-cog"></i>
                        <span key="t-layouts">System Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        @if(Auth::user()->IsOrphanRelief == 1)
                        <li><a href="{{route('AllUser')}}" key="t-horizontal"><i class="mdi mdi-account-group-outline"></i> Users</a></li>
                        <li><a href="{{route('AllLookUps')}}" key="t-horizontal"><i class="mdi mdi-format-line-weight"></i> Look Ups</a></li>
                        <li><a href="{{route('AllErrors')}}" key="t-horizontal"><i class="mdi mdi-android-debug-bridge"></i> Errors</a></li>
                        @endif
                    </ul>
                </li>
                @endif
            </ul>
            @endif
        </div>
    </div>
</div>
