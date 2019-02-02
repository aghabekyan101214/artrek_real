<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <form action="/admin/images/<?php echo e($data->id); ?>" method="post" enctype="multipart/form-data" class="col-md-6 uploader">
                    <?php echo e(csrf_field()); ?>

                    <?php echo method_field("PUT"); ?>
                    <div class="form-group" style="">
                        <?php echo '<div style="color: red;">'. $errors->first('files') . '</div>'; ?>
                        <label for="pic" class="control-label">Picture</label>
                        <div style="height: 150px; width: 100%; text-align: center" class="img_choose_div">
                            <img class="img-responsive" height="150px" onclick="admin.chooseImage(this)" src="<?php echo e(asset( $data->img )); ?>" alt="">
                            <input type="hidden" name="img" placeholder="Picture" class="form-control" id="pic" value="<?php echo e($data->img); ?>" >
                        </div>
                    </div>
                    <div class="form-group" style="text-align: right; margin-top: 10px;">
                        <input type="submit" class="btn btn-success" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>