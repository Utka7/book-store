@extends('layouts.main')

@section('content')


    <main class="overflow-hidden ">
        <!--Start Breadcrumb Style2-->
        <section class="breadcrumb-area" style="background-image: url({{asset('/images/inner-pages/imgonline-com-ua-Resize-ydNAQEDk2fQrwCJ.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-content text-center wow fadeInUp animated">
                            <h2>Cart</h2>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="{{route('main.index')}}"><i class="flaticon-home pe-2"></i>Home</a></li>
                                    <li> <i class="flaticon-next"></i> </li>
                                    <li class="active">Cart</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Breadcrumb Style2-->
        <!--Start cart area-->
        <section class="cart-area pt-120 pb-120">
            <div class="container">
                <div class="row wow fadeInUp animated">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="cart-table-box">
                            <div class="table-outer">
                                <table class="cart-table">
                                    <thead class="cart-header">
                                        <tr>
                                            <th class="">Книга</th>
                                            <th class="price">Цена</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="thumb-box">
                                                        <h5> {{$book->name}} </h5>
                                                    </div>
                                            </td>
                                            <td>{{$book->price}}₽</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cart-button-box">
                            <div class="cart-button-box-right wow fadeInUp animated ">
                                <a href="{{route('buy.edit',$book->id)}}"   class="btn--primary mt-30">Купить</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End cart area-->
    </main>

@endsection
