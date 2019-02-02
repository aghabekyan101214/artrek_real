<?php $__env->startSection('content'); ?>
    <style>
        .bg_div {
            position: relative;
            background-size: cover;
            background-position: center center;
            min-height: 600px;
            padding: 0;
        }

        .background-fix {
            background-color: #00000063;
        }

        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .flow-right, .flow-right .col-md-12{
            padding: 0!important;
        }

        .service_div i{
          color: black;
        }

        .service_div{
          border-bottom: 1px solid white;
        }

    </style>
    <?php $services = unserialize($data['home'][0]->services); ?>
    <div class="col-md-12 bg_div"
         style="height: 100vh; background-image:url('<?php echo e(url('public/bg.jpg')); ?> '); position: relative; ">
        <div class="background-fix"></div>
        <div class="flow-right col-md-2" style="float: right; position: relative; top: 100px; display: flex; flex-direction: column; justify-content: space-around; height:calc(100% - 100px);">
          <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bin => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-12 service_div">
                <i><?php echo e($bin + 1); ?>. <?php echo e($service); ?></i>
              </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site_layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>