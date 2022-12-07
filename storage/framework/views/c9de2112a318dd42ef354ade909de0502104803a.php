<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-dashnaord">Dashboard</li>
                <li><a href="<?php echo e(route('root')); ?>" key="t-home"><i class="bx bx-store"></i>Home</a></li>
                <?php if(Auth::user()->IsOrphanRelief == 1 || Auth::user()->IsAidAndRelief == 1 || Auth::user()->IsWash == 1 || Auth::user()->IsEducation == 1 || Auth::user()->IsInitiative == 1|| Auth::user()->IsMedicalSector == 1): ?>
                <li class="menu-title" key="t-apps">Projects</li>
                <?php endif; ?>
                <?php if(Auth::user()->IsQamarCareCard == 1): ?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-credit-card"></i>
                        <span key="t-layouts">Qamar Care Card</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="<?php echo e(route('CreateCareCard')); ?>" key="t-compact-create"><i class="bx bx-credit-card"></i>Care Cards</a></li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-horizontal">Services</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" key="t-horizontal">Food Packs</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="<?php echo e(route('CreateFoodPack')); ?>" key="t-horizontal">Add Food Packs</a></li>
                                        <li><a href="<?php echo e(route('AllFoodPack')); ?>" key="t-topbar-light">All Food Packs</a></li>
                                        <li><a href="<?php echo e(route('EligibleBeneficiariesFoodPack')); ?>" key="t-boxed-width">Eligible Beneficiaries</a></li>
                                        <li><a href="<?php echo e(route('AssignedBeneficiariesFoodPack')); ?>" key="t-preloader">Assigned Beneficiaries</a></li>
                                        <li><a href="<?php echo e(route('AllListFoodPack')); ?>" key="t-preloader">Staff Beneficiaries</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" key="t-horizontal">Service Providers</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="<?php echo e(route('CreateIndividualServiceProviders')); ?>" key="t-horizontal">Add Individual Ser.Pro.</a></li>
                                        <li><a href="<?php echo e(route('IndividualServiceProviders')); ?>" key="t-topbar-light">All Individual Ser.Pro.</a></li>
                                        <li><a href="<?php echo e(route('CreateOrganizationServiceProviders')); ?>" key="t-boxed-width">Add Organization Ser.Pro.</a></li>
                                        <li><a href="<?php echo e(route('OrganizationServiceProviders')); ?>" key="t-preloader">All Organization Ser.Pro.</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-vertical">Online</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="<?php echo e(route('VerifyCareCard')); ?>" key="t-colored-verify">Verify Cards</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>

                <?php if(Auth::user()->IsOrphanRelief == 1 || Auth::user()->IsOrphanSponsor == 1): ?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-child"></i>
                        <span key="t-layouts">Orphan & Sponsorships</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <?php if(Auth::user()->IsOrphanRelief == 1): ?>
                        <li><a href="<?php echo e(route('AllOrphans')); ?>" key="t-horizontal"><i class="mdi mdi-account-details-outline"></i> Orphans</a></li>
                        <li><a href="<?php echo e(route('AllSponsor')); ?>" key="t-horizontal"><i class="mdi mdi mdi-account-child"></i> Sponsors</a></li>
                        <li><a href="<?php echo e(route('AllPayment')); ?>" key="t-horizontal"><i class="mdi mdi-cash-multiple"></i> Payments</a></li>
                        <?php endif; ?>
                        <?php if(Auth::user()->IsOrphanSponsor == 1): ?>
                        <li><a href="<?php echo e(route('MyOrphans')); ?>" key="t-horizontal"><i class="mdi mdi-account-circle-outline"></i> My Orphans</a></li>
                        <li><a href="<?php echo e(route('MyPayments')); ?>" key="t-horizontal"><i class="mdi mdi-currency-usd"></i> My Payments</a></li>
                        <li><a href="<?php echo e(route('MyCard')); ?>" key="t-horizontal"><i class="bx bxl-mastercard "></i> My Card</a></li>

                        <?php endif; ?>
                    </ul>

                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/Layouts/sidebar.blade.php ENDPATH**/ ?>