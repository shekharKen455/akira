<x-main>
    <div id="site-main" class="site-main">
        <div id="main-content" class="main-content">
            <div id="primary" class="content-area">
                <div id="title" class="page-title">
                    <div class="section-container">
                        <div class="content-title-heading">
                            <h1 class="text-title-heading">
                                {{ $cat->name }}
                            </h1>
                        </div>
                        <div class="breadcrumbs">
                            <a href="{{ route('home') }}">Home</a><span class="delimiter"></span><a href="{{ route('catelog') }}">Catelog</a><span class="delimiter"></span>{{ $cat->name }}
                        </div>
                    </div>
                </div>

                <div id="content" class="site-content" role="main">
                    <div class="section-padding">
                        <div class="section-container p-l-r">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="products-topbar clearfix">
                                        <div class="products-topbar-left">
                                            <div class="products-count">
                                                {{-- Showing all 21 results --}}
                                                Showing {{ $products->lastItem() }} of total {{$products->total()}} results
                                            </div>
                                        </div>
                                        <div class="products-topbar-right">
                                            {{-- <div class="products-sort dropdown">
                                                <span class="sort-toggle dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Default sorting</span>
                                                <ul class="sort-list dropdown-menu" x-placement="bottom-start">
                                                    <li class="active"><a href="#">Default sorting</a></li>
                                                    <li><a href="#">Sort by popularity</a></li>
                                                    <li><a href="#">Sort by average rating</a></li>
                                                    <li><a href="#">Sort by latest</a></li>
                                                    <li><a href="#">Sort by price: low to high</a></li>
                                                    <li><a href="#">Sort by price: high to low</a></li>
                                                </ul>
                                            </div> --}}
                                            <ul class="layout-toggle nav nav-tabs">
                                                <li class="nav-item">
                                                    <a class="layout-grid nav-link active" data-toggle="tab" href="#layout-grid" role="tab"><span class="icon-column"><span class="layer first"><span></span><span></span><span></span></span><span class="layer middle"><span></span><span></span><span></span></span><span class="layer last"><span></span><span></span><span></span></span></span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="layout-list nav-link" data-toggle="tab" href="#layout-list" role="tab"><span class="icon-column"><span class="layer first"><span></span><span></span></span><span class="layer middle"><span></span><span></span></span><span class="layer last"><span></span><span></span></span></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="layout-grid" role="tabpanel">
                                            <div class="products-list grid">
                                                <div class="row">
                                                    @foreach ($products as $pro)
                                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">
                                                        <div class="products-entry clearfix product-wapper">
                                                            <div class="products-thumb">
                                                                <div class="product-lable">
                                                                    <div class="hot">Hot</div>
                                                                </div>
                                                                <div class="product-thumb-hover">
                                                                    <a href="{{ route('product', $pro->slug) }}">
                                                                        <img width="600" height="600" src="{{ asset('storage/' . $pro->image) }}" class="post-image" alt="">
                                                                        <img width="600" height="600" src="{{ asset('storage/' . $pro->image) }}" class="hover-image back" alt="">
                                                                    </a>
                                                                </div>
                                                                {{-- <div class="product-button">
                                                                    <div class="btn-add-to-cart" data-title="Add to cart">
                                                                        <a href="{{ route('cart.add', $pro->id) }}" class="product-btn button">Add to cart</a>
                                                                    </div>
                                                                    <div class="btn-wishlist" data-title="Buy">
                                                                        <button class="product-btn">Buy</button>
                                                                    </div>
                                                                    <span class="product-quickview" data-title="Details">
                                                                        <a href="{{ route('product', $pro->slug) }}" class="">Details <i class="icon-search"></i></a>
                                                                    </span>
                                                                </div> --}}
                                                            </div>
                                                            <div class="products-content">
                                                                <div class="contents text-center">
                                                                    <div class="rating">
                                                                        <div class="star star-{{ $pro->rating }}"></div>
                                                                    </div>
                                                                    <h3 class="product-title"><a href="{{ route('product', $pro->slug) }}">{{ $pro->name }}</a></h3>
                                                                    <span class="price">${{ $pro->price }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="layout-list" role="tabpanel">
                                            <div class="products-list list">
                                                @foreach ($products as $pro)
                                                <div class="products-entry clearfix product-wapper">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="products-thumb">
                                                                <div class="product-lable">
                                                                    <div class="hot">Hot</div>
                                                                </div>
                                                                <div class="product-thumb-hover">
                                                                    <a href="{{ route('product', $pro->slug) }}">
                                                                        <img width="600" height="600" src="{{ asset('storage/' . $pro->image) }}" class="post-image" alt="">
                                                                        <img width="600" height="600" src="{{ asset('storage/' . $pro->image) }}" class="hover-image back" alt="">
                                                                    </a>
                                                                </div>
                                                                {{-- <span class="product-quickview" data-title="Details">
                                                                    <a href="#" class="quickview quickview-button">Details <i class="icon-search"></i></a>
                                                                </span> --}}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="products-content">
                                                                <h3 class="product-title"><a href="{{ route('product', $pro->slug) }}">{{ $pro->name }}</a></h3>
                                                                <span class="price">${{ $pro->price }}</span>
                                                                <div class="rating">
                                                                    <div class="star star-{{ $pro->rating }}"></div>
                                                                    {{-- <div class="review-count">
                                                                    (0 review)
                                                                    </div> --}}
                                                                </div>
                                                                <div class="product-button">
                                                                    <div class="btn-add-to-cart-new" data-title="Add to cart">
                                                                        <a href="{{ route('product', $pro->slug) }}" class="product-btn button">View </a>
                                                                    </div>
                                                                    {{-- <div class="btn-add-to-cart-new" data-title="Buy">
                                                                        <a href="#" class="product-btn button">Buy</a>
                                                                    </div> --}}
                                                                </div>
                                                                <div class="product-description">{{ $pro->description }}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    {{ $products->links() }}

                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- #content -->
            </div><!-- #primary -->
        </div><!-- #main-content -->
    </div>
</x-main>
