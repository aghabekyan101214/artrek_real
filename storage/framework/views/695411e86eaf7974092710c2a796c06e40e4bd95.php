<?php $__env->startSection('content'); ?>
<section class="page-title" style="background: url(images/background/2.jpg);">
    <div class="container text-center">
        <div class="title">
            <h4  style="font-weight: 500">Նորություններ</h4>
        </div>
    </div>
</section>
<!--End Page Title-->
<!--Blog Section-->
<section class="blog-section">
    <div class="container">
        <div class="section-title text-center">
            <!-- <h2>Նորություններ</h2> -->
        </div>
        <div class="row">

          <?php $__currentLoopData = $data['news']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="item-holder">
                      <div class="image-box">
                          <figure>
                              <a href="/news/<?php echo e($news->id); ?>"><img src="<?php echo e(asset("storage/app/$news->image")); ?>" alt=""></a>
                          </figure>
                          <div class="date-box">
                              <span><?php echo e($news->created_at); ?></span>
                          </div>
                      </div>
                      <div class="text-area">
                          <div class="content-text text-center">
                              <div class="sec-title">
                                  <a href="/news/<?php echo e($news->id); ?>"><h5><?php echo e($news->header); ?></h5></a>
                              </div>
                              <div class="text">
                                  <?php echo $news->text; ?>
                              </div>
                          </div>
                          <div class="blog-info clearfix">

                          </div>
                      </div>
                  </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
    <!--End Choose Us-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site_layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>