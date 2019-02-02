@extends('layouts.site_layout')
@section('content')
    <style>
        .bg_div {
            position: relative;
            background-size: cover;
            background-position: center center;
            min-height: 600px;
            padding: 0;
        }

        .background-fix {
            background-color: #00000063;
        }

        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .flow-right, .flow-right .col-md-12{
            padding: 0!important;
        }

        .service_div i{
          color: black;
        }

        .service_div{
          border-bottom: 1px solid white;
        }

    </style>
    <?php $services = unserialize($data['home'][0]->services); ?>
    <div class="col-md-12 bg_div"
         style="height: 100vh; background-image:url('{{ url('public/bg.jpg') }} '); position: relative; ">
        <div class="background-fix"></div>
        <div class="flow-right col-md-2" style="float: right; position: relative; top: 100px; display: flex; flex-direction: column; justify-content: space-around; height:calc(100% - 100px);">
          @foreach($services as $bin => $service)
              <div class="col-md-12 service_div">
                <i>{{ $bin + 1 }}. {{ $service }}</i>
              </div>
          @endforeach
        </div>
    </div>
@endsection
