<?php $__env->startSection('content'); ?>
    <!--Page Title-->
    <section class="page-title" style="background: url(<?php echo e(asset("$data->image")); ?>);">
        <div class="container text-center">
            <div class="title">
                <h4>Մեր Մասին</h4>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Choose Us-->
    <section class="choose-us">
        <div class="container">
            <div class="section-title text-center">
                <h2>Մեր Մասին</h2>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="text">
                    <p>Excepteur sint occaecat cupidatat non proident, sunt culpa qui officia deserunt mollit anim id est labo rum. Sed perspiciatis unde omnis an natus error sit voluptatem.</p>
                </div>
                <div class="content-text">
                    <p>Totam rem aperiam eaque ipsa quae illo inventore veritatis et quasi architebe tea.vitae dicta sunt explicabo. nemo enim ipsam volup as tatem quia voluptassit aspernatur.aut odit aut fugit, sed quia consequuntur magni dolores eo ratione voluptatem.sequi nesciunt neque porro quisquam est, dolorem ipsum quia dolor sit amet, consectetur adipisci velit.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="causes-progress">
                    <div class="progress-item">
                        <h6>Նախագծում</h6>
                        <div class="progress" data-value="100">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div class="value-holder"><span class="value"></span>%</div>
                            </div>
                        </div>
                    </div>
                    <div class="progress-item">
                        <h6>Ձևավորում</h6>
                        <div class="progress" data-value="100">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                <div class="value-holder"><span class="value"></span>%</div>
                            </div>
                        </div>
                    </div>
                    <div class="progress-item">
                        <h6>Պատրաստում</h6>
                        <div class="progress" data-value="100">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                <div class="value-holder"><span class="value"></span>%</div>
                            </div>
                        </div>
                    </div>
                    <div class="progress-item">
                        <h6>Տեղադրում</h6>
                        <div class="progress" data-value="100">
                            <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                <div class="value-holder"><span class="value"></span>%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Choose Us-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site_layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>