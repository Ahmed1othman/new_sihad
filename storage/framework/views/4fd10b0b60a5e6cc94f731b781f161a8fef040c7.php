<!DOCTYPE html>
<html dir="<?php echo e(app()->getLocale() == 'ar' ? 'rtl' : 'ltr'); ?>" lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="this my acount to my son" />
    <meta name="keywords" content="Html,css,utf,javascript" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <?php echo $__env->yieldContent('meta'); ?>

    <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(__('admin/app.dashboard')); ?></title>
    <?php echo $__env->make('layouts.admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body style="font-family: 'Cairo', sans-serif;">
<div class="wrapper">
    <!--sidebar wrapper -->
    <?php echo $__env->make('layouts.admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--end sidebar wrapper -->
    <!--start header -->
    <?php echo $__env->make('layouts.admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--end header -->
    <!--start page wrapper -->
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('layouts.admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>





    <?php echo $__env->make('layouts.admin.footer-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH E:\new work\alaskar\resources\views/layouts/admin/master.blade.php ENDPATH**/ ?>