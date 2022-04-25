@extends('layouts.app')
@section('content')

                    <div class="shopping-cart">
            <div class="shopping-cart-top">
                <div class="shopping-cart-header">
                    <h5 class="font-body--xxl-500">Shopping Cart (<span class="count">2</span>)</h5>
                    <button class="close">
                        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22.5" cy="22.5" r="22.5" fill="white" />
                            <path d="M28.75 16.25L16.25 28.75" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16.25 16.25L28.75 28.75" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <div class="shopping-cart__product-content">
                    <div class="shopping-cart__product-content-item">
                        <div class="img-wrapper">
                            <img src="{{ asset('front') }}/images/products/img-01.png" alt="product" />
                        </div>
                        <div class="text-content">
                            <h5 class="font-body--md-400">Fresh Indian Orange</h5>
                            <p class="font-body--md-400">1kg x <span class="font-body--md-500">12.00</span></p>
                        </div>
                    </div>
                    <button class="delete-item">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 23C18.0748 23 23 18.0748 23 12C23 5.92525 18.0748 1 12 1C5.92525 1 1 5.92525 1 12C1 18.0748 5.92525 23 12 23Z" stroke="#CCCCCC" stroke-miterlimit="10" />
                            <path d="M16 8L8 16" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16 16L8 8" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <div class="shopping-cart__product-content">
                    <div class="shopping-cart__product-content-item">
                        <div class="img-wrapper">
                            <img src="{{ asset('front') }}/images/products/img-01.png" alt="product" />
                        </div>
                        <div class="text-content">
                            <h5 class="font-body--md-400">Fresh Indian Orange</h5>
                            <p class="font-body--md-400">1kg x <span class="font-body--md-500">12.00</span></p>
                        </div>
                    </div>
                    <button class="delete-item">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 23C18.0748 23 23 18.0748 23 12C23 5.92525 18.0748 1 12 1C5.92525 1 1 5.92525 1 12C1 18.0748 5.92525 23 12 23Z" stroke="#CCCCCC" stroke-miterlimit="10" />
                            <path d="M16 8L8 16" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16 16L8 8" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="shopping-cart-bottom">
                <div class="shopping-cart-product-info">
                    <p class="product-count font-body--lg-400">2 Product</p>
                    <span class="product-price font-body--lg-500">$26.00</span>
                </div>

                <form action="#">
                    <button class="button button--lg w-100">Checkout</button>
                    <button class="button button--lg button--disable w-100">
                        go to cart
                    </button>
                </form>
            </div>
        </div>
<section class="banner banner--04">
            <div class="container">
                <div class="swiper-container banner-slider--04">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row banner--04__content">
                                <div class="col-lg-12">
                                    <div class="banner--04__img-wrapper">
                                        <img src="{{ asset('front') }}/images/banner/banner-lg-77.jpg" alt="banner" class="img-fluid" />
                                        <!-- <div class="off-sale">
                                            <p>
                                                <span>70%</span>
                                                off
                                            </p>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6">
                                    <div class="banner--04__text-content">
                                        <h5 class="title">Welcome to shopery</h5>
                                        <h2 class="font-title--xxxl">
                                            Fresh & Healthy Organic Food
                                        </h2>
                                        <p class="font-body--md-400">
                                            Free shipping on all your order. we deliver, you enjoy
                                        </p>
                                        <a href="#" class="button button--md">
                                            Shop now
                                            <span>
                                                <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16 7.50049H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M9.95001 1.47559L16 7.49959L9.95001 13.5246" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row banner--04__content">
                                <div class="col-lg-12">
                                    <div class="banner--04__img-wrapper">
                                        <img src="{{ asset('front') }}/images/banner/images.jpg" alt="banner" class="img-fluid" />
                                        <!-- <div class="off-sale">
                                            <p>
                                                <span>50%</span>
                                                off
                                            </p>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6">
                                    <div class="banner--04__text-content">
                                        <h5 class="title">Welcome to shopery</h5>
                                        <h2 class="font-title--xxxl">
                                            Fresh & Healthy Organic Food
                                        </h2>

                                        <p class="font-body--md-400">
                                            Free shipping on all your order. we deliver, you enjoy
                                        </p>
                                        <a href="#" class="button button--md">
                                            Shop now
                                            <span>
                                                <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16 7.50049H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M9.95001 1.47559L16 7.49959L9.95001 13.5246" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row banner--04__content">
                                <div class="col-lg-12">
                                    <div class="banner--04__img-wrapper">
                                        <img src="{{ asset('front') }}/images/banner/banner-sm-19.jpg" alt="banner" class="img-fluid" />
                                        <!-- <div class="off-sale">
                                            <p>
                                                <span>80%</span>
                                                off
                                            </p>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6">
                                    <div class="banner--04__text-content">
                                        <h5 class="title">Welcome to shopery</h5>
                                        <h2 class="font-title--xxxl">
                                            Fresh & Healthy Organic Food
                                        </h2>

                                        <p class="font-body--md-400">
                                            Free shipping on all your order. we deliver, you enjoy
                                        </p>
                                        <a href="#" class="button button--md">
                                            Shop now
                                            <span>
                                                <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16 7.50049H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M9.95001 1.47559L16 7.49959L9.95001 13.5246" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="arrows">
                    <button class="arrows__btn swiper-button--prev">
                        <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.25 7.22607H16.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.30005 1.20117L1.25005 7.22517L7.30005 13.2502" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="arrows__btn swiper-button--next">
                        <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 7.50049H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9.95001 1.47559L16 7.49959L9.95001 13.5246" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
</section>
<section class="call-to-action call-to-action--two">
                <div class="container-fluid">
                    <div class="row banner_home">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="{{ asset('front') }}/images/banner/banner_home.png" alt="img-01" id="banner_coupon">
                                </div>
                                <div class="col-lg-8">
                                    <div class="newsletter__leftcontent-text-content banner_text">
                                        <h2 class="font-body--xxxl-600">Welcome to HYPER APPS</h2>
                                        <p class="font-body--md-400">
                                            download app to get <span class="per_off">50% off</span> on your first order!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <button type="button" class="btn btn-md app_download_btn float-right">download app</button>
                        </div>
                    </div>
                    <!-- <div class="newsletter newsletter--two bg--gray-9 banner_home">
                        <div class="newsletter__leftcontent">
                            <img src="{{ asset('front') }}/images/banner/banner_home.png" alt="img-01" id="banner_coupon">
                            <div class="newsletter__leftcontent-text-content banner_text">
                                <h2 class="font-body--xxxl-600">Welcome to HYPER APPS</h2>
                                <p class="font-body--md-400">
                                    download app to get <span class="per_off">50% off</span> on your first order!
                                </p>
                            </div>
                        </div>
                        <div class="newsletter__rightcontent">
                            hi
                        </div>
                    </div> -->
                </div>
            </section>
<section class="popular-categories section section--md">
            <div class="container-fluid">
                <div class="row home_categories">
                <div class="section__head">
                    <h2 class="section--title-one font-title--sm">Popular Categories</h2>
                    <a href="shop-01.html">
                        View All
                        <span>
                            <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 7.50049H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M9.95001 1.47559L16 7.49959L9.95001 13.5246" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </a>
                </div>
                <!-- Desktop Versions -->
                <div class="popular-categories__wrapper">
                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="{{ asset('front') }}/images/categories/image-fruits.png" alt="img-01">
                        </div>
                        <h5 class="font-body--xl-500">Fresh Fruit</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="{{ asset('front') }}/images/categories/image-icon-vegitables.png" alt="img-01">
                        </div>
                        <h5 class="font-body--xl-500">Fresh Vegetables</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="{{ asset('front') }}/images/categories/image-meat.png" alt="img-01">
                        </div>
                        <h5 class="font-body--xl-500">Meat &amp; Fish</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="{{ asset('front') }}/images/categories/image-icon-snaks.png" alt="img-01">
                        </div>
                        <h5 class="font-body--xl-500">Snacks</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="{{ asset('front') }}/images/categories/img-12.png" alt="img-01">
                        </div>
                        <h5 class="font-body--xl-500">Beverages</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="{{ asset('front') }}/images/categories/image-icon-beauty.png" alt="img-01">
                        </div>
                        <h5 class="font-body--xl-500">Beauty &amp; Health</h5>
                    </a>
                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="{{ asset('front') }}/images/categories/image-fruits.png" alt="img-01">
                        </div>
                        <h5 class="font-body--xl-500">Fresh Fruit</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="{{ asset('front') }}/images/categories/image-icon-vegitables.png" alt="img-01">
                        </div>
                        <h5 class="font-body--xl-500">Fresh Vegetables</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="{{ asset('front') }}/images/categories/image-meat.png" alt="img-01">
                        </div>
                        <h5 class="font-body--xl-500">Meat &amp; Fish</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="{{ asset('front') }}/images/categories/image-icon-snaks.png" alt="img-01">
                        </div>
                        <h5 class="font-body--xl-500">Snacks</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="{{ asset('front') }}/images/categories/image-icon-snaks2.png" alt="img-01">
                        </div>
                        <h5 class="font-body--xl-500">Bread &amp; Bakery</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="{{ asset('front') }}/images/categories/img-06.png" alt="img-01">
                        </div>
                        <h5 class="font-body--xl-500">Baking Needs</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="{{ asset('front') }}/images/categories/img-07.png" alt="img-01">
                        </div>
                        <h5 class="font-body--xl-500">Cooking</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="{{ asset('front') }}/images/categories/img-08.png" alt="img-01">
                        </div>
                        <h5 class="font-body--xl-500">Diabetic Food</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="{{ asset('front') }}/images/categories/image-soda.png" alt="img-01">
                        </div>
                        <h5 class="font-body--xl-500">Dish Detergents</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="{{ asset('front') }}/images/categories/image-oil.png" alt="img-01">
                        </div>
                        <h5 class="font-body--xl-500">Oil</h5>
                    </a>
                </div>

                <!-- Mobile  Versions -->
                <div class="swiper-container popular-categories--slider swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                    <div class="swiper-wrapper" id="swiper-wrapper-39f96c9478149c109" aria-live="off" style="transition-duration: 300ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="10">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="{{ asset('front') }}/images/categories/image-soda.png" alt="img-01">
                                </div>
                                <h5 class="font-body--xl-500">Dish Detergents</h5>
                            </a>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="11">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="{{ asset('front') }}/images/categories/image-oil.png" alt="img-01">
                                </div>
                                <h5 class="font-body--xl-500">Oil</h5>
                            </a>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="0">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="{{ asset('front') }}/images/categories/image-fruits.png" alt="img-01">
                                </div>
                                <h5 class="font-body--xl-500">Fresh Fruit</h5>
                            </a>
                        </div>

                        <div class="swiper-slide" data-swiper-slide-index="1">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="{{ asset('front') }}/images/categories/image-icon-vegitables.png" alt="img-01">
                                </div>
                                <h5 class="font-body--xl-500">Fresh Vegetables</h5>
                            </a>
                        </div>

                        <div class="swiper-slide" data-swiper-slide-index="2">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="{{ asset('front') }}/images/categories/image-meat.png" alt="img-01">
                                </div>
                                <h5 class="font-body--xl-500">Meat &amp; Fish</h5>
                            </a>
                        </div>

                        <div class="swiper-slide" data-swiper-slide-index="3">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="{{ asset('front') }}/images/categories/image-icon-snaks.png" alt="img-01">
                                </div>
                                <h5 class="font-body--xl-500">Snacks</h5>
                            </a>
                        </div>

                        <div class="swiper-slide" data-swiper-slide-index="4">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="{{ asset('front') }}/images/categories/img-12.png" alt="img-01">
                                </div>
                                <h5 class="font-body--xl-500">Beverages</h5>
                            </a>
                        </div>

                        <div class="swiper-slide" data-swiper-slide-index="5">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="{{ asset('front') }}/images/categories/image-icon-beauty.png" alt="img-01">
                                </div>
                                <h5 class="font-body--xl-500">Beauty &amp; Health</h5>
                            </a>
                        </div>

                        <div class="swiper-slide" data-swiper-slide-index="6">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="{{ asset('front') }}/images/categories/image-icon-snaks2.png" alt="img-01">
                                </div>
                                <h5 class="font-body--xl-500">Bread &amp; Bakery</h5>
                            </a>
                        </div>

                        <div class="swiper-slide" data-swiper-slide-index="7">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="{{ asset('front') }}/images/categories/img-06.png" alt="img-01">
                                </div>
                                <h5 class="font-body--xl-500">Baking Needs</h5>
                            </a>
                        </div>

                        <div class="swiper-slide" data-swiper-slide-index="8">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="{{ asset('front') }}/images/categories/img-07.png" alt="img-01">
                                </div>
                                <h5 class="font-body--xl-500">Cooking</h5>
                            </a>
                        </div>

                        <div class="swiper-slide" data-swiper-slide-index="9">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="{{ asset('front') }}/images/categories/img-08.png" alt="img-01">
                                </div>
                                <h5 class="font-body--xl-500">Diabetic Food</h5>
                            </a>
                        </div>

                        <div class="swiper-slide" data-swiper-slide-index="10">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="{{ asset('front') }}/images/categories/image-soda.png" alt="img-01">
                                </div>
                                <h5 class="font-body--xl-500">Dish Detergents</h5>
                            </a>
                        </div>

                        <div class="swiper-slide" data-swiper-slide-index="11">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="{{ asset('front') }}/images/categories/image-oil.png" alt="img-01">
                                </div>
                                <h5 class="font-body--xl-500">Oil</h5>
                            </a>
                        </div>
                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="{{ asset('front') }}/images/categories/image-fruits.png" alt="img-01">
                                </div>
                                <h5 class="font-body--xl-500">Fresh Fruit</h5>
                            </a>
                        </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="{{ asset('front') }}/images/categories/image-icon-vegitables.png" alt="img-01">
                                </div>
                                <h5 class="font-body--xl-500">Fresh Vegetables</h5>
                            </a>
                        </div></div>
                    <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-bullets-dynamic"></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            </div>
        </section>
<section class="section section">
            <div class="container-fluid">
                <div class="row home_products">
                    <div class="section__head">
                        <h2 class="section--title-one font-title--sm">Best Seller</h2>

                        <div class="arrows category--top-arrows-mb">
                            <a href="shop-01.html" class="seemore_products_home">
                            See More &nbsp;
                            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                        </a>
                            <button class="arrows__btn swiper-button--prev">
                                <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.25 7.22607H16.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.30005 1.20117L1.25005 7.22517L7.30005 13.2502" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button class="arrows__btn swiper-button--next">
                                <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 7.50049H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.95001 1.47559L16 7.49959L9.95001 13.5246" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <!-- <div class="section__head section__head--three section__head--three-center">
                        <h2 class="section--title-two font-title--lg">
                            Best Seller
                            <span class="title-bar"></span>
                        </h2>
                        <div class="arrows category--top-arrows-mb">
                            <button class="arrows__btn swiper-button--prev">
                                <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.25 7.22607H16.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.30005 1.20117L1.25005 7.22517L7.30005 13.2502" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button class="arrows__btn swiper-button--next">
                                <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 7.50049H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.95001 1.47559L16 7.49959L9.95001 13.5246" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div> -->
                    <div class="swiper-container category--top-slider--two">
                        <div class="swiper-wrapper">
                            <?php for($i=0;$i<10;$i++){?>
                            <div class="swiper-slide">
                                <div class="cards-md">
                                    <div class="cards-md__img-wrapper home_product_card_img">
                                        <a href="product-details.html">
                                            <img src="{{ asset('front') }}/images/products/img-02.png" alt="products" class="home_product_img">
                                        </a>
                                        <span class="tag danger font-body--md-400">sale 50%</span>
                                        <div class="cards-md__favs-list">
                                            <span class="action-btn">
                                                <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.9996 16.5451C-6.66672 7.3333 4.99993 -2.6667 9.9996 3.65668C14.9999 -2.6667 26.6666 7.3333 9.9996 16.5451Z" stroke="currentColor" stroke-width="1.5"></path>
                                                </svg>
                                            </span>
                                            <span class="action-btn" data-bs-toggle="modal" data-bs-target="#productView">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 3.54102C3.75 3.54102 1.25 10.0001 1.25 10.0001C1.25 10.0001 3.75 16.4577 10 16.4577C16.25 16.4577 18.75 10.0001 18.75 10.0001C18.75 10.0001 16.25 3.54102 10 3.54102V3.54102Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M10 13.125C10.8288 13.125 11.6237 12.7958 12.2097 12.2097C12.7958 11.6237 13.125 10.8288 13.125 10C13.125 9.1712 12.7958 8.37634 12.2097 7.79029C11.6237 7.20424 10.8288 6.875 10 6.875C9.1712 6.875 8.37634 7.20424 7.79029 7.79029C7.20424 8.37634 6.875 9.1712 6.875 10C6.875 10.8288 7.20424 11.6237 7.79029 12.2097C8.37634 12.7958 9.1712 13.125 10 13.125V13.125Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="cards-md__info d-flex justify-content-between align-items-center">
                                        <div class="cards-md__info-left">
                                            <a href="product-details.html" >
                                                <h6 class="font-body--md-400">Orange{{$i}}</h6>
                                            </a>
                                            <select class="form-select select_qty_home_Card">
                                                <option>1KG</option>
                                                <option>2KG</option>
                                                <option>3KG</option>
                                            </select>
                                            <div class="cards-md__info-price">
                                                <span class="font-body--lg-500 card_home_main_price">$14.99</span>
                                                <del class="font-body--lg-200">$14.99</del>
                                            </div>
                                            <!-- <ul class="cards-md__info-rating d-flex">
                                                <li>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z" fill="#FF8A00"></path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z" fill="#FF8A00"></path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z" fill="#FF8A00"></path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z" fill="#FF8A00"></path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z" fill="#CCCCCC"></path>
                                                    </svg>
                                                </li>
                                            </ul> -->

                                            <div class="button-card-home-add">
                                                <button class="btn btn-sm btn-addcart-home">ADD</button>
                                            </div>
                                        </div>
                                        <!-- <div class="cards-md__info-right">
                                            <span class="action-btn">
                                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.66667 8.83333H4.16667L2.5 18H17.5L15.8333 8.83333H13.3333M6.66667 8.83333V6.33333C6.66667 4.49239 8.15905 3 10 3V3C11.8409 3 13.3333 4.49238 13.3333 6.33333V8.83333M6.66667 8.83333H13.3333M6.66667 8.83333V11.3333M13.3333 8.83333V11.3333" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                   <!--  <div class="arrows category--top-arrows-lg">
                        <button class="arrows__btn swiper-button--prev">
                            <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.25 7.22607H16.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7.30005 1.20117L1.25005 7.22517L7.30005 13.2502" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button class="arrows__btn swiper-button--next">
                            <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 7.50049H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.95001 1.47559L16 7.49959L9.95001 13.5246" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div> -->
                </div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@stop