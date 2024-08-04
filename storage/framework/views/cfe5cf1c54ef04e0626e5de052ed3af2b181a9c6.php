<?php $__env->startSection('title'); ?>
    <?php echo e(__('site/app.about_us')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <!-- Inner Banner -->
        <div class="inner-banner" style="background-image: url(<?php echo e(asset('storage/front/'.websiteInfo_hlp('about_background_image'))); ?>);">
            <div class="container">
                <div class="inner-title text-center">
                    <h3><?php echo e(__('site/app.about_us')); ?></h3>
                    <ul>
                        <li>
                            <a href="<?php echo e(route('home')); ?>"><?php echo e(__('site/app.home')); ?></a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-left'></i>
                        </li>
                        <li><?php echo e(__('site/app.about_us')); ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- About Area -->
        <div class="about-area about-max pt-100 pb-70">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-xxl-6">
                        <div class="about-img about-ml">
                            <img src="<?php echo e(asset('storage/front/'.websiteInfo_hlp('about_image'))); ?>" alt="About Images">
                        </div>
                    </div>

                    <div class="col-lg-7 col-xxl-6">
                        <div class="about-content about-width">
                            <span><?php echo e(__('site/app.about_us')); ?></span>
                            <h2><?php echo e(websiteInfo_hlp('about_title_'.App::getLocale())); ?></h2>
                            <p>
                                <?php echo e(websiteInfo_hlp('about_pragraph_'.App::getLocale())); ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End -->


        <?php if(websiteInfo_hlp('portfolio_pdf')): ?>
            <hr>
            <div class="text-center">

                <a href="<?php echo e(asset('storage/front/'.websiteInfo_hlp('portfolio_pdf'))); ?>" target="_blank" class="default-btn" style="color: white; width: 40%"><?php echo e(__('site/app.download_our_cv')); ?> <i class="fa fa-download"></i></a>
            </div>

            <hr>
        <?php endif; ?>

        <!-- Counter Area -->
        <div class="counter-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <?php if(websiteInfo_hlp('experiance_years')): ?>
                        <div class="col-lg-3 col-sm-6 col-md-3">
                            <div class="single-counter">
                                <i class='flaticon-success'></i>
                                <h3><span class="counter"><?php echo e(websiteInfo_hlp('experiance_years')); ?></span>+</h3>
                                <p><?php echo e(trans('site/app.experiance_years')); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(websiteInfo_hlp('projects_number')): ?>
                        <div class="col-lg-3 col-sm-6 col-md-3">
                            <div class="single-counter">
                                <i class='flaticon-launch'></i>
                                <h3><span class="counter"><?php echo e(websiteInfo_hlp('projects_number')); ?></span>+</h3>
                                <p><?php echo e(trans('site/app.projects_number')); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(websiteInfo_hlp('clients_number')): ?>
                        <div class="col-lg-3 col-sm-6 col-md-3">
                            <div class="single-counter">
                                <i class='flaticon-customer'></i>
                                <h3><span class="counter"><?php echo e(websiteInfo_hlp('clients_number')); ?></span>+</h3>
                                <p><?php echo e(trans('site/app.clients_number')); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(websiteInfo_hlp('employees_number')): ?>
                        <div class="col-lg-3 col-sm-6 col-md-3">
                            <div class="single-counter">
                                <i class='flaticon-team-building'></i>
                                <h3><span class="counter"><?php echo e(websiteInfo_hlp('employees_number')); ?></span>+</h3>
                                <p><?php echo e(trans('site/app.employees_number')); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- Counter Area End -->

        <!-- Client Area -->
        <div class="client-area pt-100 pb-70">
            <div class="container-fluid p-0">
                <div class="scetion-title text-center">
                    <span><?php echo e(trans('site/app.our_clients_feedback')); ?></span>
                <h2><?php echo e(websiteInfo_hlp('testimonial_title_'.app()->getLocale())); ?></h2>
                    <p>
                        <?php echo e(websiteInfo_hlp('testimonial_pragraph_'.app()->getLocale())); ?>

                    </p>
                </div>

                <div class="client-slider owl-carousel owl-theme">
                    <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="client-item">
                            <div class="client-item-img">
                                <img src="<?php echo e(asset($testimonial->image)); ?>" style="width: 100px;height: 100px;" alt="Testimonial Images">
                            </div>
                            <h3><?php echo e($testimonial->name); ?></h3>
                            <p>
                                <?php echo e($testimonial->feedback); ?>

                            </p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <!-- Client Area End -->

            <!-- Submission Area -->
    <div class="submission-area ptb-100">
        <div class="container">
            <div class="submission-title">
                <h2><?php echo e(websiteInfo_hlp('subscribe_title_'.app()->getLocale())); ?></h2>
            </div>
            <form class="submission-form">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <input disabled type="text" class="form-control" id="website" placeholder="<?php echo e(__('site/app.enter_your_mail')); ?>">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-9">
                        <div class="form-group border-line">
                            <input type="text" class="form-control" name="email" id="subemail" placeholder="email@example.com" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 offset-md-5 offset-lg-0">
                        <button onclick="submitSubscription()" type="button" class="default-btn">
                            <?php echo e(__('site/app.Subscribe')); ?>

                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Submission Area End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website1.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\new work\alaskar\resources\views/website1/about-us.blade.php ENDPATH**/ ?>