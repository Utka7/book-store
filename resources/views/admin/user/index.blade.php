@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Авторы</h1>
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
                    <a href="#"  class="btn btn-block btn-primary">Добавить</a>
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Имя</th>
                                            <th>email</th>
                                            <th>Роль</th>
                                            <th colspan="3" class="text-center"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                        <tr>

                                            <td>{{$user -> id}}</td>
                                            <td>{{$user -> name}}</td>
                                            <td>{{$user -> email}}</td>
                                            <td>{{$user -> role}}</td>
                                            <td><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                            <td><a href="#"><i class="fa fa-pen" aria-hidden="true"></i></a></td>
                                            <td>
                                                <form action="{{route('admin.user.delete',$user -> id)}}" method="POST">
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
