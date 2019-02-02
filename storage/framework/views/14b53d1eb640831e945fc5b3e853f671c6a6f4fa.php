<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <form action="/admin/categories/<?php echo e($data->id); ?>" method="post" class="col-md-4">
                    <?php echo e(csrf_field()); ?>

                    <?php echo method_field("PUT"); ?>
                    <div class="form-group">
                        <?php echo '<div style="color: red;">'. $errors->first('name') . '</div>'; ?>
                        <label for="name" class="control-label">Category</label>
                        <input type="text" required name="name" placeholder="Category" class="form-control" id="name" value="<?php echo e($data->name); ?>" >
                    </div>
                    <div class="form-group" style="text-align: right">
                        <input type="submit" class="btn btn-success" value="Store">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>