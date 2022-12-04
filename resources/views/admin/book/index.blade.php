@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Книги</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-1 mb-3">
                        <a href="{{route('admin.book.create')}}"  class="btn btn-block btn-primary">Добавить</a>
                    </div>
                </div>
            <div class="row">
                <div class="col-7">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Название Книги</th>
                                            <th>Цена</th>
                                            <th>Рейтинг</th>
                                            <th>Автор</th>
                                            <th>Категория</th>
                                            <th colspan="3" class="text-center"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($books as $book)
                                        <tr>

                                            <td>{{$book -> id}}</td>
                                            <td>{{$book -> name}}</td>
                                            <td>{{$book -> price}}</td>
                                            <td>{{$book -> rating}}</td>
                                            <td>{{$book->author->name}} {{$book->author->surname}} </td>
                                            <td>{{$book->category->name}}</td>
                                            <td><a href="{{route('admin.book.show', $book->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                            <td><a href="{{route('admin.book.edit', $book->id)}}"><i class="fa fa-pen" aria-hidden="true"></i></a></td>
                                            <td>
                                                <form action="{{route('admin.book.delete', $book->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border-0 bg-transparent">
                                                        <i class="fa fa-trash text-danger" aria-hidden="true" role="button" te></i>
                                                    </button>
                                                </form>
                                            </td>

                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
