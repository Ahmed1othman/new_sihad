<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">

            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>

            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center">


                    <li class="nav-item dropdown dropdown-large">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php if(App()->getLocale() =='ar'): ?>
                                <i class="flag-icon flag-icon-eg"></i>
                            <?php else: ?>
                                <i class="flag-icon flag-icon-us"></i>
                            <?php endif; ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><a
                                    rel="alternate" hreflang="<?php echo e($localeCode); ?>"
                                    href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                    <div class="msg-header"> <?php echo e($properties['native']); ?>

                                        <p class="msg-header-title ms-auto">
                                            <p class="msg-header-clear ms-auto">
                                                <?php if($localeCode == 'ar'): ?>
                                                    <i class="flag-icon flag-icon-eg"></i>
                                                <?php else: ?>
                                                    <i class="flag-icon flag-icon-us"></i>
                                                <?php endif; ?>
                                            </p>
                                        </p>

                                    </div>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <div class="header-notifications-list">

                            </div>

                        </div>
                    </li>


                    <li class="nav-item dropdown dropdown-large">

                        <div class="dropdown-menu dropdown-menu-end">

                            <div class="header-message-list">
                                
                            </div>

                        </div>
                    </li>


                </ul>
            </div>


            <div class="user-box dropdown">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo e(asset('admin_dashboard/assets/images/avatars/avatar-2.png')); ?>" class="user-img"
                        alt="user avatar">
                    <div class="user-info ps-3">
                        <p class="user-name mb-0"><?php echo e(auth()->user()->name); ?></p>
                        <p class="designattion mb-0"></p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li class="dropdown-item">
                        <a href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class='bx bx-log-out-circle'></i> <?php echo e(__('Log Out')); ?>

                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo e(csrf_field()); ?>

                        </form>
                    </li>

                    <li class="dropdown-item">
                        <a href="<?php echo e(route('home')); ?>">
                            <i class='bx bx-slideshow'></i> <?php echo e(__('admin/app.website_preview')); ?>

                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</header>
<?php /**PATH E:\new work\alaskar\resources\views/layouts/admin/navbar.blade.php ENDPATH**/ ?>