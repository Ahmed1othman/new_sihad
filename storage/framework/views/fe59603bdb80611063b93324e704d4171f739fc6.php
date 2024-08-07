<?php $__env->startSection('content'); ?>
    <!-- Main Banner -->
    <div class="main-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-text">
                        <span><?php echo e(websiteInfo_hlp('header_first_title_'.app()->getLocale())); ?></span>
                        <h1><?php echo e(websiteInfo_hlp('header_second_title_'.app()->getLocale())); ?></h1>
                        <p>
                            <?php echo e(websiteInfo_hlp('header_pragraph_'.app()->getLocale())); ?>

                        </p>

                        <div class="banner-btn">
                            <a href="<?php echo e(route('contactus')); ?>" class="default-btn"><?php echo e(__('site/app.contact_us')); ?></a>
                            <a href="<?php echo e(route('aboutus')); ?>" class="default-btn active"><?php echo e(__('site/app.about_us')); ?></a>
                            <a href="<?php echo e(route('offer-price')); ?>" class="default-btn active"><?php echo e(__('site/app.offer-price')); ?></a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="banner-img">
                       <img src="<?php echo e(asset('storage/front/'.websiteInfo_hlp('header_image'))); ?>" style="width: 650px;height: 600px; border-radius: 50%"alt="Banner Images">
                    </div>
                </div>
                <div class="banner-shape-1">
                   <img src="<?php echo e(asset('website1/img/shape/home1.png')); ?>" alt="Banner Shape">
                </div>
            </div>
        </div>
        <div class="home-shape">
            <div class="shape1">
               <img src="<?php echo e(asset('website1/img/shape/1.png')); ?>" alt="shape">
            </div>
            <div class="shape2">
               <img src="<?php echo e(asset('website1/img/shape/2.png')); ?>" alt="shape">
            </div>
            <div class="shape3">
               <img src="<?php echo e(asset('website1/img/shape/3.png')); ?>" alt="shape">
            </div>
            <div class="shape4">
               <img src="<?php echo e(asset('website1/img/shape/4.png')); ?>" alt="shape">
            </div>
            <div class="shape5">
               <img src="<?php echo e(asset('website1/img/shape/5.png')); ?>" alt="shape">
            </div>
            <div class="shape6">
               <img src="<?php echo e(asset('website1/img/shape/6.png')); ?>" alt="shape">
            </div>
            <div class="shape7">
               <img src="<?php echo e(asset('website1/img/shape/3.png')); ?>" alt="shape">
            </div>
        </div>
    </div>
    <!-- Main Banner End -->

    

    <!-- About Area -->
    <div id="About_Us <?php echo e(showSection_hlp('about_us')); ?>" class="about-area brand-bg pt-100 pb-70">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xxl-6 ps-0">
                    <div class="about-img">
                       <img src="<?php echo e(asset('storage/front/'.websiteInfo_hlp('about_image'))); ?>" alt="About Images">
                    </div>
                </div>

                <div class="col-lg-7 col-xxl-6">
                    <div class="about-content about-width">
                        <span><?php echo e(__('site/app.about_us')); ?></span>
                        <h2><?php echo e(websiteInfo_hlp('about_title_'.app()->getLocale())); ?></h2>
                        <div>
                            <?php echo e(\Illuminate\Support\Str::limit(websiteInfo_hlp('about_pragraph_'.app()->getLocale()),1000,"...")); ?>

                        </div>
                        <div class="about-btn">
                            <a href="#" class="default-btn"><?php echo e(__('site/app.Know More')); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape">
           <img src="<?php echo e(asset('website1/img/shape/right-side.png')); ?>" alt="Shape Images">
        </div>
    </div>
    <!-- About Area End -->

    <!-- Service Area -->
    <section class="service-area pb-70 pt-70 <?php echo e(showSection_hlp('services')); ?>">
        <div class="container">
            <div class="section-title text-center">
                <span><?php echo e(__('site/app.our_services')); ?></span>
                <h2><?php echo e(websiteInfo_hlp('service_title_'.app()->getLocale())); ?></h2>
                <p>
                    <?php echo e(\Illuminate\Support\Str::limit(websiteInfo_hlp('service_pragraph_'.app()->getLocale()),1000,"...")); ?>

                </p>
            </div>
            <div class="row pt-45">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-card">
                        <a href="<?php echo e(route('service.details',$service->id)); ?>">
                           <img src="<?php echo e(asset($service->image)); ?>" alt="Images" style="max-height: 150px; max-width: 150px; border-radius: 10%">
                        </a>
                        <a href="<?php echo e(route('service.details',$service->id)); ?>">
                            <h3><?php echo e($service->title); ?></h3>
                        </a>
                        <p>
                            <?php echo e(Str::limit($service->notes,200,'...')); ?>

                        </p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </section>
    <!-- Service Area End -->

    <!-- projects Area -->
    <section class="portfolio-area pt-100 pb-70 <?php echo e(showSection_hlp('projects')); ?>">
        <div class="container">
            <div class="section-title text-center">
                <span><?php echo e(__('site/app.projects')); ?></span>
                <h2><?php echo e(websiteInfo_hlp('project_title_'.app()->getLocale())); ?></h2>
                <p>
                    <?php echo e(websiteInfo_hlp('service_pragraph_'.app()->getLocale())); ?>

                </p>
            </div>
            <div class="portfolio-slider pt-45 owl-carousel owl-rtl owl-theme">
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <a href="<?php echo e(route('project.details',$project->id)); ?>" >
                           <img src="<?php echo e(asset($project->image)); ?>" style="width: 510px;height: 445px;" alt="Portfolio Images">
                        </a>
                        <div class="portfolio-tag">
                            <a href="<?php echo e(route('project.details',$project->id)); ?>"><span><?php echo e(__('site/app.read_more')); ?></span></a>
                        </div>
                        <div class="portfolio-content">
                            <a href="<?php echo e(route('project.details',$project->id)); ?>"><h3><?php echo e($project->title); ?></h3></a>
                            <i class='bx bxs-chevron-right'></i>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!-- projects Area End -->

    <!-- Submission Area -->
    <div class="submission-area ptb-100 <?php echo e(showSection_hlp('subscritoin')); ?>">
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

    <!-- Counter Area -->
    <div class="counter-area pt-100 pb-70 <?php echo e(showSection_hlp('statistics')); ?>">
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

    <!-- Testimonial Area -->
    <div class="testimonial-area pt-100 pb-70 <?php echo e(showSection_hlp('testimonials')); ?>">
        <div class="container-fluid">
            <div class="section-title text-center">
                <span><?php echo e(trans('site/app.our_clients_feedback')); ?></span>
                <h2><?php echo e(websiteInfo_hlp('testimonial_title_'.app()->getLocale())); ?>

                </h2>
                <p>
                    <?php echo e(websiteInfo_hlp('testimonial_pragraph_'.app()->getLocale())); ?>

                </p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-7 col-xxl-6">
                    <div class="testimonial-slider">
                        <div class="testimonial-icon">
                            <i class='bx bxs-quote-alt-right'></i>
                        </div>

                        <div class="testimonial-item-slider owl-carousel owl-theme">
                            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="testimonial-item">
                                <div class="testimonial-item-img">
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

                <div class="col-lg-5 col-xxl-6">
                    <div class="testimonial-img">
                       <img src="<?php echo e(asset('website1/img/testimonial/1.png')); ?>" alt="Testimonial Images">
                    </div>
                </div>
            </div>
        </div>

        <div class="shape-left">
           <img src="<?php echo e(asset('website1/img/testimonial/shape-left.png')); ?>" alt="Images">
        </div>
        <div class="shape-right">
           <img src="<?php echo e(asset('website1/img/testimonial/shape-right.png')); ?>" alt="Images">
        </div>
    </div>
    <!-- Testimonial Area End -->

    <!-- Blog Area -->
    <div class="blog-area pb-70 <?php echo e(showSection_hlp('news')); ?>">
        <div class="container">
            <div class="section-title text-center">
                <span><?php echo e(trans('site/app.our_news_offers')); ?></span>
                <h2><?php echo e(websiteInfo_hlp('news_posts_title_'.app()->getLocale())); ?></h2>
                <p>
                    <?php echo e(websiteInfo_hlp('news_posts_pragraph_'.app()->getLocale())); ?>

                </p>
            </div>
            <div class="row pt-45">
                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                               <img src="<?php echo e(asset($new->image)); ?>" alt="Blog Images" style="height: 415px; width: 510px">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-tag">
                                <a href="#"><span><?php echo e($new->tags); ?></span></a>
                            </div>
                            <a href="blog-details.html">
                                <h3><?php echo e($new->title); ?></h3>
                            </a>
                            <a href="blog-details.html" class="read-btn"><?php echo e(__('site/app.read_more')); ?></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->

    <!-- Footer Area -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website1.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\new work\alaskar\resources\views/website1/index.blade.php ENDPATH**/ ?>