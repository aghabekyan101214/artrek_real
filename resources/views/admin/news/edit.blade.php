@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <form action="/admin/news/{{ $data->id }}" method="post" class="col-md-12">
                    {{ csrf_field() }}
                    @method("PUT")
                    <div class="form-group" style="text-align: center">
                        <img onclick="admin.chooseImage(this)" class="img-responsive img_choose_div" height="200px" src="@if(isset($data->image) && $data->image != '-') {{ asset($data->image) }} @else {{ asset('public/images.png') }} @endif" alt="">
                        <input type="hidden" name="image" value="{{ asset($data->image) }}">
                    </div>
                    <div class="form-group">
                        <label for="address" class="control-label">Վերնագիր</label>
                        <input type="text" required name="header" placeholder="Վերնագիր" value="{{ $data->header }}" class="form-control">
                    </div>
                    <div class="form-group mb-10">
                        <label for="" class="control-label">Տեքստ</label>
                        <textarea name="text" id="editor">{{ $data->text }}</textarea>
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
@endsection
