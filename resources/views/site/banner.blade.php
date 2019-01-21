@extends('layouts.site_layout');
@section('content')
    <style>
        .mycont .container .row{
            text-align: center;
            color: black;
        }


    </style>
    <div class="col-md-12 mycont">
        <div class="container">
            <div class="row">
                <img src='{{ asset("$data->image") }}' style="height: 600px; width: 100%" alt="">
            </div>
            <div class="row" style="margin-top: 10px;">
                <h2>{{ $data->header }}</h2>
            </div>
            <div class="row" style="margin-top: 10px;">
                <?php echo $data->text; ?>
            </div>
        </div>
    </div>
@endsection