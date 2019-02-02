@extends('layouts.site_layout')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background: url({{asset('site/images/background/2.jpg')}});">
        <div class="container text-center">
            <div class="title">
                <h4>Մեր Մասին</h4>
            </div>
            <!-- <ul class="title-manu">
                <li><a href="index.html">Գլխավոր</a></li>
                <li>&gt;</li>
                <li>About Us</li>
            </ul> -->
        </div>
    </section>
    <!--End Page Title-->

    <!--Choose Us-->
    <section class="choose-us">
        <div class="container">
            <div class="section-title text-center">
                <h2>{{ $data['about']->header }}</h2>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="content-text">
                    <?php echo $data['about']->about ?>
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
@endsection
