<div class="header-desktop">
    <div class="header-wrapper">
        <div class="section-padding">
            <div class="section-container large p-l-r">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 header-left">
                        <div class="site-logo">
                            <a href="index.html">
                                <img width="400" height="140" src="media/logo-white.png" alt="Akira – Jewellery" />
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-center header-center">
                        <div class="site-navigation">
                            <nav id="main-navigation">
                                <ul id="menu-main-menu" class="menu">
                                    <li class="level-0 menu-item">
                                        <a href="{{ route('home') }}"><span class="menu-item-text">HOME</span></a>
                                    </li>
                                    <li class="level-0 menu-item menu-item-has-children">
                                        <a href="{{ route('catelog') }}"><span class="menu-item-text">CATEGORIES</span></a>
                                        <ul class="sub-menu">
                                            @foreach ($categories as $cat)
                                            <li>
                                                <a href="{{ route('category', $cat->id) }}"><span class="menu-item-text">{{ $cat->name }}</span></a>
                                            </li>

                                            @endforeach
                                            {{-- <li>
                                                <a href="test('rings')}}"><span class="menu-item-text">RINGS</span></a>

                                    </li> --}}
                                    {{-- <li>
                                                <a href="test('home')}}"><span class="menu-item-text">PENDANTS</span></a>

                                    </li>
                                    <li>
                                        <a href="test('necklace')}}"><span class="menu-item-text">NECKLACE</span></a>

                                    </li>
                                    <li>
                                        <a href="test('bracelets')}}"><span class="menu-item-text">BRACELETS</span></a>

                                    </li>
                                    <li>
                                        <a href="test('earring')}}"><span class="menu-item-text">EARRINGS</span></a>

                                    </li> --}}

                                </ul>
                                </li>

                                {{-- <li class="level-0 menu-item menu-item-has-children">
                                        <a href="#"><span class="menu-item-text">POLICY</span></a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href=""><span class="menu-item-text">SHIPPING POLICY</span></a>
                                            </li>
                                            <li>
                                                <a href=""><span class="menu-item-text">RETURNS & REFUNDS</span></a>
                                            </li>
                                        </ul>
                                    </li> --}}
                                <li class="level-0 menu-item">
                                    <a href="{{ route('category', $custom->id ?? 1) }}"><span class="menu-item-text">CUSTOM ITEMS</span></a>
                                </li>
                                <li class="level-0 menu-item">
                                    <a href="{{ route('catelog') }}"><span class="menu-item-text">CATALOGS</span></a>
                                </li>
                                <li class="level-0 menu-item">
                                    <a href="{{ route('about') }}"><span class="menu-item-text">ABOUT</span></a>
                                </li>
                                <li class="level-0 menu-item">
                                    <a href="{{ route('contact') }}"><span class="menu-item-text">CONTACT</span></a>
                                </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 header-right">
                        <div class="header-page-link">
                            <!-- Search -->
                            {{-- <div class="search-box">
                                <div class="search-toggle"><i class="icon-search"></i></div>
                            </div> --}}

                            <div class="mojuri-topcart dropdown light">
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
                                                    <a class="go-shop" href="shop-grid-left.html">GO TO SHOP<i aria-hidden="true" class="arrow_right"></i></a>
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
                                                    <a href="shop-details.html" class="product-name">{{ $item->product->name }}</a>
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
                                                {{-- <a href="shop-checkout.html" class="button btn checkout btn-default">Check out</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Login -->
                            @if(auth()->user())
                            {{-- <div class="login-header icon">
                                <a class="active-login" href="#"><i class="icon-user"></i> {{ auth()->user()->name }} </a>
                        </div> --}}

                        <div class="mojuri-topcart dropdown light">
                            <div class="dropdown mini-cart top-cart">
                                <div class="remove-cart-shadow"></div>
                                <a class="dropdown-toggle cart-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="icons-cart active-login"><i class="icon-user"></i> {{ auth()->user()->name }} </div>
                                </a>
                                <div class="dropdown-menu cart-popup">
                                    <div class="cart-list-wrap">

                                        <div class="total-cart">
                                            <div class="title-total">Total Orders: </div>
                                            <div class="total-price"><span>1</span></div>
                                        </div>
                                        <div class="free-ship">
                                            {{-- <div class="total-percent">
                                                    <div class="percent" style="width:20%"></div>
                                                </div> --}}
                                        </div>
                                        <div class="buttons">
                                            <a href="{{ route('logout') }}" class="button btn view-cart btn-primary">Logout</a>
                                            <a href="{{ route('account') }}" class="button btn checkout btn-default">Account</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="login-header icon">
                            <a class="active-login" href="#"><i class="icon-user"></i></a>
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

                        <!-- Wishlist -->
                        {{-- <div class="wishlist-box">
                                <a href="shop-wishlist.html"><i class="icon-heart"></i></a>
                                <span class="count-wishlist">1</span>
                            </div> --}}

                        <!-- Cart -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
