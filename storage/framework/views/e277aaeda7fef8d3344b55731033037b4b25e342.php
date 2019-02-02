<?php $__env->startSection('content'); ?>
    <?php $dec_dat = json_decode($data->contact_phone, true); ?>
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <form action="/admin/restaurants/<?php echo e($data->id); ?>" method="post" class="col-md-4">
                    <?php echo e(csrf_field()); ?>

                    <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                        <?php echo '<div style="color: red;">'. $errors->first('phone') . '</div>'; ?>
                        <label for="phone" class="control-label">Phone</label>
                        <input type="text" required name="phone" placeholder="Phone" class="form-control" id="phone" value="<?php echo e($dec_dat['phone']); ?>" >
                    </div>
                    <div class="form-group">
                        <?php echo '<div style="color: red;">'. $errors->first('address') . '</div>'; ?>
                        <label for="address" class="control-label">Address</label>
                        <input type="text" name="address" placeholder="Address" class="form-control" id="address" value="<?php echo e($dec_dat['address']); ?>" >
                    </div>
                    <div class="form-group">
                        <?php echo '<div style="color: red;">'. $errors->first('order') . '</div>'; ?>
                        <label for="order" class="control-label">Order</label>
                        <input type="number" name="order" placeholder="Order" class="form-control" id="order" value="<?php echo e($data->order); ?>" >
                    </div>
                    <div class="form-group" style="text-align: right">
                        <input type="submit" required class="btn btn-success" value="Store">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>