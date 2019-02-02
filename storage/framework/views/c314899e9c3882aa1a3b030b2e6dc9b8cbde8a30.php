<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <form action="/admin/news" method="post" class="col-md-12">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group" style="text-align: center">
                        <img onclick="admin.chooseImage(this)" class="img-responsive img_choose_div" height="200px" src="<?php if(isset($data->image) && $data->image != '-'): ?> <?php echo e(asset($data->image)); ?> <?php else: ?> <?php echo e(asset('public/images.png')); ?> <?php endif; ?>" alt="">
                        <input type="hidden" name="image">
                    </div>
                    <div class="form-group">
                        <label for="address" class="control-label">Վերնագիր</label>
                        <input type="text" required name="header" placeholder="Վերնագիր" class="form-control">
                    </div>
                    <div class="form-group mb-10">
                        <label for="" class="control-label">Տեքստ</label>
                        <textarea name="text" id="editor"></textarea>
                    </div>
                    <div class="form-group col-md-12 mt-10" >
                        <input type="submit" class="btn btn-success right-float" value="Պահպանել">
                    </div>
                </form>
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