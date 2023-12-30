<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akira Jweller</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('media/favicon.png') }}">

    <!-- Dependency Styles -->
    <link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('libs/feather-font/css/iconfont.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('libs/icomoon-font/css/icomoon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('libs/font-awesome/css/font-awesome.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('libs/wpbingofont/css/wpbingofont.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('libs/elegant-icons/css/elegant.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('libs/slick/css/slick.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('libs/slick/css/slick-theme.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('libs/mmenu/css/mmenu.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('libs/slider/css/jslider.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('libs/select2/css/select2.min.css') }}"> --}}

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">
</head>

<body class="page">
    <div id="page" class="hfeed page-wrapper">
        <header id="site-header" class="site-header header-v1">
            <div class="header-mobile">
                <div class="section-padding">
                    <div class="section-container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-left">
                                <div class="navbar-header">
                                    <button type="button" id="show-megamenu" class="navbar-toggle"></button>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 header-center">
                                <div class="site-logo">
                                    <a href="{{ route('home') }}">
                                        <img width="400" height="79" src="{{asset('media/akira-logo.png')}}" alt="Mojuri – Jewelry Store HTML Template" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-right">
                                <div class="mojuri-topcart dropdown">
                                    <div class="dropdown mini-cart top-cart">
                                        <div class="remove-cart-shadow"></div>
                                        <a class="dropdown-toggle cart-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="icons-cart"><i class="icon-large-paper-bag"></i><span class="cart-count">{{ $cnt }}</span></div>
                                        </a>
                                        <div class="dropdown-menu cart-popup">
                                            {{-- <div class="cart-empty-wrap">
                                            <ul class="cart-list">
                                                <li class="empty">
                                                    <span>No products in the cart.</span>
                                                    <a class="go-shop" href="#">GO TO SHOP<i aria-hidden="true" class="arrow_right"></i></a>
                                                </li>
                                            </ul>
                                        </div> --}}
                                            <div class="cart-list-wrap">
                                                <style>
                                                    .removed-new {
                                                        text-indent: -1px;
                                                        line-height: 17px;
                                                        color: #000;
                                                        border-image: none;
                                                        border-color: #000;
                                                        text-align: center;
                                                        border-style: solid;
                                                        border-width: 0.75pt;
                                                        -webkit-border-radius: 50%;
                                                        height: 0.1875in;
                                                        width: 18px;
                                                        top: 0.020833333in;
                                                        right: 0.3125pc;
                                                        position: absolute;
                                                    }

                                                </style>
                                                <ul class="cart-list ">
                                                    @foreach ($cart as $item)
                                                    <?php $price += $item->product->price; ?>
                                                    <li class="mini-cart-item">
                                                        <a href="{{ route('cart.delete', $item->id) }}" class="removed-new" title="Remove this item"><i class="icon_close"></i></a>
                                                        <a href="{{ route('product', $item->product->slug) }}" class="product-image"><img width="600" height="600" src="{{ asset('storage/' . $item->product->image) }}" alt=""></a>
                                                        <a href="#" class="product-name">{{ $item->product->name }}</a>
                                                        {{-- <div class="quantity">Qty: 1</div> --}}
                                                        <div class="price">${{ $item->product->price }}</div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                                <div class="total-cart">
                                                    <div class="title-total">Total: </div>
                                                    <div class="total-price"><span>${{ $price }}</span></div>
                                                </div>
                                                {{-- <div class="free-ship">
                                                <div class="title-ship">Buy <strong>$400</strong> more to enjoy <strong>FREE Shipping</strong></div>
                                                <div class="total-percent">
                                                    <div class="percent" style="width:20%"></div>
                                                </div>
                                            </div> --}}
                                                <div class="buttons">
                                                    <a href="{{ route('cart.show') }}" class="button btn view-cart btn-primary">View cart</a>
                                                    {{-- <a href="#" class="button btn checkout btn-default">Check out</a> --}}
                                                </div>
                                            </div>
                                        </div>

                                        {{-- <div class="dropdown-menu cart-popup">
                                            <div class="cart-empty-wrap">
                                                <ul class="cart-list">
                                                    <li class="empty">
                                                        <span>No products in the cart.</span>
                                                        <a class="go-shop" href="#">GO TO SHOP<i aria-hidden="true" class="arrow_right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="cart-list-wrap">
                                                <ul class="cart-list ">
                                                    <li class="mini-cart-item">
                                                        <a href="#" class="remove" title="Remove this item"><i class="icon_close"></i></a>
                                                        <a href="#" class="product-image"><img width="600" height="600" src="media/product/3.jpg" alt=""></a>
                                                        <a href="#" class="product-name">Twin Hoops</a>
                                                        <div class="quantity">Qty: 1</div>
                                                        <div class="price">$150.00</div>
                                                    </li>
                                                    <li class="mini-cart-item">
                                                        <a href="#" class="remove" title="Remove this item"><i class="icon_close"></i></a>
                                                        <a href="#" class="product-image"><img width="600" height="600" src="media/product/1.jpg" alt=""></a>
                                                        <a href="#" class="product-name">Medium Flat Hoops</a>
                                                        <div class="quantity">Qty: 1</div>
                                                        <div class="price">$100.00</div>
                                                    </li>
                                                </ul>
                                                <div class="total-cart">
                                                    <div class="title-total">Total: </div>
                                                    <div class="total-price"><span>$250.00</span></div>
                                                </div>
                                                <div class="free-ship">
                                                    <div class="title-ship">Buy <strong>$400</strong> more to enjoy <strong>FREE Shipping</strong></div>
                                                    <div class="total-percent">
                                                        <div class="percent" style="width:20%"></div>
                                                    </div>
                                                </div>
                                                <div class="buttons">
                                                    <a href="#" class="button btn view-cart btn-primary">View cart</a>
                                                    <a href="#" class="button btn checkout btn-default">Check out</a>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header-mobile-fixed">
                    <!-- Login -->
                    <div class="my-account">
                        <div class="login-header">
                            @if(auth() && auth()->user() && auth()->user()->email != "admin@user.com")
                            <a href="{{ route('account') }}"><i class="wpb-icon-user"></i> {{ auth()->user()->name  }} </a>
                            @else
                            <div class="login-header icon">
                                <a class="active-login" href="#"><i class="wpb-icon-user"></i></a>
                                <div class="form-login-register {{ session('test') }}">
                                    <div class="box-form-login">
                                        <div class="active-login"></div>
                                        <div class="box-content">
                                            <div class="form-login active">
                                                <form id="login_ajax" action="{{ route('login') }}" method="post" class="login">
                                                    @csrf
                                                    <h2>Sign in</h2>
                                                    <p class="status"></p>
                                                    <div class="content">
                                                        <div class="username">
                                                            <input type="email" required="required" class="input-text" name="email" id="username" placeholder="Your email" />
                                                        </div>
                                                        <div class="password">
                                                            <input class="input-text" required="required" type="password" name="password" id="password" placeholder="Password" />
                                                        </div>
                                                        {{-- <div class="rememberme-lost"> --}}
                                                        {{-- <div class="rememberme">
                                                                <input name="rememberme" type="checkbox" id="rememberme" value="forever" />
                                                                <label for="rememberme" class="inline">Remember me</label>
                                                            </div> --}}
                                                        {{-- <div class="lost_password">
                                                                <a href="forgot-password.html">Lost your password?</a>
                                                            </div> --}}
                                                        {{-- </div> --}}
                                                        <div class="button-login">
                                                            <input type="submit" class="button" name="login" value="Login" />
                                                        </div>
                                                        <div class="button-next-reregister">Create An Account</div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="form-register">
                                                <form action="{{ route('register') }}" method="post" class="register">
                                                    @csrf
                                                    <h2>REGISTER</h2>
                                                    <div class="content">
                                                        <div class="email">
                                                            <input type="text" class="input-text" placeholder="Full name" name="name" />
                                                        </div>
                                                        <div class="email">
                                                            <input type="email" class="input-text" placeholder="Email" name="email" id="reg_email" value="" />
                                                        </div>
                                                        <div class="password">
                                                            <input type="password" class="input-text" placeholder="Password" name="password" id="reg_password" />
                                                        </div>
                                                        <div class="button-register">
                                                            <input type="submit" class="button" name="register" value="Register" />
                                                        </div>
                                                        <div class="button-next-login">Already has an account</div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Shop -->
                    {{-- <div class="shop-page">
                        <a href="#"><i class="wpb-icon-shop"></i></a>
                    </div> --}}


                    <!-- Search -->
                    {{-- <div class="search-box">
                        <div class="search-toggle"><i class="wpb-icon-magnifying-glass"></i></div>
                    </div> --}}

                    <!-- Wishlist -->
                    {{-- <div class="wishlist-box">
                        <a href="shop-wishlist.html"><i class="wpb-icon-heart"></i></a>
                    </div> --}}
                </div>
            </div>

            <x-header></x-header>

        </header>

        {{ $slot }}

        <footer id="site-footer" class="site-footer background four-columns m-t-0">
            <div class="footer">
                <div class="section-padding">
                    <div class="section-container">
                        <div class="block-widget-wrap">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 column-1">
                                    <div class="block block-menu m-b-20">
                                        <h2 class="block-title">Contact Us</h2>
                                        <div class="block-content">
                                            <ul>
                                                <li>
                                                    <span>Address:</span> 77, Parkwood village drive, Toronto
                                                </li>
                                                <li>
                                                    <span>Tel:</span> 647-745-5143
                                                </li>
                                                <li>
                                                    <span>Email:</span> <a href="mailto:support@akirajwellery.com">support@akirajwellery.com</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="block block-social">
                                        <ul class="social-link">
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 column-2">
                                    <div class="block block-menu">
                                        <h2 class="block-title">Customer Services</h2>
                                        <div class="block-content">
                                            <ul>
                                                <li>
                                                    <a href="{{ route('contact') }}">Contact Us</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('contact') }}">Track Your Order</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('contact') }}">Product Care & Repair</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('contact') }}">Book an Appointment</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('about') }}">Frequently Asked Questions</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('contact') }}">Shipping & Returns</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 column-3">
                                    <div class="block block-menu">
                                        <h2 class="block-title">About Us</h2>
                                        <div class="block-content">
                                            <ul>
                                                <li>
                                                    <a href="{{ route('about') }}">About Us</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('about') }}">FAQ</a>
                                                </li>
                                                <li>
                                                    <a href="#">Our Producers</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('about') }}">Sitemap</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('about') }}">Terms & Conditions</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('about') }}">Privacy Policy</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 column-4">
                                    <div class="block block-menu">
                                        <h2 class="block-title">Catalog</h2>
                                        <div class="block-content">
                                            <ul>
                                                @foreach ($categories as $cat)
                                                <li>
                                                    <a href="{{ route('category', $cat->id) }}">{{ $cat->name }}</a>
                                                </li>
                                                @endforeach

                                                {{-- <li>
                                                    <a href="#">Necklaces</a>
                                                </li>
                                                <li>
                                                    <a href="#">Bracelets</a>
                                                </li>
                                                <li>
                                                    <a href="#">Rings</a>
                                                </li>
                                                <li>
                                                    <a href="#">Jewelry Box</a>
                                                </li>
                                                <li>
                                                    <a href="#">Studs</a>
                                                </li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="section-padding">
                    <div class="section-container">
                        <div class="block-widget-wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="footer-left">
                                        <p class="copyright">Copyright © 2023. All Right Reserved</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="footer-right">
                                        <div class="block block-image">
                                            <img width="309" height="32" src="media/payments.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Back Top button -->
    <div class="back-top button-show">
        <i class="arrow_carrot-up"></i>
    </div>

    <!-- Search -->
    <div class="search-overlay">
        <div class="close-search"></div>
        <div class="wrapper-search">
            <form role="search" method="get" class="search-from ajax-search" action="#">
                <a href="#" class="search-close"></a>
                <div class="search-box">
                    <button id="searchsubmit" class="btn" type="submit">
                        <i class="icon-search"></i>
                    </button>
                    <input type="text" autocomplete="off" value="" name="s" class="input-search s" placeholder="Search...">
                    <div class="content-menu_search">
                        <label>Suggested</label>
                        <ul id="menu_search" class="menu">
                            <li><a href="#">Earrings</a></li>
                            <li><a href="#">Necklaces</a></li>
                            <li><a href="#">Bracelets</a></li>
                            <li><a href="#">Jewelry Box</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Wishlist -->
    {{-- <div class="wishlist-popup">
        <div class="wishlist-popup-inner">
            <div class="wishlist-popup-content">
                <div class="wishlist-popup-content-top">
                    <span class="wishlist-name">Wishlist</span>
                    <span class="wishlist-count-wrapper"><span class="wishlist-count">2</span></span>
                    <span class="wishlist-popup-close"></span>
                </div>
                <div class="wishlist-popup-content-mid">
                    <table class="wishlist-items">
                        <tbody>
                            <tr class="wishlist-item">
                                <td class="wishlist-item-remove"><span></span></td>
                                <td class="wishlist-item-image">
                                    <a href="#">
                                        <img width="600" height="600" src="media/product/3.jpg" alt="">
                                    </a>
                                </td>
                                <td class="wishlist-item-info">
                                    <div class="wishlist-item-name">
                                        <a href="#">Twin Hoops</a>
                                    </div>
                                    <div class="wishlist-item-price">
                                        <span>$150.00</span>
                                    </div>
                                    <div class="wishlist-item-time">June 4, 2022</div>
                                </td>
                                <td class="wishlist-item-actions">
                                    <div class="wishlist-item-stock">
                                        In stock
                                    </div>
                                    <div class="wishlist-item-add">
                                        <div data-title="Add to cart">
                                            <a rel="nofollow" href="#">Add to cart</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="wishlist-item">
                                <td class="wishlist-item-remove"><span></span></td>
                                <td class="wishlist-item-image">
                                    <a href="#">
                                        <img width="600" height="600" src="media/product/4.jpg" alt="">
                                    </a>
                                </td>
                                <td class="wishlist-item-info">
                                    <div class="wishlist-item-name">
                                        <a href="#">Yilver And Turquoise Earrings</a>
                                    </div>
                                    <div class="wishlist-item-price">
                                        <del aria-hidden="true"><span>$150.00</span></del>
                                        <ins><span>$100.00</span></ins>
                                    </div>
                                    <div class="wishlist-item-time">June 4, 2022</div>
                                </td>
                                <td class="wishlist-item-actions">
                                    <div class="wishlist-item-stock">
                                        In stock
                                    </div>
                                    <div class="wishlist-item-add">
                                        <div data-title="Add to cart">
                                            <a rel="nofollow" href="#">Add to cart</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="wishlist-popup-content-bot">
                    <div class="wishlist-popup-content-bot-inner">
                        <a class="wishlist-page" href="shop-wishlist.html">
                            Open wishlist page
                        </a>
                        <span class="wishlist-continue" data-url="">
                            Continue shopping
                        </span>
                    </div>
                    <div class="wishlist-notice wishlist-notice-show">Added to the wishlist!</div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Compare -->
    <div class="compare-popup">
        <div class="compare-popup-inner">
            <div class="compare-table">
                <div class="compare-table-inner">
                    <a href="#" id="compare-table-close" class="compare-table-close">
                        <span class="compare-table-close-icon"></span>
                    </a>
                    <div class="compare-table-items">
                        <table id="product-table" class="product-table">
                            <thead>
                                <tr>
                                    <th>
                                        <a href="#" class="compare-table-settings">Settings</a>
                                    </th>
                                    <th>
                                        <a href="#">Twin Hoops</a> <span class="remove">remove</span>
                                    </th>
                                    <th>
                                        <a href="#">Medium Flat Hoops</a> <span class="remove">remove</span>
                                    </th>
                                    <th>
                                        <a href="#">Bold Pearl Hoop Earrings</a> <span class="remove">remove</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tr-image">
                                    <td class="td-label">Image</td>
                                    <td>
                                        <a href="#">
                                            <img width="600" height="600" src="media/product/3.jpg" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <img width="600" height="600" src="media/product/1.jpg" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <img width="600" height="600" src="media/product/2.jpg" alt="">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="tr-sku">
                                    <td class="td-label">SKU</td>
                                    <td>VN00189</td>
                                    <td></td>
                                    <td>D1116</td>
                                </tr>
                                <tr class="tr-rating">
                                    <td class="td-label">Rating</td>
                                    <td>
                                        <div class="star-rating">
                                            <span style="width:80%"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="star-rating">
                                            <span style="width:100%"></span>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr class="tr-price">
                                    <td class="td-label">Price</td>
                                    <td><span class="amount">$150.00</span></td>
                                    <td><del><span class="amount">$150.00</span></del> <ins><span class="amount">$100.00</span></ins></td>
                                    <td><span class="amount">$200.00</span></td>
                                </tr>
                                <tr class="tr-add-to-cart">
                                    <td class="td-label">Add to cart</td>
                                    <td>
                                        <div data-title="Add to cart">
                                            <a href="#" class="button">Add to cart</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-title="Add to cart">
                                            <a href="#" class="button">Add to cart</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-title="Add to cart">
                                            <a href="#" class="button">Add to cart</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="tr-description">
                                    <td class="td-label">Description</td>
                                    <td>Phasellus sed volutpat orci. Fusce eget lore mauris vehicula elementum gravida nec dui. Aenean aliquam varius ipsum, non ultricies tellus sodales eu. Donec dignissim viverra nunc, ut aliquet magna posuere eget.</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</td>
                                    <td>The EcoSmart Fleece Hoodie full-zip hooded jacket provides medium weight fleece comfort all year around. Feel better in this sweatshirt because Hanes keeps plastic bottles of landfills by using recycled polyester.7.8 ounce fleece sweatshirt made with up to 5 percent polyester created from recycled plastic.</td>
                                </tr>
                                <tr class="tr-content">
                                    <td class="td-label">Content</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</td>
                                </tr>
                                <tr class="tr-dimensions">
                                    <td class="td-label">Dimensions</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Dependency Scripts -->
    <script src="{{ asset('libs/popper/js/popper.min.js') }}"></script>
    <script src="{{ asset('libs/jquery/js/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('libs/slick/js/slick.min.js') }}"></script>
    <script src="{{ asset('libs/mmenu/js/jquery.mmenu.all.min.js') }}"></script>
    <script src="{{ asset('libs/slider/js/tmpl.js') }}"></script>
    <script src="{{ asset('libs/slider/js/jquery.dependClass-0.1.js') }}"></script>
    <script src="{{ asset('libs/slider/js/draggable-0.1.js') }}"></script>
    <script src="{{ asset('libs/slider/js/jquery.slider.js') }}"></script>
    <script src="{{ asset('libs/elevatezoom/js/jquery.elevatezoom.js')}}"></script>
    {{-- <script src="{{ asset('libs/select2/js/select2.min.js')}}"></script> --}}

    <!-- Site Scripts -->
    <script src="{{ asset('assets/js/app.js')}}"></script>
</body>
</html>
