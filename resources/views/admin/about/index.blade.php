
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
                <form action="/admin/about/@if(isset($data->id)){{ $data->id }} @endif" method="post" class="col-md-12">
                    @if(isset($data->id))
                        @method("PUT")
                    @endif
                    {{ csrf_field() }}
                    <div class="form-group" style="text-align: center">
                        <img onclick="admin.chooseImage(this)" class="img-responsive cursor" height="200px" src="@if(isset($data->image) && $data->image != '-') {{ asset($data->image) }} @else {{ asset('public/images.png') }} @endif" alt="">
                        <input type="hidden" name="image" value="@if(isset($data->image)) {{ asset($data->image) }} @endif">
                    </div>
                    <div class="row myRow">
                        <div class="col-md-12 mb-10">
                            <label for="" class="label label-default">Վերնագիր</label>
                            <input type="text" class="form-control" name="header" value="@if(isset($data->header)) {{ $data->header }} @endif" required>
                        </div>
                        <div class="col-md-12 mb-10">
                            <label for="" class="label label-default">Տեքստ</label>
                            <textarea name="text" id="editor">@if(isset($data->about)) {{ $data->about }} @endif</textarea>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
