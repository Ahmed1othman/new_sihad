<style>
    .one h1 {
        text-align: center;
        text-transform: uppercase;
        font-size: 26px;
        font-weight: bold;
        font-family: 'IBM Plex Sans Arabic', sans-serif;
        color: <?php echo e(websiteInfo_hlp('main_color')); ?>;
        width: 90%;
        display: inline-block;
        vertical-align: middle;
    }

    .fix-menu-desktop .wrap-menu-desktop{
        height: 100px;
    }

    .menu-desktop .main-menu>li {
        white-space: nowrap;
    }

</style>
<!-- Start Navbar Area -->
<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="<?php echo e(route('home')); ?>" class="logo">
            <?php if(websiteInfo_hlp('logo_'.App::getLocale()) && websiteInfo_hlp('show_logo')): ?>
                <img style="max-width: 110px; max-height: 60px; border-radius: 10%" src="<?php echo e(asset('storage/front/' . websiteInfo_hlp('logo_'.App::getLocale()))); ?>"
                     alt="<?php echo e(websiteInfo_hlp('website_name_'.App::getLocale())); ?>">
            <?php else: ?>
                <div class="one">
                    <h1><?php echo e(websiteInfo_hlp('website_name_'.App::getLocale())); ?></h1>
                </div>
            <?php endif; ?>
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav top-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                    <?php if(websiteInfo_hlp('logo_'.App::getLocale()) && websiteInfo_hlp('show_logo')): ?>
                        <img style="max-width: 110px; max-height: 60px;border-radius: 10%" src="<?php echo e(asset('storage/front/' . websiteInfo_hlp('logo_'.App::getLocale()))); ?>"
                             alt="<?php echo e(websiteInfo_hlp('website_name_'.App::getLocale())); ?>" >
                    <?php else: ?>

                        <div class="one">
                            <h1><?php echo e(websiteInfo_hlp('website_name_'.App::getLocale())); ?></h1>
                        </div>
                    <?php endif; ?>
                </a>
                <a class="navbar-brand-sticky" href="<?php echo e(route('home')); ?>">
                    <?php if(websiteInfo_hlp('logo_'.App::getLocale()) && websiteInfo_hlp('show_logo')): ?>
                        <img style="max-width: 110px; max-height: 60px;border-radius: 10%" src="<?php echo e(asset('storage/front/' . websiteInfo_hlp('logo_'.App::getLocale()))); ?>"
                             alt="<?php echo e(websiteInfo_hlp('website_name_'.App::getLocale())); ?>" >
                    <?php else: ?>

                        <div class="one">
                            <h1 style="color: <?php echo e(websiteInfo_hlp('secondary_font_color')); ?>;"><?php echo e(websiteInfo_hlp('website_name_'.App::getLocale())); ?></h1>
                        </div>
                    <?php endif; ?>
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <?php $__currentLoopData = navbar_hlp(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="nav-item">
                                <a href="<?php echo e(route($item->route)); ?>" class="nav-link">
                                    <?php echo e(__('site/app.'.$item->title)); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <li class="nav-item">
                            <a href="#">
                                <?php echo e(trans('admin/news.lang')); ?>

                                <i class='bx bxs-chevron-right'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                            <?php echo e($properties['native']); ?>

                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                    </ul>

                    <div class="menu-btn">
                        <a href="<?php echo e(route('contactus')); ?>" class="seo-btn"><?php echo e(__('site/app.contact_us')); ?></a>
                    </div>

                    <?php if(auth()->check()): ?>
                        <div class="menu-btn me-2">
                            <a href="<?php echo e(route('admin')); ?>" class="seo-btn"><?php echo e(__('site/app.dashboard')); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
<?php /**PATH E:\new work\alaskar\resources\views/layouts/website1/navbar.blade.php ENDPATH**/ ?>