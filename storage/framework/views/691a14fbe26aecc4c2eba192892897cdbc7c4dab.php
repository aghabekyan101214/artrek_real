<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: right">
                <a href="/admin/menus/create" class="btn btn-primary">Add Menu</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>#</td>
                        <td>Img</td>
                        <td>Category</td>
                        <td>Actions</td>
                    </tr>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->index + 1); ?></td>
                            <td><img src="<?php echo e(asset("$d->pic")); ?>" class="img-responsive" height="150px" alt=""></td>
                            <td><?php echo e($d->categories->name); ?></td>
                            <td>
                                <a href="/admin/menus/<?php echo e($d->id); ?>/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <button onclick="admin.deleteAction('<?php echo e($d->id); ?>', '/admin/menus/')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                <br>
                <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>