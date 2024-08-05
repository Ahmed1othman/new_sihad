




<footer id="footer" class="footer-area bg-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-single">
                        <div class="footer-single-content">
                            <?php if(websiteInfo_hlp('logo_'.App::getLocale()) && websiteInfo_hlp('show_logo')): ?>
                                <img style="border-radius: 10%; max-width: 110px; max-height: 60px" src="<?php echo e(asset('storage/front/' . websiteInfo_hlp('logo_'.App::getLocale()))); ?>"
                                    alt="<?php echo e(websiteInfo_hlp('website_name_'.App::getLocale())); ?>">
                            <?php else: ?>
                                <div class="one">
                                    <h1><?php echo e(websiteInfo_hlp('website_name_'.App::getLocale())); ?></h1>
                                </div>
                            <?php endif; ?>
                            <p>
                                <?php echo e(websiteInfo_hlp('footer_pragraph_'.App::getLocale())); ?>

                            </p>
                        </div>

                        <div class="newsletter-area">
                            <form class="newsletter-form" data-toggle="validator" method="POST">
                                <input type="email" class="form-control" placeholder="<?php echo e(__('site/app.your_email')); ?>" name="email" required autocomplete="off">
                                <button  onclick="submitSubscription()" class="subscribe-btn" type="submit">
                                    <?php echo e(__('site/app.Subscribe')); ?>

                                </button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-list ml-50">
                        <h3><?php echo e(__('site/app.services')); ?></h3>
                        <ul>
                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <i class='bx bxs-chevron-right'></i>
                                    <a href="<?php echo e(route('service.details',$service->id)); ?>"><?php echo e($service->title); ?></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="footer-list">
                        <h3><?php echo e(__('site/app.Quick Links')); ?></h3>
                        <ul>
                            <?php $__currentLoopData = navbar_hlp(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="<?php echo e(route($item->route)); ?>">
                                    <?php echo e(__('site/app.'.$item->title)); ?>

                                </a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-list ml-20">
                        <h3><?php echo e(trans('site/app.contact_us')); ?></h3>
                        <ul>
                            <?php if(websiteInfo_hlp('phone')): ?>
                                <li>
                                    <i class='bx bxs-chevron-right'></i>
                                    <a href="tel:<?php echo e(websiteInfo_hlp('phone')); ?>"><?php echo e(websiteInfo_hlp('phone')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(websiteInfo_hlp('email')): ?>
                                <li>
                                    <i class='bx bxs-chevron-right'><?php echo e(websiteInfo_hlp('email')); ?></i>
                                    <a href="mailto:<?php echo e(websiteInfo_hlp('email')); ?>"></a>
                                </li>
                            <?php endif; ?>

                            <?php if(websiteInfo_hlp('address')): ?>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <?php echo e(websiteInfo_hlp('address')); ?>

                            </li>
                            <?php endif; ?>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="bottom-text text-center">
                        <p>
                            
                            <?php if(App::getLocale()=='en'): ?>
                Copyright @ <?php echo e(date('Y')); ?> For <span class="h5"><a href="<?php echo e(route('home')); ?>"><?php echo e(websiteInfo_hlp('website_name_en')); ?></a> </span>. All rights reserved.
                <?php else: ?>
                    جميع الحقوق محفوظة لـ <span class="h5"><a href="<?php echo e(route('home')); ?>"><?php echo e(websiteInfo_hlp('website_name_ar')); ?></a> </span> © <?php echo e(date('Y')); ?>

                <?php endif; ?>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH E:\new work\alaskar\resources\views/layouts/website1/footer.blade.php ENDPATH**/ ?>