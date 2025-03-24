<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active text-capitalize" aria-current="page"><?php echo e(str_replace('-', ' ', Request::path())); ?></li>
            </ol>
            <h6 class="font-weight-bolder mb-0 text-capitalize"><?php echo e(str_replace('-', ' ', Request::path())); ?></h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex justify-content-end" id="navbar">

            <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                </form>
                <?php if(Auth::user()->user_type == 'Super Admin' || Auth::user()->user_type == 'Demo'): ?><a class="dropdown-item" href="<?php echo e(url('dashboard/admin-profile ')); ?>">Profile<img style="margin-left:10px;" class="rounded-circle" src="<?php if(Auth::user()->image): ?> <?php echo e(asset('uploads/'.Auth::user()->image)); ?> <?php else: ?> <?php echo e(asset('assets/images/no-user.jpg')); ?> <?php endif; ?>" width="40px" height="40px"></a><?php endif; ?>

                <a onclick="document.getElementById('logout-form').submit()"  class="nav-link text-body font-weight-bold px-0 d-flex align-items-center">
                    <span style="width: 100px; align-items: center" class="d-sm-flex d-none"> <i style="color: dimgray;font-size:21px" class="fas fa-sign-out-alt"></i></span>

                </a>
            </li>


            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                </div>
                </a>
            </li>

                <li class="nav-item d-sm-none ps-3 d-flex align-items-center">
                    <a onclick="document.getElementById('logout-form').submit()"  class="nav-link text-body font-weight-bold px-0 d-flex align-items-center">
                        <span style="width: 30px; align-items: center" class="d-flex"><span style="margin-right:13px;font-size:18px"><i style="color: dimgray;font-size:21px" class="fas fa-sign-out-alt"></i></span>
                    </a>
                </li>
            <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                </a>
            </li>

            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar --><?php /**PATH /home4/khristian/copy-ai.surveysideadmin.com/resources/views/layouts/navbars/auth/nav.blade.php ENDPATH**/ ?>