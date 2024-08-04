<?php if(app()->getLocale() == 'en'): ?>
    <!-- Jquery Min JS -->
    <script src="<?php echo e(asset('website1/ltr/js/jquery-3.5.0.min.js')); ?>"></script>
    <!-- Bootstrap Bundle Min JS -->
    <script src="<?php echo e(asset('website1/ltr/js/bootstrap.bundle.min.js')); ?>"></script>
    <!-- Meanmenu JS -->
    <script src="<?php echo e(asset('website1/ltr/js/meanmenu.min.js')); ?>"></script>
    <!-- Owl Carousel JS -->
    <script src="<?php echo e(asset('website1/ltr/js/owl.carousel.min.js')); ?>"></script>
    <!-- Magnific Popup JS -->
    <script src="<?php echo e(asset('website1/ltr/js/jquery.magnific-popup.min.js')); ?>"></script>
    <!-- Wow JS -->
    <script src="<?php echo e(asset('website1/ltr/js/wow.min.js')); ?>"></script>
    <!-- Ajaxchimp Min JS -->
    <script src="<?php echo e(asset('website1/ltr/js/jquery.ajaxchimp.min.js')); ?>"></script>
    <!-- Form Validator Min JS -->
    <script src="<?php echo e(asset('website1/ltr/js/form-validator.min.js')); ?>"></script>
    <!-- Contact Form JS -->
    <script src="<?php echo e(asset('website1/ltr/js/contact-form-script.js')); ?>"></script>
    <!-- Custom JS -->
    <script src="<?php echo e(asset('website1/ltr/js/custom.js')); ?>"></script>
<?php else: ?>
    <!-- Jquery Min JS -->
    <script src="<?php echo e(asset('website1/rtl/js/jquery-3.5.0.min.js')); ?>"></script>
    <!-- Bootstrap Bundle Min JS -->
    <script src="<?php echo e(asset('website1/rtl/js/bootstrap.bundle.min.js')); ?>"></script>
    <!-- Meanmenu JS -->
    <script src="<?php echo e(asset('website1/rtl/js/meanmenu.min.js')); ?>"></script>
    <!-- Owl Carousel JS -->
    <script src="<?php echo e(asset('website1/rtl/js/owl.carousel.min.js')); ?>"></script>
    <!-- Magnific Popup JS -->
    <script src="<?php echo e(asset('website1/rtl/js/jquery.magnific-popup.min.js')); ?>"></script>
    <!-- Wow JS -->
    <script src="<?php echo e(asset('website1/rtl/js/wow.min.js')); ?>"></script>
    <!-- Ajaxchimp Min JS -->
    <script src="<?php echo e(asset('website1/rtl/js/jquery.ajaxchimp.min.js')); ?>"></script>
    <!-- Form Validator Min JS -->
    <script src="<?php echo e(asset('website1/rtl/js/form-validator.min.js')); ?>"></script>
    <!-- Contact Form JS -->
    <script src="<?php echo e(asset('website1/rtl/js/contact-form-script.js')); ?>"></script>
    <!-- Custom JS -->
    <script src="<?php echo e(asset('website1/rtl/js/custom.js')); ?>"></script>

<?php endif; ?>

<script src="<?php echo e(asset('admin_dashboard/assets/plugins/notifications/js/lobibox.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_dashboard/assets/plugins/notifications/js/notifications.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_dashboard/assets/plugins/notifications/js/notification-custom-script.js')); ?>"></script>
<script>
    var app_url = "<?php echo e(url('/')); ?>";
    var lang = "<?php echo e(app()->getLocale()); ?>";
</script>
<script src="<?php echo e(asset('website/js/front.js')); ?>"></script>
<?php echo $__env->yieldContent('js'); ?>
<?php /**PATH E:\new work\alaskar\resources\views/layouts/website1/footer-script.blade.php ENDPATH**/ ?>