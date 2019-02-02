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
                <form action="/admin/about/<?php if(isset($data->id)): ?><?php echo e($data->id); ?> <?php endif; ?>" method="post" class="col-md-12">
                    <?php if(isset($data->id)): ?>
                        <?php echo method_field("PUT"); ?>
                    <?php endif; ?>
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group" style="text-align: center">
                        <img onclick="admin.chooseImage(this)" class="img-responsive cursor" height="200px" src="<?php if(isset($data->image) && $data->image != '-'): ?> <?php echo e(asset($data->image)); ?> <?php else: ?> <?php echo e(asset('public/images.png')); ?> <?php endif; ?>" alt="">
                        <input type="hidden" name="image" value="<?php if(isset($data->image)): ?> <?php echo e(asset($data->image)); ?> <?php endif; ?>">
                    </div>
                    <div class="row myRow">
                        <div class="col-md-12 mb-10">
                            <label for="" class="label label-default">Վերնագիր</label>
                            <input type="text" class="form-control" name="header" value="<?php if(isset($data->header)): ?> <?php echo e($data->header); ?> <?php endif; ?>" required>
                        </div>
                        <div class="col-md-12 mb-10">
                            <label for="" class="label label-default">Տեքստ</label>
                            <textarea name="text" id="editor"><?php if(isset($data->about)): ?> <?php echo e($data->about); ?> <?php endif; ?></textarea>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>