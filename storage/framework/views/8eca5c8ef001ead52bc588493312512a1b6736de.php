<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="<?php echo e(asset('storage/front/' . websiteInfo_hlp('logo'))); ?>" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text"><?php echo e(websiteInfo_hlp('website_name')); ?></h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title"> <?php echo e(__('admin/app.homepage')); ?></div>
            </a>
            <ul>
                <li><a href="<?php echo e(route('admin')); ?>"><i class="bx bx-right-arrow-alt"></i> <?php echo e(__('admin/app.homepage')); ?></a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cog'></i>
                </div>
                <div class="menu-title"><?php echo e(__('admin/app.main_setting')); ?></div>
            </a>
            <ul>
                <li><a href="<?php echo e(route('Services.index')); ?>"><i class="bx bx-right-arrow-alt"></i><?php echo e(__('admin/app.services')); ?></a></li>

                <li><a href="<?php echo e(route('Testimonials.index')); ?>"><i class="bx bx-right-arrow-alt"></i><?php echo e(__('admin/app.testimonials')); ?></a></li>

                <li><a href="<?php echo e(route('features.index')); ?>"><i class="bx bx-right-arrow-alt"></i><?php echo e(__('admin/app.features')); ?></a></li>

                <li><a href="<?php echo e(route('AllOrders')); ?>"><i class="bx bx-right-arrow-alt"></i><?php echo e(__('admin/app.orders')); ?></a></li>

                <li><a href="<?php echo e(route('projects.index')); ?>"><i class="bx bx-right-arrow-alt"></i><?php echo e(__('admin/app.projects')); ?></a></li>

                <li><a href="<?php echo e(route('news.index')); ?>"><i class="bx bx-right-arrow-alt"></i><?php echo e(__('admin/app.news')); ?></a></li>

                <li><a href="<?php echo e(route('sliders.index')); ?>"><i class="bx bx-right-arrow-alt"></i><?php echo e(__('admin/app.sliders')); ?></a></li>

                <li><a href="<?php echo e(route('navbar.index')); ?>"><i class="bx bx-right-arrow-alt"></i><?php echo e(__('admin/app.navbar')); ?></a></li>
                <li><a href="<?php echo e(route('subscription.index')); ?>"><i class="bx bx-right-arrow-alt"></i><?php echo e(__('admin/app.subscriptions')); ?></a></li>
                <li><a href="<?php echo e(route('contacts')); ?>"><i class="bx bx-right-arrow-alt"></i><?php echo e(__('admin/app.contacts')); ?></a></li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-info-circle'></i>
                </div>
                <div class="menu-title"><?php echo e(__('admin/app.website_info')); ?></div>
            </a>
            <ul>

                <li><a href="<?php echo e(route('info.index')); ?>"><i class="bx bx-right-arrow-alt"></i><?php echo e(__('admin/app.website_info')); ?></a></li>
                <li><a href="<?php echo e(route('slider-option')); ?>"><i class="bx bx-right-arrow-alt"></i><?php echo e(__('admin/app.slider-option')); ?></a></li>
                <li><a href="<?php echo e(route('front-sections.index')); ?>"><i class="bx bx-right-arrow-alt"></i><?php echo e(__('admin/app.control_front')); ?> </a></li>
            </ul>
        </li>


        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-info-square'></i>
                </div>
                <div class="menu-title"><?php echo e(__('admin/app.archive')); ?></div>
            </a>
            <ul>

                <li><a href="<?php echo e(route('services-deleted')); ?>"><i class="bx bx-right-arrow-alt"></i><?php echo e(__('admin/app.services')); ?></a></li>

                <li><a href="<?php echo e(route('feature-deleted')); ?>"><i class="bx bx-right-arrow-alt"></i><?php echo e(__('admin/app.features')); ?></a></li>

                <li><a href="<?php echo e(route('project-deleted')); ?>"><i class="bx bx-right-arrow-alt"></i><?php echo e(__('admin/app.projects')); ?></a></li>

                <li><a href="<?php echo e(route('news-deleted')); ?>"><i class="bx bx-right-arrow-alt"></i><?php echo e(__('admin/app.news')); ?></a></li>

            </ul>
        </li>




    </ul>

</div>
<?php /**PATH E:\new work\alaskar\resources\views/layouts/admin/sidebar.blade.php ENDPATH**/ ?>