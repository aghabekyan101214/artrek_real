<?php isset($data->services) ? $services = unserialize($data->services) : '' ; ?>

<?php $__env->startSection('content'); ?>
    <style>
        .myRow .col-md-4{
            text-align: center;
        }
        .myRow .col-md-4 input{
            text-align: center;
            margin-top: 10px;
        }

        .cursor{
            cursor: pointer;
        }

    </style>
<div class="col-md-12">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="/admin/general/<?php if(isset($data->id)): ?><?php echo e($data->id); ?> <?php endif; ?>" method="post" class="col-md-12">
                    <?php if(isset($data->id)): ?>
                        <?php echo method_field("PUT"); ?>
                    <?php endif; ?>
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group" style="text-align: center">
                        <img onclick="admin.chooseImage(this)" class="img-responsive cursor" height="200px" src="<?php if(isset($data->image) && $data->image != '-'): ?> <?php echo e(asset($data->image)); ?> <?php else: ?> <?php echo e(asset('public/images.png')); ?> <?php endif; ?>" alt="">
                        <input type="hidden" name="image" value="<?php if(isset($data->image)): ?> <?php echo e(asset($data->image)); ?> <?php endif; ?>">
                    </div>
                    <div class="row myRow">
                        <div class="col-md-4">
                            <label for="" class="label label-default">Ծառայություն 1</label>
                            <input type="text" class="form-control" name="service[0]" value="<?php if(isset($services[0])): ?> <?php echo e($services[0]); ?> <?php endif; ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="label label-default">Ծառայություն 2</label>
                            <input type="text" class="form-control" name="service[1]" value="<?php if(isset($services[1])): ?> <?php echo e($services[1]); ?> <?php endif; ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="label label-default">Ծառայություն 3</label>
                            <input type="text" class="form-control" name="service[2]" value="<?php if(isset($services[2])): ?> <?php echo e($services[2]); ?> <?php endif; ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="label label-default">Ծառայություն 4</label>
                            <input type="text" class="form-control" name="service[3]" value="<?php if(isset($services[3])): ?> <?php echo e($services[3]); ?> <?php endif; ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="label label-default">Ծառայություն 5</label>
                            <input type="text" class="form-control" name="service[4]" value="<?php if(isset($services[4])): ?> <?php echo e($services[4]); ?> <?php endif; ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="label label-default">Ծառայություն 6</label>
                            <input type="text" class="form-control" name="service[5]" value="<?php if(isset($services[5])): ?> <?php echo e($services[5]); ?> <?php endif; ?>" required>
                        </div>
                        <div class="form-group col-md-12 mt-10" >
                            <input type="submit" class="btn btn-success right-float" value="Պահպանել">
                        </div>
                    </div>
                </form>
                <br>
                <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>