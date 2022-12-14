@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование Книги</h1>
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

                <div class="col-12">

                    <form action="{{route('admin.book.update', $book->id ) }}" method="POST" class="w-25">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="text" class="form-control" name='name' placeholder="Название Книги"
                            value="{{$book->name}}">
                            @error('name')
                                <div class="text-danger" >Это поле необходимо заполнить</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name='price' placeholder="Цена" value="{{$book->price}}">
                            @error('price')
                            <div class="text-danger" >Это поле необходимо заполнить</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name='rating' placeholder="Рейтинг" value="{{$book->rating}}">
                            @error('rating')
                            <div class="text-danger" >Это поле необходимо заполнить</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name='author_id' placeholder="ID автора" value="{{$book->author->id}}">
                            @error('author_id')
                            <div class="text-danger" >Это поле необходимо заполнить</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name='category_id' placeholder="ID категории" value="{{$book->category->id}}">
                            @error('category_id')
                            <div class="text-danger" >Это поле необходимо заполнить</div>
                            @enderror
                        </div>
                        <div class="w-25">
                            <input type="submit" class="btn btn-block btn-primary" value="Обновить">
                        </div>
                    </form>
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
