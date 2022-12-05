
@extends('layouts.main')

@section('content')
<main class="overflow-hidden">

    <!-- newsLetter_popup Start -->
    <button data-mfp-src="#newsLetter-popup" class="modal-btn d-none"></button>
    <div id="newsLetter-popup" class="mfp-hide p-4" role="dialog">
        <div class="row align-items-center justify-content-sm-between">
            <div class="col-lg-5 d-lg-block d-none">
                <div class="newsLetter-popup__thumb imgenews">
                    <img src="../../images/home-three/products-1.jpg" alt="newsletter">
                </div>
            </div>
            <div class="col-lg-7 col-md-8 col-sm-10">
                <div class="newsLetter-popup__content mb-4">
                    <div class="text-center"> <a href="index.html" class="logo"> <img
                                src="../../images/logo/logo.png" alt="logo"> </a>
                        <h2> Join <span>with us.</span> </h2>
                        <p> Subscribe to receive news from Karte In a free hour </p>
                    </div>
                    <form action="#0" class="newsLetter-popup__subscrib-form">
                        <div class="input_box"> <input type="email" placeholder="Enter your email Address"
                                                       name="email"> <button type="submit" class="subscribe_btn"> Submit </button> </div>
                        <div class="form-group "> <input type="checkbox" id="html"> <label for="html"> By providing
                                my information, I agree to Karte <a href="#0"> Privacy Policy</a> and <a href="#0">
                                    Legal Statement</a> </label> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- catagory4 Start -->
    <div class="catagory4 pt-60 pb-60">
        <div class="container">
            <div class="row mt--30">
                @foreach($randomBooks as $book)
                <div class="col-lg-6 h-100 mt-30">
                    <a href="shop-grid.html" class="catagory-single one home3cat">
                        <img src="{{$book->preview_image}}" alt="#" class="background-img bg-img imgone">
                        <div class="content">
                            <div class="row w-100 h-100 align-items-center">
                                <div class="col-xl-7 col-md-9">
                                    <h5 class="wow animated fadeInUp" data-wow-delay="0.2s"> {{$book->name}}</h5>
                                    <h3 class="wow animated fadeInUp" data-wow-delay="0.3s"> {{$book->author->name}} {{$book->author->surname}}</h3>
                                     <h3 class=" link wow animated fadeInUp" data-wow-delay="0.4s"> {{$book->price}}₽</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- catagory4 End -->



    <!--Start Products Six-->
    <section class="products-three pt-60 pb-60 overflow-hidden">
        <div class="auto-container container">
            <div class="section-header style3 text-center wow fadeInUp animated">
                <h2>Бестселлеры </h2>
                <p> Weekend Top Brands </p>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="products-three__inner">
                        <ul>
                            @foreach($bestBooks as $book)
                            <li class="products-three-single wow fadeInUp animated">
                                <div class="products-three-single-img">
                                    @guest()

                                        <a href="{{route('home')}}" class="d-block">
                                            <img src="{{$book->preview_image}}" alt="" />
                                        </a>
                                    @else
                                        <a href="{{route('buy', $book->id)}}" class="d-block">
                                            <img src="{{$book->preview_image}}" alt="" />
                                        </a>
                                    @endguest

                                    <a href="cart.html" class="addcart btn--primary style2">
                                        Add To Cart
                                    </a>
                                    <div class="products-grid__usefull-links">
                                        <ul>
                                            <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                            wishlist</span> </a> </li>
                                            <li><a href="compare.html"> <i
                                                        class="flaticon-left-and-right-arrows"></i> <span>
                                                            compare</span> </a> </li>
                                            <li><a href="#popup7" class="popup_link"> <i
                                                        class="flaticon-visibility"></i> <span> quick view</span>
                                                </a> </li>
                                        </ul>
                                    </div>
                                    <div id="popup7" class="product-gird__quick-view-popup mfp-hide">
                                        <div class="container">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-lg-6">
                                                    <div class="quick-view__left-content">
                                                        <div class="tabs">
                                                            <div class="popup-product-thumb-box">
                                                                <ul>
                                                                    <li class="tab-nav popup-product-thumb"> <a
                                                                            href="#tabb111"> <img
                                                                                src="../../images/shop/products-v6-img7.jpg"
                                                                                alt="" /> </a> </li>
                                                                    <li class="tab-nav popup-product-thumb "> <a
                                                                            href="#tabb222"> <img
                                                                                src="../../images/shop/products-v6-img8.jpg"
                                                                                alt="" /> </a> </li>
                                                                    <li class="tab-nav popup-product-thumb "> <a
                                                                            href="#tabb333"> <img
                                                                                src="../../images/shop/products-v6-img9.jpg"
                                                                                alt="" /> </a> </li>
                                                                </ul>
                                                            </div>
                                                            <div class="popup-product-main-image-box">
                                                                <div id="tabb111"
                                                                     class="tab-item popup-product-image">
                                                                    <div class="popup-product-single-image"> <img
                                                                            src="../../images/shop/products-v6-img7.jpg"
                                                                            alt="" /> </div>
                                                                </div>
                                                                <div id="tabb222"
                                                                     class="tab-item popup-product-image">
                                                                    <div class="popup-product-single-image"> <img
                                                                            src="../../images/shop/products-v6-img8.jpg"
                                                                            alt="" /> </div>
                                                                </div>
                                                                <div id="tabb333"
                                                                     class="tab-item popup-product-image">
                                                                    <div class="popup-product-single-image"> <img
                                                                            src="../../images/shop/products-v6-img9.jpg"
                                                                            alt="" /> </div>
                                                                </div> <button class="prev"> <i
                                                                        class="flaticon-back"></i> </button> <button
                                                                    class="next"> <i class="flaticon-next"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="popup-right-content">
                                                        <h3>Brown Office Shoe</h3>
                                                        <div class="ratting"> <i class="flaticon-star"></i> <i
                                                                class="flaticon-star"></i> <i
                                                                class="flaticon-star"></i> <i
                                                                class="flaticon-star"></i> <i
                                                                class="flaticon-star"></i> <span>(112)</span> </div>
                                                        <p class="text"> Hydrating Plumping Intense Shine Lip Colour
                                                        </p>
                                                        <div class="price">
                                                            <h2> $42 USD <del> $65 USD</del></h2>
                                                            <h6> In stuck</h6>
                                                        </div>
                                                        <div class="color-varient"> <a href="#0"
                                                                                       class="color-name pink"> <span>Pink</span> </a> <a
                                                                href="#0" class="color-name red"> <span>Red</span>
                                                            </a> <a href="#0"
                                                                    class="color-name yellow"><span>Yellow</span> </a>
                                                            <a href="#0" class="color-name blue"> <span>Blue</span>
                                                            </a> <a href="#0" class="color-name black">
                                                                <span>Black</span> </a> </div>
                                                        <div class="add-product">
                                                            <h6>Qty:</h6>
                                                            <div class="button-group">
                                                                <div class="qtySelector text-center"> <span
                                                                        class="decreaseQty"><i
                                                                            class="flaticon-minus"></i> </span>
                                                                    <input type="number" class="qtyValue"
                                                                           value="1" /> <span class="increaseQty"> <i
                                                                            class="flaticon-plus"></i> </span>
                                                                </div> <button class="btn--primary "> Add to Cart
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="payment-method"> <a href="#0"> <img
                                                                    src="../../images/payment_method/method_1.png"
                                                                    alt=""> </a> <a href="#0"> <img
                                                                    src="../../images/payment_method/method_2.png"
                                                                    alt=""> </a> <a href="#0"> <img
                                                                    src="../../images/payment_method/method_3.png"
                                                                    alt=""> </a> <a href="#0"> <img
                                                                    src="../../images/payment_method/method_4.png"
                                                                    alt=""> </a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-three-single-content text-center"> <span>{{$book->category->name}}</span>
                                    <h5><a href="shop-details-3.html">{{$book->author->name}} {{$book->author->surname}} </a></h5>
                                    <p>{{$book->price}}₽</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Products Six-->


</main>


<!--  Footer Three start -->

@endsection
