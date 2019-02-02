@extends('layouts.site_layout')
@section('content')
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

          @foreach($data['news'] as $news)
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="item-holder">
                      <div class="image-box">
                          <figure>
                              <a href="/news/{{$news->id}}"><img src="{{ asset("storage/app/$news->image") }}" alt=""></a>
                          </figure>
                          <div class="date-box">
                              <span>{{ $news->created_at }}</span>
                          </div>
                      </div>
                      <div class="text-area">
                          <div class="content-text text-center">
                              <div class="sec-title">
                                  <a href="/news/{{$news->id}}"><h5>{{ $news->header }}</h5></a>
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
            @endforeach
        </div>
    </div>
</section>
    <!--End Choose Us-->
@endsection
