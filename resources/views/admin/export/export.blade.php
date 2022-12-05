@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Экспорт</h1>
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
                    <a class="btn btn-success col-2 mr-2 mb-3" href="{{ route('export-category-xlsx') }}">Экспорт Категорий XLSX</a>
                    <a class="btn btn-success col-2 mr-2 mb-3" href="{{ route('export-book-xlsx') }}">Экспорт Книг XLSX</a>
                    <a class="btn btn-success col-2 mr-2 mb-3" href="{{ route('export-author-xlsx') }}">Экспорт Авторов XLSX</a>
                    <a class="btn btn-success col-2 mr-2 mb-3" href="{{ route('export-user-xlsx') }}">Экспорт Пользователей XLSX</a>
                <div> </div>
                <a class="btn btn-primary col-2 mr-2" href="{{ route('export-category-csv') }}">Экспорт категорий CSV</a>
                <a class="btn btn-primary col-2 mr-2" href="{{ route('export-book-csv') }}">Экспорт книг CSV</a>
                <a class="btn btn-primary col-2 mr-2" href="{{ route('export-author-csv') }}">Экспорт Авторов CSV</a>
                <a class="btn btn-primary col-2 mr-2" href="{{ route('export-user-csv') }}">Экспорт Пользователей CSV</a>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
