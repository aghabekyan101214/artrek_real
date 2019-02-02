<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: right">
                <a href="/admin/restaurants/create" class="btn btn-primary">Add Restaurant</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>#</td>
                        <td>Contacts</td>
                        <td>Order</td>
                        <td>Actions</td>
                    </tr>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $contact = json_decode($d->contact_phone, true); ?>
                        <tr>
                            <td><?php echo e($loop->index + 1); ?></td>
                            <td><?php echo e($contact['phone']); ?> <?php echo e($contact['address']); ?></td>
                            <td><?php echo e($d['order']); ?></td>
                            <td>
                                <a href="/admin/restaurants/<?php echo e($d->id); ?>/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <form onsubmit="if(getAnswer() == false ) { return false; } " style="display: inline-block;" action="/admin/restaurants/<?php echo e($d->id); ?>" method="post">
                                    <?php echo method_field("DELETE"); ?>
                                    <?php echo e(csrf_field()); ?>

                                </form>
                                <button onclick="admin.deleteAction('<?php echo e($d->id); ?>', '/admin/restaurants/')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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