
<?php $__env->startSection('title'); ?>
<?php echo e(__('admin/app.create_navbar')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="page-wrapper">
    <div class="page-content">
        <?php echo $__env->make('message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card">

            <div class="card-body">

                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form class="kt-form" id="kt_form" method="post" action="<?php echo e(route('info.update',[$row->id])); ?>"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id" id="id" value="<?php echo e($row->id); ?>">
                    <div class="row">
                        <div class="col-xl-2">
                            <div class="form-group">
                                <label><?php echo e(__('admin/app.'.$row->option)); ?></label>
                                <input type="hidden" name="option" value="<?php echo e($row->option); ?>">
                            </div>
                        </div>
                        <?php if($row->type=='image'): ?>
                        <div class="col-xl-2">
                            <div class="form-group">
                                <?php if(!empty($row->value)): ?>
                                <img style="height: 100px;width: 120px;"
                                    src="<?php echo e(asset('storage/front/'.$row->value )); ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group">
                                <input type="file" class="form-control" name="value" accept="image/*">
                            </div>
                        </div>
                        <?php elseif($row->type=='string'): ?>
                        <div class="col-xl-8">
                            <div class="form-group">
                                <input type="text" class="form-control" name="value" required
                                    placeholder="<?php echo e(__('admin/app.'.$row->option)); ?>"
                                    value="<?php echo e(old('value', $row->value  )); ?>">
                            </div>
                        </div>
                        <?php elseif($row->type=='pdf'): ?>
                        <div class="col-xl-8">
                            <div class="form-group">
                                <input type="file" class="form-control" name="value" accept="application/pdf">
                            </div>
                        </div>
                        <?php elseif($row->type=='number'): ?>
                        <div class="col-xl-4">
                            <div class="form-group">
                                <input type="number" class="form-control" name="value" required
                                placeholder="<?php echo e(__('admin/app.'.$row->option)); ?>"
                                value="<?php echo e(old('value', $row->value)); ?>">
                            </div>
                        </div>

                        <?php elseif($row->type=='color'): ?>
                            <div class="col-xl-8">
                                <div class="form-group">
                                    <input type="text" class="coloris form-control" name="value" value="<?php echo e(old('value',$row->value)); ?>" data-coloris style="text-align: left"/>
                                </div>
                            </div>
                        <?php elseif($row->type=='checkbox'&&$row->option == 'show_logo'): ?>
                            <div class="col-xl-8">
                                <div class="form-group">
                                    <input class="form-check-input" name="show_logo" value="1" type="checkbox"
                                           id="flexSwitchCheckChecked" <?php echo e($row->value == true ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="flexSwitchCheckChecked"><?php echo e(__('admin/app.show_logo')); ?></label>
                                </div>
                            </div>



                        <?php elseif($row->type=='text'): ?>
                        <div class="col-xl-8">
                            <div class="form-group">
                                <textarea id="<?php echo e($row->option); ?>" name="value" class="form-control" rows="6" placeholder="<?php echo e(__('admin/app.about_us')); ?>"><?php echo e($row->value); ?></textarea>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="col-xl-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-warning"><?php echo e(__('admin/app.update')); ?></button>
                            </div>
                        </div>
                    </div>

                </form>
                <hr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        Coloris({
            el: '.coloris',
            format: 'hex',
            themeMode: 'light', // light, dark, auto
            content:'div',
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\new work\alaskar\resources\views/admin/info/index.blade.php ENDPATH**/ ?>