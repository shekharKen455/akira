<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/imgs/theme/favicon.svg')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">

    <link href="{{ asset('admin/assets/css/main.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">
        <div class="aside-top">
            <a href="{{ route('home') }}" class="brand-wrap">
                <img src="{{ asset('admin/assets/imgs/theme/logo.svg')}}" class="logo" alt="Evara Dashboard">
            </a>
            <div>
                <button class="btn btn-icon btn-aside-minimize"> <i class="fa fa-bars" aria-hidden="true"></i> </button>
            </div>
        </div>
        <nav>
            <ul class="menu-aside">
                <li class="menu-item active">
                    <a class="menu-link" href="{{ route('home') }}" target="_blank"> <i class="fa fa-home" style="color: #adb5bd; margin-right: 10px; font-size: 24px;"></i>
                        <span class="text">Website</span>
                    </a>
                </li>
                <li class="menu-item active">
                    <a class="menu-link" href="{{ route('admin.dashboard') }}"> <i class="fa fa-home" style="color: #adb5bd; margin-right: 10px; font-size: 24px;"></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="{{ route('admin.category') }}"> <i class="fa fa-home" style="color: #adb5bd; margin-right: 10px; font-size: 24px;"></i>
                        <span class="text">Categories</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="{{ route('admin.product') }}"> <i class="fa fa-home" style="color: #adb5bd; margin-right: 10px; font-size: 24px;"></i>
                        <span class="text">Product</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="{{ route('admin.order') }}"> <i class="fa fa-home" style="color: #adb5bd; margin-right: 10px; font-size: 24px;"></i>
                        <span class="text">Order</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="{{ route('home') }}"> <i class="fa fa-home" style="color: #adb5bd; margin-right: 10px; font-size: 24px;"></i>
                        <span class="text">Logout</span>
                    </a>
                </li>
                {{-- <li class="menu-item has-submenu">
                    <a class="menu-link" href="page-products-list.html"> <i class="fa fa-shopping-bag" style="color: #adb5bd; margin-right: 10px; font-size: 24px;"></i>
                        <span class="text">Products</span>

                    </a>

                    <div class="submenu">
                        <a href="page-products-list.html">Product List</a>

                    </div>
                    <div class="submenu">
                        <a href="page-categories.html">Categories</a>
                    </div>
                </li>
                <li class="menu-item has-submenu">
                    <a class="menu-link" href="page-orders-1.html"> <i class="fa fa-shopping-cart" style="color: #adb5bd; margin-right: 10px; font-size: 24px;"></i>
                        <span class="text">Orders</span>
                    </a>
                    <div class="submenu">
                        <a href="page-orders-1.html">Order list 1</a>
                    </div>
                </li> --}}

                {{-- <li class="menu-item has-submenu">
                    <a class="menu-link" href="page-form-product-1.html"> <i class="fa fa-upload" style="color: #adb5bd; margin-right: 10px; font-size: 24px;"></i>

                        <span class="text">Add product</span>
                    </a>
                    <div class="submenu">
                        <a href="page-form-product-1.html">Add product 1</a></div>
                </li> --}}

                {{-- <li class="menu-item has-submenu">
                    <a class="menu-link" href="#"> <i class="icon material-icons md-person"></i>
                        <span class="text">Account</span>
                    </a>
                </li> --}}
            </ul>
            <hr>
            <br>
            <br>
        </nav>
    </aside>
    <main class="main-wrap">
        <header class="main-header navbar">
            <div class="col-search">
                <form class="searchform">
                    <div class="input-group">
                        <input list="search_terms" type="text" class="form-control" placeholder="Search term">
                        <button class="btn btn-light bg" type="button"> <i class="fa fa-search"></i></button>
                    </div>
                    <datalist id="search_terms">
                        <option value="Products">
                        <option value="New orders">
                        <option value="Apple iphone">
                        <option value="Ahmed Hassan">
                    </datalist>
                </form>
            </div>
            <div class="col-nav">
                <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"> <i class="material-icons md-apps"></i> </button>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link btn-icon" href="#">
                            <i class="fa fa-bell"></i>
                            <span class="badge rounded-pill">3</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-icon darkmode" href="#"> <i class="fa fa-moon-o"></i> </a>
                    </li>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownLanguage" aria-expanded="false"><i class="fa fa-user"></i></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage">
                            <a class="dropdown-item text-brand" href="#"><img src="{{ asset('admin/assets/imgs/theme/flag-us.png') }}" alt="English">English</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('admin/assets/imgs/theme/flag-fr.png') }}" alt="Français">Français</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('admin/assets/imgs/theme/flag-jp.png') }}" alt="Français">日本語</a>
                            <a class="dropdown-item" href="#"><img src="{{ asset('admin/assets/imgs/theme/flag-cn.png') }}" alt="Français">中国人</a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false"> <img class="img-xs rounded-circle" src="{{ asset('admin/assets/imgs/people/avatar2.jpg') }}" alt="User"></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                            <a class="dropdown-item" href="#"><i class="material-icons md-perm_identity"></i>Edit Profile</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-settings"></i>Account Settings</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-account_balance_wallet"></i>Wallet</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-receipt"></i>Billing</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-help_outline"></i>Help center</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="material-icons md-exit_to_app"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>

        {{ $slot }}

        <!-- content-main end// -->
        <footer class=" main-footer font-xs">
                                <div class="row pb-30 pt-15">
                                    <div class="col-sm-6">
                                        <script>
                                            document.write(new Date().getFullYear())

                                        </script> ©, Evara - HTML Ecommerce Template .
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="text-sm-end">
                                            All rights reserved
                                        </div>
                                    </div>
                                </div>
                                </footer>
    </main>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="{{ asset('admin/assets/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendors/select2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendors/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendors/jquery.fullscreen.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendors/chart.js') }}"></script>
    <script src="{{ asset('admin/assets/js/main.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/custom-chart.js') }}" type="text/javascript"></script>
</body>

</html>
