
<?php $__env->startSection('title'); ?>
    <?php echo e(__('admin/app.homepage')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="page-wrapper">
    <div class="page-content">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-2 row-cols-xxl-4">
            <div class="col">
                <div class="card radius-10 bg-gradient-cosmic">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-0 text-white"><?php echo e(__('admin/app.total_services')); ?></p>
                                <h4 class="my-1 text-white"><?php echo e(\App\Models\Service::count()); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-ibiza">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-0 text-white"><?php echo e(__('admin/app.total_features')); ?></p>
                                <h4 class="my-1 text-white"><?php echo e(\App\Models\feature::count()); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-ohhappiness">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-0 text-white"><?php echo e(__('admin/app.total_contacts')); ?></p>
                                <h4 class="my-1 text-white"><?php echo e(\App\Models\ContactUs::count()); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-ohhappiness">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-0 text-white"><?php echo e(__('admin/app.total_subscriptions')); ?></p>
                                <h4 class="my-1 text-white"><?php echo e(\App\Models\Subscription::count()); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-ohhappiness">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-0 text-white"><?php echo e(__('admin/app.total_orders')); ?></p>
                                <h4 class="my-1 text-white"><?php echo e(\App\Models\order::count()); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-kyoto">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-0 text-dark"><?php echo e(__('admin/app.total_projects')); ?></p>
                                <h4 class="my-1 text-white"><?php echo e(\App\Models\project::count()); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-ohhappiness">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-0 text-white"><?php echo e(__('admin/app.total_news')); ?></p>
                                <h4 class="my-1 text-white"><?php echo e(\App\Models\news::count()); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-moonlit">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-0 text-white"><?php echo e(__('admin/app.total_visitors')); ?></p>
                                <h4 class="my-1 text-white"><?php echo e(\App\Models\visitor::sum('count')); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <h3>statistics</h3>
            <div class="center align-content-center center-block">
                <div id="chart-visitors">

                </div>
            </div>

        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('js'); ?>
    <script>
        var options = {
            series: [{
                name: "Visitors",
                data: <?php echo json_encode($visitors->pluck('views')->toArray(), 15, 512) ?>
            }],
            chart: {
                type: 'area',
                height: 400,
                width:"100%",
                zoom: {
                    enabled: false
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'straight'
            },

            title: {
                text: 'Analysis of Number Visitors per day',
                align: 'left'
            },
            subtitle: {
                text: 'last 30 days',
                align: 'left'
            },
            labels: <?php echo json_encode($visitors->pluck('day')->toArray(), 15, 512) ?>,
            xaxis: {
                type: 'datetime',
            },
            yaxis: {
                opposite: true
            },
            legend: {
                horizontalAlign: 'left'
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart-visitors"), options);
            chart.render();

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\new work\alaskar\resources\views/admin/index.blade.php ENDPATH**/ ?>