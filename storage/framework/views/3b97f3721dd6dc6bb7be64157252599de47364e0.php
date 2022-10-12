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

                <li><a href="<?php echo e(route('MyOrphansSponsor')); ?>" key="t-orphan"><i class="bx bx-store"></i>My Orphans</a></li>
                <li><a href="<?php echo e(route('MyPaymentsSponsor')); ?>" key="t-payment"><i class="bx bx-store"></i>My Payments</a></li>
                


         

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>