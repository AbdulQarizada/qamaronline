<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-dashnaord">Dashboard</li>
                <li><a href="{{route('root')}}" key="t-home"><i class="bx bx-store"></i>Home</a></li>
                @if(Auth::user()->IsOrphanRelief == 1 || Auth::user()->IsAidAndRelief == 1 || Auth::user()->IsWash == 1 || Auth::user()->IsEducation == 1 || Auth::user()->IsInitiative == 1|| Auth::user()->IsMedicalSector == 1)
                <li class="menu-title" key="t-apps">Projects</li>
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
                                    <a href="javascript: void(0);" class="has-arrow" key="t-horizontal">Food Packs</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="{{route('CreateFoodPack')}}" key="t-horizontal">Add Food Packs</a></li>
                                        <li><a href="{{route('AllFoodPack')}}" key="t-topbar-light">All Food Packs</a></li>
                                        <li><a href="{{route('EligibleBeneficiariesFoodPack')}}" key="t-boxed-width">Eligible Beneficiaries</a></li>
                                        <li><a href="{{route('AssignedBeneficiariesFoodPack')}}" key="t-preloader">Assigned Beneficiaries</a></li>
                                        <li><a href="{{route('AllListFoodPack')}}" key="t-preloader">Staff Beneficiaries</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" key="t-horizontal">Service Providers</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="{{route('CreateIndividualServiceProviders')}}" key="t-horizontal">Add Individual Ser.Pro.</a></li>
                                        <li><a href="{{route('IndividualServiceProviders')}}" key="t-topbar-light">All Individual Ser.Pro.</a></li>
                                        <li><a href="{{route('CreateOrganizationServiceProviders')}}" key="t-boxed-width">Add Organization Ser.Pro.</a></li>
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
                        @endif
                        @if(Auth::user()->IsOrphanSponsor == 1)
                        <li><a href="{{route('MyOrphans')}}" key="t-horizontal"><i class="mdi mdi-account-circle-outline"></i> My Orphans</a></li>
                        <li><a href="{{route('MyPayments')}}" key="t-horizontal"><i class="mdi mdi-currency-usd"></i> My Payments</a></li>
                        <li><a href="{{route('MyPayments')}}" key="t-horizontal"><i class="bx bxl-mastercard "></i> My Card</a></li>

                        @endif
                    </ul>

                </li>
                @endif
            </ul>
        </div>
    </div>
</div>
