<?php $__env->startSection('content'); ?>
    <style>
        .mycont .container .row{
            text-align: center;
            color: black;
        }


    </style>
    <section class="blog-section style-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12 col-xs-12">
                    <div class="left-side">
                        <div class="item-holder">
                            <div class="image-box">
                                <figure>
                                    <a href="javascript:void(0)"><img src="images/blog/10.jpg" alt="blog-image"></a>
                                </figure>
                                <div class="date-box">
                                    <span><?php echo explode(" ", $data['data']->created_at)[0]; ?></span>
                                </div>
                            </div>
                            <div class="text-area">
                                <div class="content-text">
                                    <div class="section-title">
                                        <a href="single-blog.html"><h2><?php echo e($data['data']->header); ?></h2></a>
                                    </div>
                                    <div class="text">
                                        <?php echo $data['data']->text; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-xs-12">
                    <div class="right-side">
                        <div class="blog-sidebar">
                            <div class="sec-title">
                                <h5>Արտաքին Գովազդի Տեսակները</h5>
                            </div>
                            <?php $__currentLoopData = $data['latest']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <div class="item">
                                  <div class="image-box">
                                      <figure>
                                          <a href="/banner-type/<?php echo e($latest->id); ?>"><img src="images/blog/11.jpg" alt=""></a>
                                      </figure>
                                  </div>
                                  <div class="image-text">
                                      <a href="/banner-type/<?php echo e($latest->id); ?>"><h6><?php echo e($latest->header); ?></h6></a>
                                      <span>02 Feb, 2017</span>
                                  </div>
                              </div>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site_layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>