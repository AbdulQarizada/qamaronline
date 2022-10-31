<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li class="menu-title" key="t-apps">Dashboard</li>


                <!-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-ecommerce">Orphan Sponsorship</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                 <li><a href="ecommerce-products" key="t-products">All Orphans</a></li>
                        <li><a href="ecommerce-product-detail" key="t-product-detail">My Orphans</a></li>
                        <li><a href="ecommerce-product-detail" key="t-product-detail">Payment</a></li>

                        </li>
                    </ul>
                </li> -->

                <?php if(Auth::user()->IsSponsor == 1): ?>
                <li><a href="<?php echo e(route('MyOrphansSponsor')); ?>" key="t-orphan"><i class="bx bx-store"></i>My Orphans</a></li>
                <li><a href="<?php echo e(route('MyPaymentsSponsor')); ?>" key="t-payment"><i class="bx bx-store"></i>My Payments</a></li>
                <?php endif; ?>
<!--

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-credit-card"></i>
                        <span key="t-ecommerce">Qamar Care Card</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="detail" key="t-products">Operations</a></li>
                        <li><a href="detail" key="t-product-detail">Services</a></li>
                        <li><a href="ecommerce-product-detail" key="t-product-detail">Request Care Card</a></li>
                        <li><a href="ecommerce-product-detail" key="t-product-detail">Verify Care Cards</a></li>
                    </ul>


                </li> -->



                <?php if(Auth::user()->IsQamarCareCard == 1): ?>
            <li class="menu-title" key="t-apps">Project</li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="bx bx-credit-card"></i>
                    <span key="t-layouts">Qamar Care Card</span>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                    <li>
                        <a href="javascript: void(0);" class="has-arrow" key="t-vertical">Operations</a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="<?php echo e(route('AllCareCard')); ?>" key="t-light-sidebar">All Care Cards</a></li>
                            <!-- <li><a href="layouts-compact-sidebar.html" key="t-compact-sidebar">Compact Sidebar</a></li>
                            <li><a href="layouts-icon-sidebar.html" key="t-icon-sidebar">Icon Sidebar</a></li>
                            <li><a href="layouts-boxed.html" key="t-boxed-width">Boxed Width</a></li>
                            <li><a href="layouts-preloader.html" key="t-preloader">Preloader</a></li>
                            <li><a href="layouts-colored-sidebar.html" key="t-colored-sidebar">Colored Sidebar</a></li>
                            <li><a href="layouts-scrollable.html" key="t-scrollable">Scrollable</a></li> -->
                        </ul>
                    </li>

                    <!-- <li>
                        <a href="javascript: void(0);" class="has-arrow" key="t-horizontal">Horizontal</a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="layouts-horizontal.html" key="t-horizontal">Horizontal</a></li>
                            <li><a href="layouts-hori-topbar-light.html" key="t-topbar-light">Topbar light</a></li>
                            <li><a href="layouts-hori-boxed-width.html" key="t-boxed-width">Boxed width</a></li>
                            <li><a href="layouts-hori-preloader.html" key="t-preloader">Preloader</a></li>
                            <li><a href="layouts-hori-colored-header.html" key="t-colored-topbar">Colored Header</a></li>
                            <li><a href="layouts-hori-scrollable.html" key="t-scrollable">Scrollable</a></li>
                        </ul>
                    </li> -->
                </ul>
            </li>
            <?php endif; ?>

            </ul>




            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End --><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>