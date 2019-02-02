<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <form action="/admin/languages/<?php echo e($data->id); ?>" method="post" class="col-md-4">
                    <?php echo e(csrf_field()); ?>

                    <?php echo method_field("PUT"); ?>
                    <div class="form-group">
                        <?php echo '<div style="color: red;">'. $errors->first('name') . '</div>'; ?>
                        <label for="language" class="control-label">Language</label>
                        <input type="text" required name="name" placeholder="Language" class="form-control" id="language" value="<?php echo e($data->name); ?>" >
                    </div>
                    <div class="form-group">
                        <?php echo '<div style="color: red;">'. $errors->first('code') . '</div>'; ?>
                        <label for="code" class="control-label">Code</label>
                        <input type="text" name="code" placeholder="Code" class="form-control" id="code" value="<?php echo e($data->code); ?>" >
                    </div>
                    <div class="form-group">
                        <?php echo '<div style="color: red;">'. $errors->first('default') . '</div>'; ?>
                        <label for="default" class="control-label">Default</label>
                        <input type="number" name="default" placeholder="default" class="form-control" id="default" value="<?php echo e($data->default); ?>" >
                    </div>
                    <div class="form-group" style="text-align: right">
                        <input type="submit" required class="btn btn-success" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>