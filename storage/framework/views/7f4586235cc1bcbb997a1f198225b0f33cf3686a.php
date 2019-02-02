<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="text-align: right">
                    <a href="/admin/partner/create" class="btn btn-primary">Ավելացնել Գործընկեր</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped" id="myTable">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Նկար</td>
                                <td>Վերնագիր</td>
                                <td>Գործիքներ</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->index + 1); ?></td>
                                    <td><img class="img-responsive" height="150px" src="<?php echo e(asset($d->image)); ?>" alt=""></td>
                                    <td><?php echo e($d->header); ?></td>
                                    <td>
                                        <a href="/admin/partner/<?php echo e($d->id); ?>/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <button onclick="admin.deleteAction('<?php echo e($d->id); ?>', '/admin/partner/')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <br>
                    <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        </div>
    </div>
    <scritp src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></scritp>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>