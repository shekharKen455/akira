<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Welcome to Akira Jewellers, Toronto's home for personalized elegance. We take pride in being Canada-based jewellers, known for our exquisite custom 18-carat gold-plated photo pendants crafted with precision using state-of-the-art laser technology. Alongside our sterling silver jewellery collection, encompassing necklaces, rings, bracelets, and earrings, we are recognized for our reliability and commitment to exceptional service. Explore our pieces and experience the embodiment of quality and reliability at Akira Jewellers.">
    <link rel="icon" type="image/x-icon" href="{{ asset('media/favicon.png') }}">
    <title>Akira Jewellery</title>

    <!-- Favicon -->
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('media/favicon.png') }}"> --}}

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

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
                                                    <?php $price += $item['product']->price; ?>
                                                    <li class="mini-cart-item">
                                                        <a href="{{ route('cart.delete', $item['id']) }}" class="removed-new" title="Remove this item"><i class="icon_close"></i></a>
                                                        <a href="{{ route('product', $item['product']->slug) }}" class="product-image"><img width="600" height="600" src="{{ asset('storage/' . $item['product']->image) }}" alt=""></a>
                                                        <a href="#" class="product-name">{{ $item['product']->name }}</a>
                                                        {{-- <div class="quantity">Qty: 1</div> --}}
                                                        <div class="price">${{ $item['product']->price }}</div>
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
                    <!-- <div class="my-account">
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
                    </div> -->

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
                                                    <span>Email:</span> <a href="mailto:Akirajewellery.ca@gmail.com">Akirajewellery.ca@gmail.com</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="block block-social">
                                        <ul class="social-link">
                                            <li><a href="https://www.instagram.com/akirajewellery/"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="https://www.snapchat.com/add/akirajewellery"><i class="fab fa-snapchat"></i></a></li>
                                            <li><a href="https://www.tiktok.com/@akirajewellery"><i class="fab fa-tiktok"></i></a></li>
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
                                                    <a href="{{ route('care') }}">Product Care</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('contact') }}">Book an Appointment</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('faq') }}">Frequently Asked Questions</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('shipping') }}">Shipping & Returns</a>
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
                                                    <a target="_blank" href="https://maps.app.goo.gl/FK9vp2StXRp4BWyN9?g_st=ic">Sitemap</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('tnc') }}">Terms & Conditions</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('privacy') }}">Privacy Policy</a>
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
                                        <p class="copyright">Copyright © 2024. All Right Reserved</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="footer-right">
                                        <div class="block block-image">
                                            <img width="309" height="32" src="{{ asset('media/payments.png') }}" alt="">
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
