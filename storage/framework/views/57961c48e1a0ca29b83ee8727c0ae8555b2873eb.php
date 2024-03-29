<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="<?php echo e(route('root')); ?>" class="logo logo-light">
                    <span class="logo-sm ">
                        <img src="<?php echo e(URL::asset('/assets/images/logo.png')); ?>" class= "mt-4"  alt="" height="45">
                    </span>
                    <span class="logo-lg mt-4">
                        <img src="<?php echo e(URL::asset('/assets/images/side_logo.png')); ?>" class= "mt-4" alt="" height="45">
                    </span>
                </a>
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="<?php echo app('translator')->get('translation.Search'); ?>">
                    <span class="bx bx-search-alt"></span>
                </div>
            </form>
            <?php if(Auth::check()): ?>
            <div class="dropdown dropdown-mega d-none d-lg-block ms-2">
              <!-- <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                <span key="t-megamenu">Mega Menus</span>
                <i class="mdi mdi-chevron-down"></i>
            </button> -->
                <div class="dropdown-menu dropdown-megamenu">
                    <div class="row">
                        <div class="col-sm-8">

                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0" key="t-ui-components"><?php echo app('translator')->get('translation.UI_Components'); ?></h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);" key="t-lightbox"><?php echo app('translator')->get('translation.Lightbox'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-range-slider"><?php echo app('translator')->get('translation.Range_Slider'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-sweet-alert"><?php echo app('translator')->get('translation.Sweet_Alert'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-rating"><?php echo app('translator')->get('translation.Rating'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-forms"><?php echo app('translator')->get('translation.Forms'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-tables"><?php echo app('translator')->get('translation.Tables'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-charts"><?php echo app('translator')->get('translation.Charts'); ?></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0" key="t-applications"><?php echo app('translator')->get('translation.Applications'); ?></h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);" key="t-ecommerce"><?php echo app('translator')->get('translation.Ecommerce'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-calendar"><?php echo app('translator')->get('translation.Calendars'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-email"><?php echo app('translator')->get('translation.Email'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-projects"><?php echo app('translator')->get('translation.Projects'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-tasks"><?php echo app('translator')->get('translation.Tasks'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-contacts"><?php echo app('translator')->get('translation.Contacts'); ?></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0" key="t-extra-pages"><?php echo app('translator')->get('translation.Extra_Pages'); ?></h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);" key="t-light-sidebar"><?php echo app('translator')->get('translation.Light_Sidebar'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-compact-sidebar"><?php echo app('translator')->get('translation.Compact_Sidebar'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-horizontal"><?php echo app('translator')->get('translation.Horizontal_layout'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-maintenance"><?php echo app('translator')->get('translation.Maintenance'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-coming-soon"><?php echo app('translator')->get('translation.Coming_Soon'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-timeline"><?php echo app('translator')->get('translation.Timeline'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-faqs"><?php echo app('translator')->get('translation.FAQs'); ?></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5 class="font-size-14 mt-0" key="t-ui-components"><?php echo app('translator')->get('translation.UI_Components'); ?></h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);" key="t-lightbox"><?php echo app('translator')->get('translation.Lightbox'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-range-slider"><?php echo app('translator')->get('translation.Range_Slider'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-sweet-alert"><?php echo app('translator')->get('translation.Sweet_Alert'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-rating"><?php echo app('translator')->get('translation.Rating'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-forms"><?php echo app('translator')->get('translation.Forms'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-tables"><?php echo app('translator')->get('translation.Tables'); ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-charts"><?php echo app('translator')->get('translation.Charts'); ?></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-sm-5">
                                    <div>
                                        <img src="<?php echo e(URL::asset ('/assets/images/megamenu-img.png')); ?>" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="<?php echo app('translator')->get('translation.Search'); ?>" aria-label="Search input">

                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <!-- <button type="button" class="btn header-item waves-effect"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php switch(Session::get('lang')):
                    case ('ru'): ?>
                        <img src="<?php echo e(URL::asset('/assets/images/flags/russia.jpg')); ?>" alt="Header Language" height="16">
                    <?php break; ?>
                    <?php case ('it'): ?>
                        <img src="<?php echo e(URL::asset('/assets/images/flags/italy.jpg')); ?>" alt="Header Language" height="16">
                    <?php break; ?>
                    <?php case ('de'): ?>
                        <img src="<?php echo e(URL::asset('/assets/images/flags/germany.jpg')); ?>" alt="Header Language" height="16">
                    <?php break; ?>
                    <?php case ('es'): ?>
                        <img src="<?php echo e(URL::asset('/assets/images/flags/spain.jpg')); ?>" alt="Header Language" height="16">
                    <?php break; ?>
                    <?php default: ?>
                        <img src="<?php echo e(URL::asset('/assets/images/flags/us.jpg')); ?>" alt="Header Language" height="16">
                <?php endswitch; ?>
            </button> -->
                <div class="dropdown-menu dropdown-menu-end">

                    <!-- item-->
                    <a href="<?php echo e(url('index/en')); ?>" class="dropdown-item notify-item language" data-lang="eng">
                        <img src="<?php echo e(URL::asset ('/assets/images/flags/us.jpg')); ?>" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                    </a>
                    <!-- item-->
                    <a href="<?php echo e(url('index/es')); ?>" class="dropdown-item notify-item language" data-lang="sp">
                        <img src="<?php echo e(URL::asset ('/assets/images/flags/spain.jpg')); ?>" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="<?php echo e(url('index/de')); ?>" class="dropdown-item notify-item language" data-lang="gr">
                        <img src="<?php echo e(URL::asset ('/assets/images/flags/germany.jpg')); ?>" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a href="<?php echo e(url('index/it')); ?>" class="dropdown-item notify-item language" data-lang="it">
                        <img src="<?php echo e(URL::asset ('/assets/images/flags/italy.jpg')); ?>" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                    </a>

                    <!-- item-->
                    <a href="<?php echo e(url('index/ru')); ?>" class="dropdown-item notify-item language" data-lang="ru">
                        <img src="<?php echo e(URL::asset ('/assets/images/flags/russia.jpg')); ?>" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                    </a>
                </div>
            </div>

            <!-- <div class="dropdown d-none d-lg-inline-block ms-1">
            <button type="button" class="btn header-item noti-icon waves-effect"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-customize"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <div class="px-lg-2">
                    <div class="row g-0">
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="<?php echo e(URL::asset ('/assets/images/brands/github.png')); ?>" alt="Github">
                                <span>GitHub</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="<?php echo e(URL::asset ('/assets/images/brands/bitbucket.png')); ?>" alt="bitbucket">
                                <span>Bitbucket</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="<?php echo e(URL::asset ('/assets/images/brands/dribbble.png')); ?>" alt="dribbble">
                                <span>Dribbble</span>
                            </a>
                        </div>
                    </div>

                    <div class="row g-0">
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="<?php echo e(URL::asset ('/assets/images/brands/dropbox.png')); ?>" alt="dropbox">
                                <span>Dropbox</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="<?php echo e(URL::asset ('/assets/images/brands/mail_chimp.png')); ?>" alt="mail_chimp">
                                <span>Mail Chimp</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="<?php echo e(URL::asset ('/assets/images/brands/slack.png')); ?>" alt="slack">
                                <span>Slack</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell bx-tada"></i>
                    <span class="badge bg-danger rounded-pill"><?php echo e(auth()->user()->unreadNotifications -> count()); ?></span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0" key="t-notifications"> <?php echo app('translator')->get('translation.Notifications'); ?> </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small" key="t-view-all"> <?php echo app('translator')->get('translation.View_All'); ?></a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="bx bx-cart"></i>
                                    </span>
                                </div>
                                <?php $__empty_1 = true; $__currentLoopData = auth()->user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1 text-danger" key="t-your-order">New Notification</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-grammer"> <?php echo e($notification->data['Name']); ?></p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago"><?php echo e($notification->created_at); ?></span></p>

                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1" key="t-your-order">No New Notification</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-grammer">No New Notification</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">Now</span></p>
                                    </div>
                                </div>
                                <?php endif; ?>

                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more"><?php echo app('translator')->get('translation.View_More'); ?></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="<?php echo e(asset('/uploads/User/Profiles/'.Auth::user() -> Profile)); ?>" alt="Profile">
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry"><?php echo e(ucfirst(Auth::user()->FullName)); ?> </span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="<?php echo e(route('ProfileUser', ['data' => Auth::user()->id])); ?>"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile"><?php echo app('translator')->get('translation.Profile'); ?></span></a>
                    <a class="dropdown-item" href="<?php echo e(route('ProfileUser', ['data' => Auth::user()->id])); ?>"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Change Password</span></a>
                    <?php if(\Cookie::get('Layout') == 'LayoutNoSidebar'): ?>
                    <a class="dropdown-item" href="<?php echo e(route('LayoutSidebar')); ?>"><i class="bx bx-layout font-size-16 align-middle me-1"></i> <span key="t-profile">Change Layout</span></a>
                    <?php endif; ?>
                    <?php if(\Cookie::get('Layout') == 'LayoutSidebar'): ?>
                    <a class="dropdown-item" href="<?php echo e(route('LayoutNoSidebar')); ?>"><i class="bx bx-layout font-size-16 align-middle me-1"></i> <span key="t-profile">Change Layout</span></a>
                    <?php endif; ?>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout"><?php echo app('translator')->get('translation.Logout'); ?></span></a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </div>
            <?php endif; ?>

        </div>
    </div>
</header><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/Layouts/topbar.blade.php ENDPATH**/ ?>