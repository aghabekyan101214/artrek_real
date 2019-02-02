<?php isset($data->services) ? $services = unserialize($data->services) : '' ; ?>
@extends('layouts.app')
@section('content')
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
                <form action="/admin/general/@if(isset($data->id)){{ $data->id }} @endif" method="post" class="col-md-12">
                    @if(isset($data->id))
                        @method("PUT")
                    @endif
                    {{ csrf_field() }}
                      <div class="form-group" style="text-align: center">
                        <img onclick="admin.chooseImage(this)" class="img-responsive cursor" height="200px" src="@if(isset($data->image) && $data->image != '-') {{ asset('storage/app/'.$data->image) }} @else {{ asset('storage/app/images.png') }} @endif" alt="">
                        <input type="hidden" name="image" value="@if(isset($data->image)) {{ asset($data->image) }} @endif">
                    </div>
                    <div class="row myRow">
                        <div class="col-md-4">
                            <label for="" class="label label-default">Ծառայություն 1</label>
                            <input type="text" class="form-control" name="service[0]" value="@if(isset($services[0])) {{ $services[0] }} @endif" required>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="label label-default">Ծառայություն 2</label>
                            <input type="text" class="form-control" name="service[1]" value="@if(isset($services[1])) {{ $services[1] }} @endif" required>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="label label-default">Ծառայություն 3</label>
                            <input type="text" class="form-control" name="service[2]" value="@if(isset($services[2])) {{ $services[2] }} @endif" required>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="label label-default">Ծառայություն 4</label>
                            <input type="text" class="form-control" name="service[3]" value="@if(isset($services[3])) {{ $services[3] }} @endif" required>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="label label-default">Ծառայություն 5</label>
                            <input type="text" class="form-control" name="service[4]" value="@if(isset($services[4])) {{ $services[4] }} @endif" required>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="label label-default">Ծառայություն 6</label>
                            <input type="text" class="form-control" name="service[5]" value="@if(isset($services[5])) {{ $services[5] }} @endif" required>
                        </div>
                        <div class="form-group col-md-12 mt-10" >
                            <input type="submit" class="btn btn-success right-float" value="Պահպանել">
                        </div>
                    </div>
                </form>
                <br>
                @include('flash::message')
            </div>
        </div>
    </div>
</div>
@endsection
