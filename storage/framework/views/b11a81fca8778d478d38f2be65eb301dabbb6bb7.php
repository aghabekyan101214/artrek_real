<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <form action="/admin/menus/<?php echo e($data['menus']->id); ?>" method="post" enctype="multipart/form-data" class="col-md-4">
                    <?php echo e(csrf_field()); ?>

                    <?php echo method_field("PUT"); ?>
                    <div class="form-group">
                        <?php echo '<div style="color: red;">' . $errors->first('category') . '</div>'; ?>
                        <label for="categories" class="control-label">Category</label>
                        <select required class="form-control" name="category" id="categories">
                            <option value="">Select Category</option>
                            <?php $__currentLoopData = $data['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php if($data['menus']->category_id == $category->id): ?> <?php echo e('selected'); ?> <?php endif; ?> value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="form-group" style="">
                        <?php echo '<div style="color: red;">'. $errors->first('pic') . '</div>'; ?>
                        <label for="pic" class="control-label">Picture</label>
                        <div style="height: 150px; width: 100%; text-align: center" class="img_choose_div">
                            <img class="img-responsive" height="150px" onclick="admin.chooseImage(this)" src="<?php echo e(asset( $data['menus']->pic )); ?>" alt="">
                            <input type="hidden" name="pic" placeholder="Picture" class="form-control" id="pic" value="<?php echo e($data['menus']->pic); ?>" >
                        </div>
                    </div>

                    <div class="form-group" style="text-align: right">
                        <input type="submit" class="btn btn-success" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>