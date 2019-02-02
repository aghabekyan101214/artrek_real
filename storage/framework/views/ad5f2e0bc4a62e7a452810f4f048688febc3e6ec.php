;
<?php $__env->startSection('content'); ?>
    <style>
        .mycont .container .row{
            text-align: center;
            color: black;
        }


    </style>
    <div class="col-md-12 mycont">
        <div class="container">
            <div class="row">
                <img src='<?php echo e(asset("$data->image")); ?>' style="height: 600px; width: 100%" alt="">
            </div>
            <div class="row" style="margin-top: 10px;">
                <h2><?php echo e($data->header); ?></h2>
            </div>
            <div class="row" style="margin-top: 10px;">
                <?php echo $data->text; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site_layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>