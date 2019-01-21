@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="text-align: right">
                    <a href="/admin/type/create" class="btn btn-primary">Ավելացնել Գովազդի Տեսակ</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped" id="myTable">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Նկար</td>
                                <td>Վերնագիր</td>
                                <td>Գործիքներ</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td><img class="img-responsive" height="150px" src="{{ asset($d->image) }}" alt=""></td>
                                    <td>{{ $d->header }}</td>
                                    <td>
                                        <a href="/admin/type/{{$d->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <button onclick="admin.deleteAction('{{ $d->id }}', '/admin/type/')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    @include('flash::message')
                </div>
            </div>
        </div>
    </div>
    <scritp src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></scritp>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endsection
