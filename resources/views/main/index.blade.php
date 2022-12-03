
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
                @foreach($books as $book)
                <div class="col-lg-6 h-100 mt-30">
                    <a href="shop-grid.html" class="catagory-single one home3cat">
                        <img src="{{$book->preview_image}}" alt="#" class="background-img bg-img imgone">
                        <div class="content">
                            <div class="row w-100 h-100 align-items-center">
                                <div class="col-xl-7 col-md-9">
                                    <h5 class="wow animated fadeInUp" data-wow-delay="0.2s"> Shop & Save</h5>
                                    <h3 class="wow animated fadeInUp" data-wow-delay="0.3s"> Exclusive Women Shoes
                                    </h3>
                                    <span class=" link wow animated fadeInUp" data-wow-delay="0.4s"> explore
                                            now</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                <div class="col-lg-6">
                    <div class="row">
                        <div class="co-12 mt-30 ">
                            <a href="shop-grid.html" class="catagory-single home3cat">
                                <img src="images/home-three/catbg-3.png" alt=""
                                     class="background-img bg-img">
                                <div class="content">
                                    <div class="row w-100 h-100 align-items-center">
                                        <div class="col-12">
                                            <h5 class=" wow animated red fadeInUp" data-wow-delay="0.2s"> 20% Off
                                            </h5>
                                            <h3 class=" wow animated fadeInUp" data-wow-delay="0.3s"> Men Sneakers
                                            </h3>
                                            <span class="link wow animated fadeInUp" data-wow-delay="0.4s"> explore
                                                    now</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 mt-30">
                            <a href="shop-grid.html" class="catagory-single home3cat">
                                <img src="images/home-three/catbg-2.png" alt=""
                                     class="background-img bg-img">
                                <div class="content">
                                    <div class="row w-100 h-100 align-items-center">
                                        <div class="col-xxl-6 col-lg-9">
                                            <h5 class=" wow animated fadeInUp" data-wow-delay="0.2s"> New Products
                                            </h5>
                                            <h3 class=" wow animated fadeInUp" data-wow-delay="0.3s"> Women Sneakers
                                            </h3>
                                            <span class="link wow animated fadeInUp" data-wow-delay="0.4s"> explore
                                                    now</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- catagory4 End -->


    <!-- Categories tab Start -->
    <section class="categories-tab pt-60 pb-60 wow fadeInUp">
        <div class="container auto-container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav three nav-pills justify-content-center" id="pills-tab-two" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active"
                                    id="pills-best-sellers-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-best-sellers" type="button" role="tab"
                                    aria-controls="pills-best-sellers" aria-selected="true"> Best Sellers </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link"
                                    id="pills-new-arrivals-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-new-arrivals" type="button" role="tab"
                                    aria-controls="pills-new-arrivals" aria-selected="false"> New Arrivals </button>
                        </li>
                        <li class="nav-item" role="presentation"> <button class="nav-link" id="pills-top-rated-tab"
                                                                          data-bs-toggle="pill" data-bs-target="#pills-top-rated" type="button" role="tab"
                                                                          aria-controls="pills-top-rated" aria-selected="false"> Top Rated </button> </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="tab-content" id="pills-tabContent-two">
                    <div class="tab-pane fade show active" id="pills-best-sellers" role="tabpanel"
                         aria-labelledby="pills-best-sellers-tab">
                        <div class="catagory-slider-three">
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="../../images/home-three/products-1.jpg" class="first-img"
                                                 alt="" />
                                            <img src="../../images/home-three/products-hover-1.png" alt=""
                                                 class="hover-img" />
                                        </a>
                                        <div class="products-grid-one__badge-box"> <span
                                                class="bg_base badge new ">New</span> <span
                                                class="bg_black badge discount">-40%</span> </div> <a
                                            href="cart.html" class="addcart btn--primary style2"> Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span> </a> </li>
                                                <li><a href="compare.html"> <i
                                                            class="flaticon-left-and-right-arrows"></i> <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i
                                                            class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">Apex Sneakers </a></h5>
                                        <p>$159.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="../../images/home-three/products-2.jpg" alt="" />
                                        </a>
                                        <a href="cart.html" class="addcart btn--primary style2">
                                            Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span> </a> </li>
                                                <li><a href="#0"> <i class="flaticon-left-and-right-arrows"></i>
                                                        <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i
                                                            class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">Sports Shoes</a></h5>
                                        <p>$159.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="../../images/home-three/products-3.jpg" class="first-img"
                                                 alt="" />
                                            <img src="../../images/home-three/products-hover-3.png" alt=""
                                                 class="hover-img" />
                                        </a>
                                        <div class="products-grid-one__badge-box"> <span
                                                class="bg_base badge new ">New</span> </div> <a href="cart.html"
                                                                                                class="addcart btn--primary style2"> Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="#0"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span>
                                                    </a> </li>
                                                <li><a href="#0"> <i class="flaticon-left-and-right-arrows"></i>
                                                        <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i
                                                            class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">Trendy stylish shoes</a></h5>
                                        <p>$159.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="../../images/home-three/products-4.jpg" alt="" />
                                        </a>
                                        <a href="cart.html" class="addcart btn--primary style2"> Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span> </a> </li>
                                                <li><a href="compare.html"> <i
                                                            class="flaticon-left-and-right-arrows"></i> <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i
                                                            class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">Casual Shoes</a></h5>
                                        <p>$159.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img img-bg">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="../../images/home-three/products-5.png" alt="" />
                                        </a>
                                        <div class="products-grid-one__badge-box"> <span
                                                class="bg_black badge discount">-10%</span> </div> <a
                                            href="cart.html" class="addcart btn--primary style2"> Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span> </a> </li>
                                                <li><a href="compare.html"> <i
                                                            class="flaticon-left-and-right-arrows"></i> <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i
                                                            class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">High Quality Sneakers </a></h5>
                                        <p>$159.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="../../images/home-three/products-6.png" alt="" />
                                        </a>
                                        <div class="products-grid-one__badge-box"> <span
                                                class="bg_base badge new ">New</span> </div> <a href="cart.html"
                                                                                                class="addcart btn--primary style2"> Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span> </a> </li>
                                                <li><a href="compare.html"> <i
                                                            class="flaticon-left-and-right-arrows"></i> <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i
                                                            class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">Outdoor Sports Shoes</a></h5>
                                        <p><del>$200.00</del> $159.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-new-arrivals" role="tabpanel"
                         aria-labelledby="pills-new-arrivals-tab">
                        <div class="catagory-slider-three">
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="../../images/home-three/productss2-1.jpg" class="first-img"
                                                 alt="" />
                                            <img src="../../images/home-three/productss2-hover-1.png" alt=""
                                                 class="hover-img" />
                                        </a>
                                        <div class="products-grid-one__badge-box"> <span
                                                class="bg_base badge new ">New</span> <span
                                                class="bg_black badge discount">-40%</span> </div> <a
                                            href="cart.html" class="addcart btn--primary style2"> Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span> </a> </li>
                                                <li><a href="compare.html"> <i
                                                            class="flaticon-left-and-right-arrows"></i> <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i
                                                            class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">Sport Sneakers</a></h5>
                                        <p>$159.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="../../images/home-three/productss2-2.jpg" alt="" />
                                        </a>
                                        <a href="cart.html" class="addcart btn--primary style2">
                                            Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span> </a> </li>
                                                <li><a href="#0"> <i class="flaticon-left-and-right-arrows"></i>
                                                        <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i
                                                            class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">Brown Office Shoe</a></h5>
                                        <p>$159.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="../../images/home-three/productss2-3.jpg" class="first-img"
                                                 alt="" />
                                            <img src="../../images/home-three/productss2-hover-3.png" alt=""
                                                 class="hover-img" />
                                        </a>
                                        <div class="products-grid-one__badge-box"> <span
                                                class="bg_base badge new ">New</span> </div> <a href="cart.html"
                                                                                                class="addcart btn--primary style2"> Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="#0"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span>
                                                    </a> </li>
                                                <li><a href="#0"> <i class="flaticon-left-and-right-arrows"></i>
                                                        <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i
                                                            class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">Sport Shoe Lilo</a></h5>
                                        <p>$159.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="../../images/home-three/productss2-4.jpg" alt="" />
                                        </a>
                                        <a href="cart.html" class="addcart btn--primary style2"> Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span> </a> </li>
                                                <li><a href="compare.html"> <i
                                                            class="flaticon-left-and-right-arrows"></i> <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i
                                                            class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">Black Office Shoe</a></h5>
                                        <p>$159.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img img-bg">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="../../images/home-three/productss2-5.jpg" alt="" />
                                        </a>
                                        <div class="products-grid-one__badge-box"> <span
                                                class="bg_black badge discount">-10%</span> </div> <a
                                            href="cart.html" class="addcart btn--primary style2"> Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span> </a> </li>
                                                <li><a href="compare.html"> <i
                                                            class="flaticon-left-and-right-arrows"></i> <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i
                                                            class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">Leather Sneakers</a></h5>
                                        <p>$159.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="../../images/home-three/productss2-2.jpg" alt="" />
                                        </a>
                                        <div class="products-grid-one__badge-box"> <span
                                                class="bg_base badge new ">New</span> </div> <a href="cart.html"
                                                                                                class="addcart btn--primary style2"> Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span> </a> </li>
                                                <li><a href="compare.html"> <i
                                                            class="flaticon-left-and-right-arrows"></i> <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i
                                                            class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">White Casual Shoe</a></h5>
                                        <p><del>$200.00</del> $159.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-top-rated" role="tabpanel"
                         aria-labelledby="pills-top-rated-tab">
                        <div class="catagory-slider-three">
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="../../images/home-three/productss3-1.jpg" class="first-img"
                                                 alt="" />
                                            <img src="../../images/home-three/productss3-hover-1.jpg" alt=""
                                                 class="hover-img" />
                                        </a>
                                        <div class="products-grid-one__badge-box"> <span
                                                class="bg_base badge new ">New</span> <span
                                                class="bg_black badge discount">-40%</span> </div> <a
                                            href="cart.html" class="addcart btn--primary style2"> Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span> </a> </li>
                                                <li><a href="compare.html"> <i
                                                            class="flaticon-left-and-right-arrows"></i> <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i
                                                            class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">Sport Sneakers</a></h5>
                                        <p>$159.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="../../images/home-three/productss3-2.jpg" alt="" />
                                        </a>
                                        <a href="cart.html" class="addcart btn--primary style2">
                                            Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span> </a> </li>
                                                <li><a href="#0"> <i class="flaticon-left-and-right-arrows"></i>
                                                        <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i
                                                            class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">Brown Office Shoe</a></h5>
                                        <p>$159.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="../../images/home-three/productss3-3.jpg" class="first-img"
                                                 alt="" />
                                            <img src="../../images/home-three/productss3-hover-3.png" alt=""
                                                 class="hover-img" />
                                        </a>
                                        <div class="products-grid-one__badge-box"> <span
                                                class="bg_base badge new ">New</span> </div> <a href="cart.html"
                                                                                                class="addcart btn--primary style2"> Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="#0"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span>
                                                    </a> </li>
                                                <li><a href="#0"> <i class="flaticon-left-and-right-arrows"></i>
                                                        <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i
                                                            class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">Sport Shoe Lilo</a></h5>
                                        <p>$159.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="../../images/home-three/productss3-4.jpg" alt="" />
                                        </a>
                                        <a href="cart.html" class="addcart btn--primary style2"> Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span> </a> </li>
                                                <li><a href="compare.html"> <i
                                                            class="flaticon-left-and-right-arrows"></i> <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i
                                                            class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">Black Office Shoe</a></h5>
                                        <p>$159.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img img-bg">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="../../images/home-three/productss3-5.png" alt="" />
                                        </a>
                                        <div class="products-grid-one__badge-box"> <span
                                                class="bg_black badge discount">-10%</span> </div> <a
                                            href="cart.html" class="addcart btn--primary style2"> Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span> </a> </li>
                                                <li><a href="compare.html"> <i
                                                            class="flaticon-left-and-right-arrows"></i> <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i
                                                            class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">Leather Sneakers</a></h5>
                                        <p>$159.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="../../images/home-three/productss3-3.jpg" alt="" />
                                        </a>
                                        <div class="products-grid-one__badge-box"> <span
                                                class="bg_base badge new ">New</span> </div> <a href="cart.html"
                                                                                                class="addcart btn--primary style2"> Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span> </a> </li>
                                                <li><a href="compare.html"> <i
                                                            class="flaticon-left-and-right-arrows"></i> <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i
                                                            class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">White Casual Shoe</a></h5>
                                        <p><del>$200.00</del> $159.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="loder">
                        <div id="overlay" style="display:none;">
                            <div class="spinner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories tab End -->


    <!--Start Video Two-->
    <section class="video-two mt-60 mb-60 overflow-hidden">
        <div class="auto-container container ">
            <div class="row g-0">
                <!--Start Video Two Img-->

                <!--End Video Two Img-->
                <!--Start Video Two Content-->
                <div class="col-xl-6 ">
                    <div class="video-two__content">
                        <div class="video-two__content-inner">
                            <div class="tagline wow fadeInUp animated"> <span>Hurry up, the deal will end
                                        soon</span> </div>
                            <h2 class=" wow fadeInUp animated">Best Deal Today</h2>
                            <div class="text wow fadeInUp animated">
                                <p>Credibly fabricate out of-the-boxn twice relationshi after empowered alignments.
                                    Completely band productivate client-based sources before enabled best practices.
                                    Dramatically network maout-of-the-box best practices whereas effective
                                    intellectual capital.</p>
                            </div>
                            <div class="btn-box wow fadeInUp animated"> <a href="shop-grid.html"
                                                                           class="btn--primary style2">Discover More</a> </div>
                        </div>
                    </div>
                </div>
                <!--End Video Two Content-->
            </div>
        </div>
    </section>
    <!--End Video Two-->

    <!--Start Products Six-->
    <section class="products-three pt-60 pb-60 overflow-hidden">
        <div class="auto-container container">
            <div class="section-header style3 text-center wow fadeInUp animated">
                <h2>Latest Shoes </h2>
                <p> Weekend Top Brands </p>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="products-three__inner">
                        <ul>
                            <!--Start Products Six Single-->
                            <li class="products-three-single wow fadeInUp animated">
                                <div class="products-three-single-img">
                                    <a href="shop-details-3.html" class="d-block"> <img
                                            src="../../images/home-three/productss2-1.jpg" class="first-img"
                                            alt="" /> <img src="../../images/home-three/productss2-hover-1.png"
                                                           alt="" class="hover-img" /> </a>
                                    <div class="products-grid-one__badge-box"> <span
                                            class="bg_base badge new ">New</span> </div> <a href="cart.html"
                                                                                            class="addcart btn--primary style2"> Add To Cart </a>
                                    <div class="products-grid__usefull-links">
                                        <ul>
                                            <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                            wishlist</span> </a> </li>
                                            <li><a href="compare.html"> <i
                                                        class="flaticon-left-and-right-arrows"></i> <span>
                                                            compare</span> </a> </li>
                                            <li><a href="#popup5" class="popup_link"> <i
                                                        class="flaticon-visibility"></i> <span> quick view</span>
                                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="popup5" class="product-gird__quick-view-popup mfp-hide">
                                    <div class="container">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-lg-6">
                                                <div class="quick-view__left-content">
                                                    <div class="tabs">
                                                        <div class="popup-product-thumb-box">
                                                            <ul>
                                                                <li class="tab-nav popup-product-thumb"> <a
                                                                        href="#tabb1"> <img
                                                                            src="../../images/shop/products-v6-img5.jpg"
                                                                            alt="" /> </a> </li>
                                                                <li class="tab-nav popup-product-thumb "> <a
                                                                        href="#tabb2"> <img
                                                                            src="../../images/shop/products-v6-img6.jpg"
                                                                            alt="" /> </a> </li>
                                                                <li class="tab-nav popup-product-thumb "> <a
                                                                        href="#tabb3"> <img
                                                                            src="../../images/shop/products-v6-img7.jpg"
                                                                            alt="" /> </a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="popup-product-main-image-box">
                                                            <div id="tabb1" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img5.jpg"
                                                                        alt="" /> </div>
                                                            </div>
                                                            <div id="tabb2" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img6.jpg"
                                                                        alt="" /> </div>
                                                            </div>
                                                            <div id="tabb3" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img7.jpg"
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
                                                            class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                        <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                        <span>(112)</span> </div>
                                                    <p class="text"> Hydrating Plumping Intense Shine Lip Colour
                                                    </p>
                                                    <div class="price">
                                                        <h2> $42 USD <del> $65 USD</del></h2>
                                                        <h6> In stuck</h6>
                                                    </div>
                                                    <div class="color-varient"> <a href="#0"
                                                                                   class="color-name pink"> <span>Pink</span> </a> <a
                                                            href="#0" class="color-name red"> <span>Red</span> </a>
                                                        <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                        </a> <a href="#0" class="color-name blue"> <span>Blue</span>
                                                        </a> <a href="#0" class="color-name black">
                                                            <span>Black</span> </a> </div>
                                                    <div class="add-product">
                                                        <h6>Qty:</h6>
                                                        <div class="button-group">
                                                            <div class="qtySelector text-center"> <span
                                                                    class="decreaseQty"><i
                                                                        class="flaticon-minus"></i> </span> <input
                                                                    type="number" class="qtyValue" value="1" />
                                                                <span class="increaseQty"> <i
                                                                        class="flaticon-plus"></i> </span> </div>
                                                            <button class="btn--primary "> Add to Cart </button>
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
                                <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                    <h5><a href="shop-details-3.html"> Trendy stylish shoes </a></h5>
                                    <p><del>$200.00</del> $159.00</p>
                                </div>
                            </li>
                            <!--End Products Six Single-->
                            <!--Start Products Six Single-->
                            <li class="products-three-single wow fadeInUp animated">
                                <div class="products-three-single-img">
                                    <a href="shop-details-3.html" class="d-block">
                                        <img src="../../images/home-three/productss2-hover-2.png" class="first-img"
                                             alt="" />
                                        <img src="../../images/home-three/productss2-2.jpg" alt=""
                                             class="hover-img" />
                                    </a>
                                    <div class="products-grid-one__badge-box"> <span
                                            class="bg_black badge discount">-70%</span> </div> <a href="cart.html"
                                                                                                  class="addcart btn--primary style2"> Add To Cart </a>
                                    <div class="products-grid__usefull-links">
                                        <ul>
                                            <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                            wishlist</span> </a> </li>
                                            <li><a href="compare.html"> <i
                                                        class="flaticon-left-and-right-arrows"></i> <span>
                                                            compare</span> </a> </li>
                                            <li><a href="#popup6" class="popup_link"> <i
                                                        class="flaticon-visibility"></i> <span> quick view</span>
                                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="popup6" class="product-gird__quick-view-popup mfp-hide">
                                    <div class="container">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-lg-6">
                                                <div class="quick-view__left-content">
                                                    <div class="tabs">
                                                        <div class="popup-product-thumb-box">
                                                            <ul>
                                                                <li class="tab-nav popup-product-thumb"> <a
                                                                        href="#tabb11"> <img
                                                                            src="../../images/shop/products-v6-img6.jpg"
                                                                            alt="" /> </a> </li>
                                                                <li class="tab-nav popup-product-thumb "> <a
                                                                        href="#tabb22"> <img
                                                                            src="../../images/shop/products-v6-img7.jpg"
                                                                            alt="" /> </a> </li>
                                                                <li class="tab-nav popup-product-thumb "> <a
                                                                        href="#tabb33"> <img
                                                                            src="../../images/shop/products-v6-img8.jpg"
                                                                            alt="" /> </a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="popup-product-main-image-box">
                                                            <div id="tabb11" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img6.jpg"
                                                                        alt="" /> </div>
                                                            </div>
                                                            <div id="tabb22" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img7.jpg"
                                                                        alt="" /> </div>
                                                            </div>
                                                            <div id="tabb33" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img8.jpg"
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
                                                            class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                        <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                        <span>(112)</span> </div>
                                                    <p class="text"> Hydrating Plumping Intense Shine Lip Colour
                                                    </p>
                                                    <div class="price">
                                                        <h2> $42 USD <del> $65 USD</del></h2>
                                                        <h6> In stuck</h6>
                                                    </div>
                                                    <div class="color-varient"> <a href="#0"
                                                                                   class="color-name pink"> <span>Pink</span> </a> <a
                                                            href="#0" class="color-name red"> <span>Red</span> </a>
                                                        <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                        </a> <a href="#0" class="color-name blue"> <span>Blue</span>
                                                        </a> <a href="#0" class="color-name black">
                                                            <span>Black</span> </a> </div>
                                                    <div class="add-product">
                                                        <h6>Qty:</h6>
                                                        <div class="button-group">
                                                            <div class="qtySelector text-center"> <span
                                                                    class="decreaseQty"><i
                                                                        class="flaticon-minus"></i> </span> <input
                                                                    type="number" class="qtyValue" value="1" />
                                                                <span class="increaseQty"> <i
                                                                        class="flaticon-plus"></i> </span> </div>
                                                            <button class="btn--primary "> Add to Cart </button>
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
                                <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                    <h5><a href="shop-details-3.html">Exclusive Sneakers </a></h5>
                                    <p>$159.00</p>
                                </div>
                            </li>
                            <!--End Products Six Single-->
                            <!--Start Products Six Single-->
                            <li class="products-three-single wow fadeInUp animated">
                                <div class="products-three-single-img">
                                    <a href="shop-details-3.html" class="d-block">
                                        <img src="../../images/home-three/productss2-3.jpg" alt="" />
                                    </a>

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
                                <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                    <h5><a href="shop-details-3.html">Fashionable Sneakers </a></h5>
                                    <p><del>$200.00</del> $159.00</p>
                                </div>
                            </li>
                            <!--End Products Six Single-->
                            <!--Start Products Six Single-->
                            <li class="products-three-single  wow fadeInUp animated">
                                <div class="products-three-single-img"> <a href="shop-details-3.html"
                                                                           class="d-block"> <img src="../../images/home-three/productss2-4.jpg"
                                                                                                 alt="" />
                                    </a>
                                    <div class="products-grid-one__badge-box"> <span
                                            class="bg_black badge discount">-10%</span> </div> <a href="cart.html"
                                                                                                  class="addcart btn--primary style2"> Add To Cart </a>
                                    <div class="products-grid__usefull-links">
                                        <ul>
                                            <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                            wishlist</span> </a> </li>
                                            <li><a href="compare.html"> <i
                                                        class="flaticon-left-and-right-arrows"></i> <span>
                                                            compare</span> </a> </li>
                                            <li><a href="#popup8" class="popup_link"> <i
                                                        class="flaticon-visibility"></i> <span> quick view</span>
                                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="popup8" class="product-gird__quick-view-popup mfp-hide">
                                    <div class="container">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-lg-6">
                                                <div class="quick-view__left-content">
                                                    <div class="tabs">
                                                        <div class="popup-product-thumb-box">
                                                            <ul>
                                                                <li class="tab-nav popup-product-thumb"> <a
                                                                        href="#tabb1111"> <img
                                                                            src="../../images/shop/products-v6-img9.jpg"
                                                                            alt="" /> </a> </li>
                                                                <li class="tab-nav popup-product-thumb "> <a
                                                                        href="#tabb2222"> <img
                                                                            src="../../images/shop/products-v6-img9.jpg"
                                                                            alt="" /> </a> </li>
                                                                <li class="tab-nav popup-product-thumb "> <a
                                                                        href="#tabb3333"> <img
                                                                            src="../../images/shop/products-v6-img10.jpg"
                                                                            alt="" /> </a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="popup-product-main-image-box">
                                                            <div id="tabb1111" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img8.jpg"
                                                                        alt="" /> </div>
                                                            </div>
                                                            <div id="tabb2222" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img9.jpg"
                                                                        alt="" /> </div>
                                                            </div>
                                                            <div id="tabb3333" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img10.jpg"
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
                                                            class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                        <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                        <span>(112)</span> </div>
                                                    <p class="text"> Hydrating Plumping Intense Shine Lip Colour
                                                    </p>
                                                    <div class="price">
                                                        <h2> $42 USD <del> $65 USD</del></h2>
                                                        <h6> In stuck</h6>
                                                    </div>
                                                    <div class="color-varient"> <a href="#0"
                                                                                   class="color-name pink"> <span>Pink</span> </a> <a
                                                            href="#0" class="color-name red"> <span>Red</span> </a>
                                                        <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                        </a> <a href="#0" class="color-name blue"> <span>Blue</span>
                                                        </a> <a href="#0" class="color-name black">
                                                            <span>Black</span> </a> </div>
                                                    <div class="add-product">
                                                        <h6>Qty:</h6>
                                                        <div class="button-group">
                                                            <div class="qtySelector text-center"> <span
                                                                    class="decreaseQty"><i
                                                                        class="flaticon-minus"></i> </span> <input
                                                                    type="number" class="qtyValue" value="1" />
                                                                <span class="increaseQty"> <i
                                                                        class="flaticon-plus"></i> </span> </div>
                                                            <button class="btn--primary "> Add to Cart </button>
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
                                <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                    <h5><a href="shop-details-3.html">Summer Shoes</a></h5>
                                    <p>$159.00</p>
                                </div>
                            </li>
                            <!--End Products Six Single-->
                            <!--Start Products Six Single-->
                            <li class="products-three-single   wow fadeInUp animated">
                                <div class="products-three-single-img">
                                    <a href="shop-details-3.html" class="d-block">
                                        <img src="../../images/home-three/productss2-5.jpg" class="first-img"
                                             alt="" />
                                        <img src="../../images/home-three/productss2-hover-5.png" alt=""
                                             class="hover-img" />
                                    </a>
                                    <a href="cart.html" class="addcart btn--primary style2"> Add To Cart </a>
                                    <div class="products-grid__usefull-links">
                                        <ul>
                                            <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                            wishlist</span> </a> </li>
                                            <li><a href="compare.html"> <i
                                                        class="flaticon-left-and-right-arrows"></i> <span>
                                                            compare</span> </a> </li>
                                            <li><a href="#popup9" class="popup_link"> <i
                                                        class="flaticon-visibility"></i> <span> quick view</span>
                                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="popup9" class="product-gird__quick-view-popup mfp-hide">
                                    <div class="container">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-lg-6">
                                                <div class="quick-view__left-content">
                                                    <div class="tabs">
                                                        <div class="popup-product-thumb-box">
                                                            <ul>
                                                                <li class="tab-nav popup-product-thumb"> <a
                                                                        href="#tabc1"> <img
                                                                            src="../../images/shop/products-v6-img9.jpg"
                                                                            alt="" /> </a> </li>
                                                                <li class="tab-nav popup-product-thumb "> <a
                                                                        href="#tabc2"> <img
                                                                            src="../../images/shop/products-v6-img9.jpg"
                                                                            alt="" /> </a> </li>
                                                                <li class="tab-nav popup-product-thumb "> <a
                                                                        href="#tabc3"> <img
                                                                            src="../../images/shop/products-v6-img10.jpg"
                                                                            alt="" /> </a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="popup-product-main-image-box">
                                                            <div id="tabc1" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img8.jpg"
                                                                        alt="" /> </div>
                                                            </div>
                                                            <div id="tabc2" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img9.jpg"
                                                                        alt="" /> </div>
                                                            </div>
                                                            <div id="tabc3" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img10.jpg"
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
                                                            class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                        <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                        <span>(112)</span> </div>
                                                    <p class="text"> Hydrating Plumping Intense Shine Lip Colour
                                                    </p>
                                                    <div class="price">
                                                        <h2> $42 USD <del> $65 USD</del></h2>
                                                        <h6> In stuck</h6>
                                                    </div>
                                                    <div class="color-varient"> <a href="#0"
                                                                                   class="color-name pink"> <span>Pink</span> </a> <a
                                                            href="#0" class="color-name red"> <span>Red</span> </a>
                                                        <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                        </a> <a href="#0" class="color-name blue"> <span>Blue</span>
                                                        </a> <a href="#0" class="color-name black">
                                                            <span>Black</span> </a> </div>
                                                    <div class="add-product">
                                                        <h6>Qty:</h6>
                                                        <div class="button-group">
                                                            <div class="qtySelector text-center"> <span
                                                                    class="decreaseQty"><i
                                                                        class="flaticon-minus"></i> </span> <input
                                                                    type="number" class="qtyValue" value="1" />
                                                                <span class="increaseQty"> <i
                                                                        class="flaticon-plus"></i> </span> </div>
                                                            <button class="btn--primary "> Add to Cart </button>
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
                                <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                    <h5><a href="shop-details-3.html">Outdoor Sports Shoes</a></h5>
                                    <p><del>$200.00</del> $159.00</p>
                                </div>
                            </li>
                            <!--End Products Six Single-->

                            <!--Start Products Six Single-->
                            <li class="products-three-single wow fadeInUp animated">
                                <div class="products-three-single-img">
                                    <a href="shop-details-3.html" class="d-block">
                                        <img src="../../images/home-three/productss3-1.jpg" class="first-img"
                                             alt="" />
                                        <img src="../../images/home-three/productss3-hover-1.jpg" alt=""
                                             class="hover-img" />
                                    </a>
                                    <div class="products-grid-one__badge-box"> <span
                                            class="bg_base badge new ">New</span> <span
                                            class="bg_black badge discount">-40%</span> </div> <a href="cart.html"
                                                                                                  class="addcart btn--primary style2"> Add To Cart </a>
                                    <div class="products-grid__usefull-links">
                                        <ul>
                                            <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                            wishlist</span> </a> </li>
                                            <li><a href="compare.html"> <i
                                                        class="flaticon-left-and-right-arrows"></i> <span>
                                                            compare</span> </a> </li>
                                            <li><a href="#popup" class="popup_link"> <i
                                                        class="flaticon-visibility"></i> <span> quick view</span>
                                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="popup" class="product-gird__quick-view-popup mfp-hide">
                                    <div class="container">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-lg-6">
                                                <div class="quick-view__left-content">
                                                    <div class="tabs">
                                                        <div class="popup-product-thumb-box">
                                                            <ul>
                                                                <li class="tab-nav popup-product-thumb"> <a
                                                                        href="#tab1"> <img
                                                                            src="../../images/shop/products-v6-img1.jpg"
                                                                            alt="" /> </a> </li>
                                                                <li class="tab-nav popup-product-thumb "> <a
                                                                        href="#tab2"> <img
                                                                            src="../../images/shop/products-v6-img2.jpg"
                                                                            alt="" /> </a> </li>
                                                                <li class="tab-nav popup-product-thumb "> <a
                                                                        href="#tab3"> <img
                                                                            src="../../images/shop/products-v6-img3.jpg"
                                                                            alt="" /> </a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="popup-product-main-image-box">
                                                            <div id="tab1" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img1.jpg"
                                                                        alt="" /> </div>
                                                            </div>
                                                            <div id="tab2" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img2.jpg"
                                                                        alt="" /> </div>
                                                            </div>
                                                            <div id="tab3" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img3.jpg"
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
                                                    <h3>Sport Sneakers</h3>
                                                    <div class="ratting"> <i class="flaticon-star"></i> <i
                                                            class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                        <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                        <span>(112)</span> </div>
                                                    <p class="text"> Hydrating Plumping Intense Shine Lip Colour
                                                    </p>
                                                    <div class="price">
                                                        <h2> $42 USD <del> $65 USD</del></h2>
                                                        <h6> In stuck</h6>
                                                    </div>
                                                    <div class="color-varient"> <a href="#0"
                                                                                   class="color-name pink"> <span>Pink</span> </a> <a
                                                            href="#0" class="color-name red"> <span>Red</span> </a>
                                                        <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                        </a> <a href="#0" class="color-name blue"> <span>Blue</span>
                                                        </a> <a href="#0" class="color-name black">
                                                            <span>Black</span> </a> </div>
                                                    <div class="add-product">
                                                        <h6>Qty:</h6>
                                                        <div class="button-group">
                                                            <div class="qtySelector text-center"> <span
                                                                    class="decreaseQty"><i
                                                                        class="flaticon-minus"></i> </span> <input
                                                                    type="number" class="qtyValue" value="1" />
                                                                <span class="increaseQty"> <i
                                                                        class="flaticon-plus"></i> </span> </div>
                                                            <button class="btn--primary "> Add to Cart </button>
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
                                <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                    <h5><a href="shop-details-3.html">Sport Sneakers</a></h5>
                                    <p>$159.00</p>
                                </div>
                            </li>
                            <!--End Products Six Single-->
                            <!--Start Products Six Single-->
                            <li class="products-three-single wow fadeInUp animated">
                                <div class="products-three-single-img"> <a href="shop-details-3.html"
                                                                           class="d-block"> <img src="../../images/home-three/productss3-2.jpg"
                                                                                                 alt="" />
                                    </a> <a href="cart.html" class="addcart btn--primary style2">
                                        Add To Cart </a>
                                    <div class="products-grid__usefull-links">
                                        <ul>
                                            <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                            wishlist</span> </a> </li>
                                            <li><a href="#0"> <i class="flaticon-left-and-right-arrows"></i> <span>
                                                            compare</span> </a> </li>
                                            <li><a href="#popup1" class="popup_link"> <i
                                                        class="flaticon-visibility"></i> <span> quick view</span>
                                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="popup1" class="product-gird__quick-view-popup mfp-hide">
                                    <div class="container">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-lg-6">
                                                <div class="quick-view__left-content">
                                                    <div class="tabs">
                                                        <div class="popup-product-thumb-box">
                                                            <ul>
                                                                <li class="tab-nav popup-product-thumb"> <a
                                                                        href="#tab11"> <img
                                                                            src="../../images/shop/products-v6-img1.jpg"
                                                                            alt="" /> </a> </li>
                                                                <li class="tab-nav popup-product-thumb "> <a
                                                                        href="#tab22"> <img
                                                                            src="../../images/shop/products-v6-img2.jpg"
                                                                            alt="" /> </a> </li>
                                                                <li class="tab-nav popup-product-thumb "> <a
                                                                        href="#tab33"> <img
                                                                            src="../../images/shop/products-v6-img3.jpg"
                                                                            alt="" /> </a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="popup-product-main-image-box">
                                                            <div id="tab11" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img1.jpg"
                                                                        alt="" /> </div>
                                                            </div>
                                                            <div id="tab22" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img2.jpg"
                                                                        alt="" /> </div>
                                                            </div>
                                                            <div id="tab33" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img3.jpg"
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
                                                            class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                        <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                        <span>(112)</span> </div>
                                                    <p class="text"> Hydrating Plumping Intense Shine Lip Colour
                                                    </p>
                                                    <div class="price">
                                                        <h2> $42 USD <del> $65 USD</del></h2>
                                                        <h6> In stuck</h6>
                                                    </div>
                                                    <div class="color-varient"> <a href="#0"
                                                                                   class="color-name pink"> <span>Pink</span> </a> <a
                                                            href="#0" class="color-name red"> <span>Red</span> </a>
                                                        <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                        </a> <a href="#0" class="color-name blue"> <span>Blue</span>
                                                        </a> <a href="#0" class="color-name black">
                                                            <span>Black</span> </a> </div>
                                                    <div class="add-product">
                                                        <h6>Qty:</h6>
                                                        <div class="button-group">
                                                            <div class="qtySelector text-center"> <span
                                                                    class="decreaseQty"><i
                                                                        class="flaticon-minus"></i> </span> <input
                                                                    type="number" class="qtyValue" value="1" />
                                                                <span class="increaseQty"> <i
                                                                        class="flaticon-plus"></i> </span> </div>
                                                            <button class="btn--primary "> Add to Cart </button>
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
                                <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                    <h5><a href="shop-details-3.html">Apex Sneakers </a></h5>
                                    <p>$159.00</p>
                                </div>
                            </li>
                            <!--End Products Six Single-->
                            <!--Start Products Six Single-->
                            <li class="products-three-single wow fadeInUp animated">
                                <div class="products-three-single-img">
                                    <a href="shop-details-3.html" class="d-block">
                                        <img src="../../images/home-three/productss3-3.jpg" alt="" /> </a>
                                    <div class="products-grid-one__badge-box"> <span
                                            class="bg_base badge new ">New</span> </div> <a href="cart.html"
                                                                                            class="addcart btn--primary style2"> Add To Cart </a>
                                    <div class="products-grid__usefull-links">
                                        <ul>
                                            <li><a href="#0"> <i class="flaticon-heart"> </i> <span> wishlist</span>
                                                </a> </li>
                                            <li><a href="#0"> <i class="flaticon-left-and-right-arrows"></i> <span>
                                                            compare</span> </a> </li>
                                            <li><a href="#popup2" class="popup_link"> <i
                                                        class="flaticon-visibility"></i> <span> quick view</span>
                                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="popup2" class="product-gird__quick-view-popup mfp-hide">
                                    <div class="container">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-lg-6">
                                                <div class="quick-view__left-content">
                                                    <div class="tabs">
                                                        <div class="popup-product-thumb-box">
                                                            <ul>
                                                                <li class="tab-nav popup-product-thumb"> <a
                                                                        href="#tab111"> <img
                                                                            src="../../images/shop/products-v6-img3.jpg"
                                                                            alt="" /> </a> </li>
                                                                <li class="tab-nav popup-product-thumb "> <a
                                                                        href="#tab222"> <img
                                                                            src="../../images/shop/products-v6-img4.jpg"
                                                                            alt="" /> </a> </li>
                                                                <li class="tab-nav popup-product-thumb "> <a
                                                                        href="#tab333"> <img
                                                                            src="../../images/shop/products-v6-img5.jpg"
                                                                            alt="" /> </a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="popup-product-main-image-box">
                                                            <div id="tab111" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img3.jpg"
                                                                        alt="" /> </div>
                                                            </div>
                                                            <div id="tab222" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img4.jpg"
                                                                        alt="" /> </div>
                                                            </div>
                                                            <div id="tab333" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img5.jpg"
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
                                                            class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                        <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                        <span>(112)</span> </div>
                                                    <p class="text"> Hydrating Plumping Intense Shine Lip Colour
                                                    </p>
                                                    <div class="price">
                                                        <h2> $42 USD <del> $65 USD</del></h2>
                                                        <h6> In stuck</h6>
                                                    </div>
                                                    <div class="color-varient"> <a href="#0"
                                                                                   class="color-name pink"> <span>Pink</span> </a> <a
                                                            href="#0" class="color-name red"> <span>Red</span> </a>
                                                        <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                        </a> <a href="#0" class="color-name blue"> <span>Blue</span>
                                                        </a> <a href="#0" class="color-name black">
                                                            <span>Black</span> </a> </div>
                                                    <div class="add-product">
                                                        <h6>Qty:</h6>
                                                        <div class="button-group">
                                                            <div class="qtySelector text-center"> <span
                                                                    class="decreaseQty"><i
                                                                        class="flaticon-minus"></i> </span> <input
                                                                    type="number" class="qtyValue" value="1" />
                                                                <span class="increaseQty"> <i
                                                                        class="flaticon-plus"></i> </span> </div>
                                                            <button class="btn--primary "> Add to Cart </button>
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
                                <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                    <h5><a href="shop-details-3.html">Fashionable Sneakers </a></h5>
                                    <p>$159.00</p>
                                </div>
                            </li>
                            <!--End Products Six Single-->
                            <!--Start Products Six Single-->
                            <li class="products-three-single wow fadeInUp animated">
                                <div class="products-three-single-img"> <a href="shop-details-3.html"
                                                                           class="d-block"> <img src="../../images/home-three/productss3-4.jpg"
                                                                                                 alt="" />
                                    </a> <a href="cart.html" class="addcart btn--primary style2">
                                        Add To Cart </a>
                                    <div class="products-grid__usefull-links">
                                        <ul>
                                            <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                            wishlist</span> </a> </li>
                                            <li><a href="compare.html"> <i
                                                        class="flaticon-left-and-right-arrows"></i> <span>
                                                            compare</span> </a> </li>
                                            <li><a href="#popup3" class="popup_link"> <i
                                                        class="flaticon-visibility"></i> <span> quick view</span>
                                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="popup3" class="product-gird__quick-view-popup mfp-hide">
                                    <div class="container">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-lg-6">
                                                <div class="quick-view__left-content">
                                                    <div class="tabs">
                                                        <div class="popup-product-thumb-box">
                                                            <ul>
                                                                <li class="tab-nav popup-product-thumb"> <a
                                                                        href="#tab1111"> <img
                                                                            src="../../images/shop/products-v6-img4.jpg"
                                                                            alt="" /> </a> </li>
                                                                <li class="tab-nav popup-product-thumb "> <a
                                                                        href="#tab2222"> <img
                                                                            src="../../images/shop/products-v6-img5.jpg"
                                                                            alt="" /> </a> </li>
                                                                <li class="tab-nav popup-product-thumb "> <a
                                                                        href="#tab3333"> <img
                                                                            src="../../images/shop/products-v6-img6.jpg"
                                                                            alt="" /> </a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="popup-product-main-image-box">
                                                            <div id="tab1111" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img4.jpg"
                                                                        alt="" /> </div>
                                                            </div>
                                                            <div id="tab2222" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img5.jpg"
                                                                        alt="" /> </div>
                                                            </div>
                                                            <div id="tab3333" class="tab-item popup-product-image">
                                                                <div class="popup-product-single-image"> <img
                                                                        src="../../images/shop/products-v6-img6.jpg"
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
                                                            class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                        <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                        <span>(112)</span> </div>
                                                    <p class="text"> Hydrating Plumping Intense Shine Lip Colour
                                                    </p>
                                                    <div class="price">
                                                        <h2> $42 USD <del> $65 USD</del></h2>
                                                        <h6> In stuck</h6>
                                                    </div>
                                                    <div class="color-varient"> <a href="#0"
                                                                                   class="color-name pink"> <span>Pink</span> </a> <a
                                                            href="#0" class="color-name red"> <span>Red</span> </a>
                                                        <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                        </a> <a href="#0" class="color-name blue"> <span>Blue</span>
                                                        </a> <a href="#0" class="color-name black">
                                                            <span>Black</span> </a> </div>
                                                    <div class="add-product">
                                                        <h6>Qty:</h6>
                                                        <div class="button-group">
                                                            <div class="qtySelector text-center"> <span
                                                                    class="decreaseQty"><i
                                                                        class="flaticon-minus"></i> </span> <input
                                                                    type="number" class="qtyValue" value="1" />
                                                                <span class="increaseQty"> <i
                                                                        class="flaticon-plus"></i> </span> </div>
                                                            <button class="btn--primary "> Add to Cart </button>
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
                                <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                    <h5><a href="shop-details-3.html">Outdoor Sports Shoes </a></h5>
                                    <p>$159.00</p>
                                </div>
                            </li>
                            <!--End Products Six Single-->
                            <!--Start Products Six Single-->
                            <li class="products-three-single wow fadeInUp animated">
                                <div class="products-three-single-img img-bg">
                                    <a href="shop-details-3.html" class="d-block">
                                        <img src="../../images/home-three/productss2-1.jpg" alt="" />
                                        <div class="products-grid-one__badge-box"> <span
                                                class="bg_black badge discount">-10%</span> </div> <a
                                            href="cart.html" class="addcart btn--primary style2"> Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span> </a> </li>
                                                <li><a href="compare.html"> <i
                                                            class="flaticon-left-and-right-arrows"></i> <span>
                                                                compare</span> </a> </li>
                                                <li><a href="#popup4" class="popup_link"> <i
                                                            class="flaticon-visibility"></i> <span> quick
                                                                view</span>
                                                    </a> </li>
                                            </ul>
                                        </div>
                                        <div id="popup4" class="product-gird__quick-view-popup mfp-hide">
                                            <div class="container">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-lg-6">
                                                        <div class="quick-view__left-content">
                                                            <div class="tabs">
                                                                <div class="popup-product-thumb-box">
                                                                    <ul>
                                                                        <li class="tab-nav popup-product-thumb"> <a
                                                                                href="#tab11111"> <img
                                                                                    src="../../images/shop/products-v6-img5.jpg"
                                                                                    alt="" /> </a> </li>
                                                                        <li class="tab-nav popup-product-thumb "> <a
                                                                                href="#tab22222"> <img
                                                                                    src="../../images/shop/products-v6-img6.jpg"
                                                                                    alt="" /> </a> </li>
                                                                        <li class="tab-nav popup-product-thumb "> <a
                                                                                href="#tab33333"> <img
                                                                                    src="../../images/shop/products-v6-img7.jpg"
                                                                                    alt="" /> </a> </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="popup-product-main-image-box">
                                                                    <div id="tab11111"
                                                                         class="tab-item popup-product-image">
                                                                        <div class="popup-product-single-image">
                                                                            <img src="../../images/shop/products-v6-img5.jpg"
                                                                                 alt="" /> </div>
                                                                    </div>
                                                                    <div id="tab22222"
                                                                         class="tab-item popup-product-image">
                                                                        <div class="popup-product-single-image">
                                                                            <img src="../../images/shop/products-v6-img6.jpg"
                                                                                 alt="" /> </div>
                                                                    </div>
                                                                    <div id="tab33333"
                                                                         class="tab-item popup-product-image">
                                                                        <div class="popup-product-single-image">
                                                                            <img src="../../images/shop/products-v6-img7.jpg"
                                                                                 alt="" /> </div>
                                                                    </div> <button class="prev"> <i
                                                                            class="flaticon-back"></i> </button>
                                                                    <button class="next"> <i
                                                                            class="flaticon-next"></i>
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
                                                                    class="flaticon-star"></i> <span>(112)</span>
                                                            </div>
                                                            <p class="text"> Hydrating Plumping Intense Shine Lip
                                                                Colour
                                                            </p>
                                                            <div class="price">
                                                                <h2> $42 USD <del> $65 USD</del></h2>
                                                                <h6> In stuck</h6>
                                                            </div>
                                                            <div class="color-varient"> <a href="#0"
                                                                                           class="color-name pink"> <span>Pink</span> </a>
                                                                <a href="#0" class="color-name red">
                                                                    <span>Red</span>
                                                                </a> <a href="#0"
                                                                        class="color-name yellow"><span>Yellow</span>
                                                                </a>
                                                                <a href="#0" class="color-name blue">
                                                                    <span>Blue</span>
                                                                </a> <a href="#0" class="color-name black">
                                                                    <span>Black</span> </a> </div>
                                                            <div class="add-product">
                                                                <h6>Qty:</h6>
                                                                <div class="button-group">
                                                                    <div class="qtySelector text-center"> <span
                                                                            class="decreaseQty"><i
                                                                                class="flaticon-minus"></i> </span>
                                                                        <input type="number" class="qtyValue"
                                                                               value="1" /> <span class="increaseQty">
                                                                                <i class="flaticon-plus"></i> </span>
                                                                    </div> <button class="btn--primary "> Add to
                                                                        Cart
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
                                <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                    <h5><a href="shop-details-3.html">High Quality Sneakers</a></h5>
                                    <p>$159.00</p>
                                </div>
                            </li>
                            <!--End Products Six Single-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Products Six-->


    <!--Start Products Eight-->
    <section class="product-slider-three position-relative pt-60 pb-60 overflow-hidden">
        <div class="container">
            <div class="section-header style3 text-center wow fadeInUp animated">
                <h2>Bestseller Shoes</h2>
                <p> Weekend Top Brands </p>
            </div>
            <div class="row wow fadeInUp mt-30 animated">
                <div class="col-xl-12">
                    <div class="product-slider-main position-relative ">
                        <div class="product-slider__single text-center">
                            <div
                                class="inner text-center d-flex flex-column justify-content-center align-items-center">
                                <div class="img-box">
                                    <img src="../../images/home-three/fimg.png" alt="" />
                                </div>
                                <div class="content-box mt-4"> <span>On Sale</span>
                                    <h2>$1499.00</h2>
                                    <h5>Enjoy 15% off your first order</h5>
                                    <div class="btn-box"> <a href="shop-details-3.html"
                                                             class="btn--primary style2">Select Option</a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-slider__single text-center">
                            <div
                                class="inner text-center d-flex flex-column justify-content-center align-items-center">
                                <div class="img-box">
                                    <img src="../../images/home-three/fimg.png" alt="" />
                                </div>
                                <div class="content-box mt-4"> <span>On Sale</span>
                                    <h2>$1499.00</h2>
                                    <h5>Enjoy 15% off your first order</h5>
                                    <div class="btn-box"> <a href="shop-details-3.html"
                                                             class="btn--primary style2">Select Option</a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-slider__single text-center">
                            <div
                                class="inner text-center d-flex flex-column justify-content-center align-items-center">
                                <div class="img-box">
                                    <img src="../../images/home-three/fimg.png" alt="" />
                                </div>
                                <div class="content-box mt-4"> <span>On Sale</span>
                                    <h2>$1499.00</h2>
                                    <h5>Enjoy 15% off your first order</h5>
                                    <div class="btn-box"> <a href="shop-details-3.html"
                                                             class="btn--primary style2">Select Option</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Products Eight-->

    <!--Start Products Seven-->
    <section class="products-cetagory-three pt-60 overflow-hidden">
        <div class="auto-container container">
            <div class="products-cetagory-three__inner">
                <div class="row justify-content-center">
                    <!--Start Products Seven Single-->
                    <!--End Products Seven Single-->
                    <!--Start Products Seven Single-->
                    <div class="col-xxl-3 col-md-6 wow fadeInUp animated">
                        <div class="products-cetagory-three__single height-400 style2">
                            <div class="inner h-100">
                                <h3>Take A Chance</h3>
                                <h2>80 <span>% <br> OFF</span></h2>
                                <div class="btn-box"> <a href="cart.html" class="button">Code: LOVEBITE</a> </div>
                                <p>Don't Miss Out: Coupon expires soon.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Products Seven Single-->
                    <!--Start Products Seven Single-->
                    <div class="col-xxl-3 col-md-6 wow fadeInUp animated">
                        <div class="products-cetagory-three__single style3">
                            <div class="products-cetagory-three__single-img  height-400  "
                                 style="background-image: url(../../images/shop/products-v7-img2.jpg);"> </div>
                            <div class="products-cetagory-three__single-content "> <span>Puma Hot Deal</span>
                                <h2>2022 Shoes</h2>
                                <div class="text">
                                    <p>Enable interoperable channels via <br> turnkey market models...</p>
                                </div>
                                <div class="btn-box"> <a href="shop-list-right-sidebar.html">Explore Items</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Products Seven Single-->
                </div>
            </div>
        </div>
    </section>
    <!--End Products Seven-->

    <!-- newsLetter-one style-two Start -->
    <section class="newsLetter-one border-0 style-two pt-60 pb-60 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="newsLetter-one__content-box d-flex align-items-center justify-content-md-start justify-content-center wow fadeInUp animated"
                         data-wow-delay="0.1s">
                        <div class="thumb"> <img src="../../images/home-two/envalop.png" alt=""> </div>
                        <h3 class="t36"> <span>Sign Up For </span> Newsletter </h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="newsLetter-one__content-box d-flex align-items-center justify-content-md-start justify-content-center wow fadeInUp animated "
                         data-wow-delay="0.2s">
                        <h6 class="text-md-start text-center"> Subscribe to ours weekly newsletter for all the
                            latest updates </h6>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="newsLetter-one__content-box three d-flex align-items-center justify-content-md-start justify-content-center wow fadeInUp animated"
                         data-wow-delay="0.3s">
                        <form action="#0" class="form">
                            <div class="newsLetter-one__subscribe-box"> <input type="email"
                                                                               placeholder="Email address" name="email"> <button type="submit"
                                                                                                                                 class="subscrib-btn"> Subscribe </button> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- newsLetter-one style-two End -->

    <!--Start Categories Two-->
    <section class="categories-three overflow-hidden">
        <div class="auto-container container">
            <div class="row">
                <div class="categories-three__inner pt-120 pb-120">
                    <div class="row align-items-center justify-content-xl-start justify-content-center">
                        <div class="col-xl-4 col-md-7">
                            <div class="categories-three__content text-xl-start text-center wow fadeInUp animated">
                                <div class="sec-title-style2 style3">
                                    <h2>Shop by Categories</h2>
                                </div>
                                <p>Continually enhance long-term don high impact niche markets whereas user centric
                                    niche markets. actualize backward compatible...</p>
                                <div class="btn-box"> <a href="shop-grid-left-sidebar.html"
                                                         class="btn--primary style2">Discover More</a> </div>
                            </div>
                        </div>

                        <div class="col-xl-8">
                            <div class="row  justify-content-center">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="categories-three__list-item mt-30 wow fadeInUp animated">
                                        <div class="categories-three__list-item-inner"> <a
                                                href="shop-grid-right-sidebar.html" class="img-box"> <img
                                                    src="../../images/home-three/categories-v2-img1.jpg" alt="" />
                                                <div class="text"> <span>369 Items</span> </div>
                                            </a>
                                            <div class="title text-center">
                                                <h4><a href="shop-grid-left-sidebar.html">Sport’s Shoes</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="categories-three__list-item mt-30 wow fadeInUp animated">
                                        <div class="categories-three__list-item-inner"> <a
                                                href="shop-grid-left-sidebar.html" class="img-box"> <img
                                                    src="../../images/home-three/categories-v2-img2.jpg" alt="" />
                                                <div class="text"> <span>369 Items</span> </div>
                                            </a>
                                            <div class="title text-center">
                                                <h4><a href="shop-grid-left-sidebar.html">Casual Shoes</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="categories-three__list-item mt-30 wow fadeInUp animated">
                                        <div class="categories-three__list-item-inner"> <a
                                                href="shop-grid-left-sidebar.html" class="img-box"> <img
                                                    src="../../images/home-three/categories-v2-img3.jpg" alt="" />
                                                <div class="text"> <span>369 Items</span> </div>
                                            </a>
                                            <div class="title text-center">
                                                <h4><a href="shop-grid-left-sidebar.html">Office Shoes</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Categories Two-->

    <!-- core-features Start -->
    <section class="core-features pt-120 mb-60 overflow-hidden">
        <div class="container auto-container">
            <div class="row mt--30">
                <div class="col-xxl-3 col-md-6 mt-30 wow fadeInUp animated " data-wow-delay="0.2s">
                    <div class="core-features__box d-flex ms-0"> <span class="one"></span> <span class="two"></span>
                        <div class="icon"> <img src="../../images/icon/f-icon-1.png" alt=""> </div>
                        <div class="core-features__box-content"> <a href="login.html" class="d-block">
                                <h4> Secure Payment </h4>
                            </a>
                            <p>Everybody different which the why give offer styles for every body.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6 mt-30 wow fadeInUp animated " data-wow-delay="0.3s">
                    <div class="core-features__box d-flex "> <span class="one"></span> <span class="two"></span>
                        <div class="icon"> <img src="../../images/icon/f-icon-2.png" alt=""> </div>
                        <div class="core-features__box-content"> <a href="login.html" class="d-block">
                                <h4> 27/7 Fast Delivery </h4>
                            </a>
                            <p>Everybody different which the why give offer styles for every body.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6 mt-30 wow fadeInUp animated " data-wow-delay="0.4s">
                    <div class="core-features__box d-flex "> <span class="one"></span> <span class="two"></span>
                        <div class="icon"> <img src="../../images/icon/f-icon-3.png" alt=""> </div>
                        <div class="core-features__box-content"> <a href="login.html" class="d-block">
                                <h4> Return & Refund </h4>
                            </a>
                            <p>Everybody different which the why give offer styles for every body.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6 mt-30 wow fadeInUp animated " data-wow-delay="0.5s">
                    <div class="core-features__box d-flex me-0"> <span class="one"></span> <span class="two"></span>
                        <div class="icon"> <img src="../../images/icon/f-icon-4.png" alt=""> </div>
                        <div class="core-features__box-content"> <a href="login.html" class="d-block">
                                <h4> Quality Support </h4>
                            </a>
                            <p>Everybody different which the why give offer styles for every body.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- review-one Start -->
    <section class="review-one pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="review-one__section-head text-center wow fadeInUp animated">
                        <div class="title">
                            <h2>What Client’s Say</h2>
                        </div>
                        <p>Over 10000 Reviews</p>
                    </div>
                </div>
                <div class="col-12 wow fadeInUp animated">
                    <div class="reviewOneSlider owl-carousel">
                        <div class="review-one__single-review">
                            <div class="review-one__single-content">
                                <div class="review-one__aurthor">
                                    <div class="thumb"> <img src="../../images/testimonial/testimonial-v1-1.png"
                                                             alt=""> </div> <span class="quate"> <i
                                            class="flaticon-right-quotes-symbol"></i> </span>
                                </div>
                                <div class="review-one__review-text">
                                    <p> “Quickly explot worldwide leadership long-term high-impact "outside the box
                                        thinking. Quickly network synergistic enterprise customer service” </p>
                                    <h4> <a href="#0">Ana Fleming </a> </h4> <span> Web Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="review-one__single-review">
                            <div class="review-one__single-content">
                                <div class="review-one__aurthor">
                                    <div class="thumb"> <img src="../../images/testimonial/testimonial-v1-2.png"
                                                             alt=""> </div> <span class="quate"> <i
                                            class="flaticon-right-quotes-symbol"></i> </span>
                                </div>
                                <div class="review-one__review-text">
                                    <p> “Quickly explot worldwide leadership long-term high-impact "outside the box
                                        thinking. Quickly network synergistic enterprise customer service” </p>
                                    <h4> <a href="#0">Elaine Hayes</a> </h4> <span>UI/UX Designer </span>
                                </div>
                            </div>
                        </div>
                        <div class="review-one__single-review">
                            <div class="review-one__single-content">
                                <div class="review-one__aurthor">
                                    <div class="thumb"> <img src="../../images/testimonial/testimonial-v1-3.png"
                                                             alt=""> </div> <span class="quate"> <i
                                            class="flaticon-right-quotes-symbol"></i> </span>
                                </div>
                                <div class="review-one__review-text">
                                    <p> “Quickly explot worldwide leadership long-term high-impact "outside the box
                                        thinking. Quickly network synergistic enterprise customer service” </p>
                                    <h4> <a href="#0">Jane Young </a> </h4> <span>Web Engineer </span>
                                </div>
                            </div>
                        </div>
                        <div class="review-one__single-review">
                            <div class="review-one__single-content">
                                <div class="review-one__aurthor">
                                    <div class="thumb"> <img src="../../images/testimonial/testimonial-v1-2.png"
                                                             alt=""> </div> <span class="quate"> <i
                                            class="flaticon-right-quotes-symbol"></i> </span>
                                </div>
                                <div class="review-one__review-text">
                                    <p> “Quickly explot worldwide leadership long-term high-impact "outside the box
                                        thinking. Quickly network synergistic enterprise customer service” </p>
                                    <h4> <a href="#0">Kim Douglas </a> </h4> <span>React Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- newsLetter-one Start -->


    <!--Start Blog Three-->
    <section class="blog-three pt-60 pb-120 overflow-hidden">
        <div class="container">
            <div class="section-header style3 text-center wow fadeInUp animated">
                <h2>Latest News </h2>
                <p> Weekend Updates </p>
            </div>
            <div class="row justify-content-center">
                <!--Start Blog Three Single-->
                <div class="col-xl-4 col-lg-4 col-sm-6 wow fadeInUp animated ">
                    <div class="blog-three__single mt-30 ">
                        <a href="blog-single.html" class="blog-three__single-img d-block">
                            <img src="../../images/blog/blog-v3-1.jpg" alt="" />
                        </a>
                        <div class="blog-three__single-content text-center"> <span>Vendora Style</span>
                            <h4><a href="blog-single.html">A Perfect Style With Our Fashion Shoes</a></h4>
                            <div class="btn-box"> <a href="blog-single.html">Read More</a> </div>
                        </div>
                    </div>
                </div>
                <!--End Blog Three Single-->
                <!--Start Blog Three Single-->
                <div class="col-xl-4 col-lg-4 col-sm-6 wow fadeInUp animated">
                    <div class="blog-three__single mt-30"> <a href="blog-single.html"
                                                              class="blog-three__single-img d-block"> <img src="../../images/blog/blog-v3-2.jpg"
                                                                                                           alt="" /> </a>
                        <div class="blog-three__single-content text-center"> <span>Vendora Style</span>
                            <h4><a href="blog-single.html">2021-2021 fall-winter men's shoe trends.</a></h4>
                            <div class="btn-box"> <a href="blog-single.html">Read More</a> </div>
                        </div>
                    </div>
                </div>
                <!--End Blog Three Single-->
                <!--Start Blog Three Single-->
                <div class="col-xl-4 col-lg-4 col-sm-6 wow fadeInUp animated">
                    <div class="blog-three__single mt-30"> <a href="blog-single.html"
                                                              class="blog-three__single-img d-block"> <img src="../../images/blog/blog-v3-3.jpg"
                                                                                                           alt="" /> </a>
                        <div class="blog-three__single-content text-center"> <span>Vendora Style</span>
                            <h4><a href="blog-single.html">What men's shoes will be in fashion in the spring </a>
                            </h4>
                            <div class="btn-box"> <a href="blog-single.html">Read More</a> </div>
                        </div>
                    </div>
                </div>
                <!--End Blog Three Single-->
            </div>
        </div>
    </section>
    <!--End Blog Three-->

    <!--Start Gallery Two-->
    <div class="gallery-two wow fadeInUp animated overflow-hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="gallery-two__slider "> <a href="../../images/home-three/gallery-v2-img1.jpg"
                                                          class="gallery-two__single"> <img src="../../images/home-three/gallery-v2-img1.jpg"
                                                                                            alt="" /> <span class="zoom-icon"> <i class="flaticon-expand"></i> </span> </a> <a
                            href="../../images/home-three/gallery-v2-img2.jpg" class="gallery-two__single"> <img
                                src="assets/images/home-three/gallery-v2-img2.jpg" alt="" /> <span
                                class="zoom-icon"> <i class="flaticon-expand"></i> </span> </a> <a
                            href="assets/images/home-three/gallery-v2-img3.jpg" class="gallery-two__single"> <img
                                src="assets/images/home-three/gallery-v2-img3.jpg" alt="" /> <span
                                class="zoom-icon"> <i class="flaticon-expand"></i> </span> </a> <a
                            href="assets/images/home-three/gallery-v2-img4.jpg" class="gallery-two__single"> <img
                                src="assets/images/home-three/gallery-v2-img4.jpg" alt="" /> <span
                                class="zoom-icon"> <i class="flaticon-expand"></i> </span> </a> <a
                            href="assets/images/home-three/gallery-v2-img5.jpg" class="gallery-two__single"> <img
                                src="assets/images/home-three/gallery-v2-img5.jpg" alt="" /> <span
                                class="zoom-icon"> <i class="flaticon-expand"></i> </span> </a> <a
                            href="assets/images/home-three/gallery-v2-img6.jpg" class="gallery-two__single"> <img
                                src="assets/images/home-three/gallery-v2-img6.jpg" alt="" /> <span
                                class="zoom-icon"> <i class="flaticon-expand"></i> </span> </a> <a
                            href="assets/images/home-three/gallery-v2-img2.jpg" class="gallery-two__single"> <img
                                src="assets/images/home-three/gallery-v2-img2.jpg" alt="" /> <span
                                class="zoom-icon"> <i class="flaticon-expand"></i> </span> </a> <a
                            href="assets/images/home-three/gallery-v2-img3.jpg" class="gallery-two__single"> <img
                                src="assets/images/home-three/gallery-v2-img3.jpg" alt="" /> <span
                                class="zoom-icon"> <i class="flaticon-expand"></i> </span> </a> <a
                            href="assets/images/home-three/gallery-v2-img4.jpg" class="gallery-two__single"> <img
                                src="assets/images/home-three/gallery-v2-img4.jpg" alt="" /> <span
                                class="zoom-icon"> <i class="flaticon-expand"></i> </span> </a> </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Gallery Two-->


</main>


<!--  Footer Three start -->

@endsection