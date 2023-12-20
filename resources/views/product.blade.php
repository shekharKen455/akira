<x-main>
    <div id="site-main" class="site-main">
        <div id="main-content" class="main-content">
            <div id="primary" class="content-area">
                <div id="title" class="page-title">
                    <div class="section-container">
                        <div class="content-title-heading">
                            <h1 class="text-title-heading">
                                {{ $product->name }}
                            </h1>
                        </div>
                        <div class="breadcrumbs">
                            <a href="{{ route('home') }}">Home</a><span class="delimiter"></span><a href="{{ route('category', $product->category_id) }}">Catalogs</a><span class="delimiter"></span>{{ $product->name }}
                        </div>
                    </div>
                </div>

                <div id="content" class="site-content" role="main">
                    <div class="shop-details zoom" data-product_layout_thumb="scroll" data-zoom_scroll="true" data-zoom_contain_lens="true" data-zoomtype="inner" data-lenssize="200" data-lensshape="square" data-lensborder="" data-bordersize="2" data-bordercolour="#f9b61e" data-popup="false">
                        <div class="product-top-info">
                            <div class="section-padding">
                                <div class="section-container p-l-r">
                                    <div class="row">
                                        <div class="product-images col-lg-7 col-md-12 col-12">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="content-thumbnail-scroll"><i class="slick-arrow fa fa-angle-left" style=""></i>
                                                        <div class="image-thumbnail slick-carousel slick-vertical slick-initializeddddd slick-slider" data-asnavfor=".image-additional" data-centermode="true" data-focusonselect="true" data-columns4="5" data-columns3="4" data-columns2="4" data-columns1="4" data-columns="4" data-nav="true" data-vertical="&quot;true&quot;" data-verticalswiping="&quot;true&quot;">
                                                            <div class="slick-list draggable" style="height: 552px;">
                                                                <div class="slick-track" style="opacity: 1; height: 2070px; transform: translate3d(0px, -552px, 0px);">
                                                                    <div class="img-item slick-slide slick-cloned" data-slick-index="-5" id="" aria-hidden="true" tabindex="-1" style="width: 123px;">
                                                                        <span class="img-thumbnail-scroll">
                                                                            <img width="600" height="600" src="{{ asset('storage/' . $product->image) }}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    @foreach ($product->others as $img)
                                                                    <div class="img-item slick-slide slick-cloned" data-slick-index="-4" id="" aria-hidden="true" tabindex="-1" style="width: 123px;">
                                                                        <span class="img-thumbnail-scroll">
                                                                            <img width="600" height="600" src="{{ asset('storage/' . $img) }}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    @endforeach
                                                                    <div class="img-item slick-slide slick-current slick-active slick-center" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 123px;">
                                                                        <span class="img-thumbnail-scroll">
                                                                            <img width="600" height="600" src="{{ asset('storage/' . $product->image) }}" alt="">
                                                                        </span>
                                                                    </div>

                                                                    @foreach ($product->others as $img)
                                                                    <div class="img-item slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" style="width: 123px;">
                                                                        <span class="img-thumbnail-scroll">
                                                                            <img width="600" height="600" src="{{ asset('storage/' . $img) }}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    @endforeach

                                                                    <div class="img-item slick-slide slick-cloned slick-center" data-slick-index="5" id="" aria-hidden="true" tabindex="-1" style="width: 123px;">
                                                                        <span class="img-thumbnail-scroll">
                                                                            <img width="600" height="600" src="{{ asset('storage/' . $product->image) }}" alt="">
                                                                        </span>
                                                                    </div>

                                                                    @foreach ($product->others as $img)
                                                                    <div class="img-item slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" tabindex="-1" style="width: 123px;">
                                                                        <span class="img-thumbnail-scroll">
                                                                            <img width="600" height="600" src="{{ asset('storage/' . $img) }}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    @endforeach

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <i class="slick-arrow fa fa-angle-right" style=""></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="scroll-image main-image"><i class="slick-arrow fa fa-angle-left" style=""></i>
                                                        <div class="image-additional slick-carousel slick-initializeddddd slick-slider" data-asnavfor=".image-thumbnail" data-fade="true" data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="1" data-columns="1" data-nav="true">
                                                            <div class="slick-list draggable">
                                                                <div class="slick-track" style="opacity: 1; width: 3365px;">
                                                                    <div class="img-item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 673px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                                                        <img width="900" height="900" src="{{ asset('storage/' . $product->image) }}" alt="" title="">
                                                                    </div>

                                                                    @foreach ($product->others as $img)
                                                                    <div class="img-item slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 673px; position: relative; left: -673px; top: 0px; z-index: 998; opacity: 0;">
                                                                        <img width="900" height="900" src="{{ asset('storage/' . $img) }}" alt="" title="">
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <i class="slick-arrow fa fa-angle-right" style=""></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-info col-lg-5 col-md-12 col-12 ">
                                            <h1 class="title">{{ $product->name }}</h1>
                                            <span class="price">
                                                {{-- <del aria-hidden="true"><span>${{ $product->price }}</span></del> --}}
                                            <ins><span>${{ $product->price }}</span></ins>
                                            </span>
                                            <div class="rating">
                                                <div class="star star-{{ $product->rating }}"></div>
                                                {{-- <div class="review-count">
                                                    (3<span> reviews</span>)
                                                </div> --}}
                                            </div>
                                            <div class="description">
                                                <p>{{ $product->description }}</p>
                                            </div>
                                            {{-- <div class="variations">
                                                <table cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td class="label">Size</td>
                                                            <td class="attributes">
                                                                <ul class="text">
                                                                    <li><span>L</span></li>
                                                                    <li><span>M</span></li>
                                                                    <li><span>S</span></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="label">Color</td>
                                                            <td class="attributes">
                                                                <ul class="colors">
                                                                    <li><span class="color-1"></span></li>
                                                                    <li><span class="color-2"></span></li>
                                                                    <li><span class="color-3"></span></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> --}}
                                            <div class="buttons">
                                                <div class="add-to-cart-wrap">
                                                    {{-- <div class="quantity">
                                                        <button type="button" class="plus">+</button>
                                                        <input type="number" class="qty" step="1" min="0" max="" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric" autocomplete="off">
                                                        <button type="button" class="minus">-</button>
                                                    </div> --}}
                                                    <div class="btn-add-to-cart-new">
                                                        @if (auth()->user())
                                                        <a href="{{ route('cart.add', $product->id) }}" tabindex="0">Add to cart</a>
                                                        @else
                                                        <a href="#" onclick="alert('Please login to continue!')" tabindex="0">Add to cart</a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="btn-quick-buy" data-title="Wishlist">
                                                    @if (auth()->user())
                                                    <a href="{{ route('cart.buy', $product->id) }}">
                                                        <button class="product-btn">Buy It Now</button>
                                                    </a>
                                                    @else
                                                    <button class="product-btn" onclick="alert('Please login to continue!')">Buy It Now</button>
                                                    @endif

                                                </div>
                                                {{-- <div class="btn-wishlist" data-title="Wishlist">
                                                    <button class="product-btn">Add to wishlist</button>
                                                </div>
                                                <div class="btn-compare" data-title="Compare">
                                                    <button class="product-btn">Compare</button>
                                                </div> --}}
                                            </div>
                                            <div class="product-meta">
                                                {{-- <span class="sku-wrapper">SKU: <span class="sku">D2300-3-2-2</span></span> --}}
                                                <span class="posted-in">Category: <a href="#" rel="tag">{{ $product->category->name }}</a></span>
                                                <span class="tagged-as">Tags: <a href="#" rel="tag">Hot</a>, <a href="#" rel="tag">Trend</a></span>
                                            </div>
                                            <div class="social-share">
                                                <a href="#" title="Facebook" class="share-facebook" target="_blank"><i class="fa fa-facebook"></i>Facebook</a>
                                                <a href="#" title="Twitter" class="share-twitter"><i class="fa fa-twitter"></i>Twitter</a>
                                                <a href="#" title="Pinterest" class="share-pinterest"><i class="fa fa-pinterest"></i>Pinterest</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-related">
                            <div class="section-padding">
                                <div class="section-container p-l-r">
                                    <div class="block block-products slider">
                                        <div class="block-title">
                                            <h2>Related Products</h2>
                                        </div>
                                        <div class="block-content">
                                            <div class="content-product-list slick-wrap"><i class="slick-arrow fa fa-angle-left" style=""></i>
                                                <div class="slick-sliders products-list grid slick-initializeddddd slick-slider" data-slidestoscroll="true" data-dots="false" data-nav="1" data-columns4="1" data-columns3="2" data-columns2="3" data-columns1="3" data-columns1440="4" data-columns="4">
                                                    <div class="slick-list draggable">
                                                        <div class="slick-track" style="opacity: 1; width: 5040px; transform: translate3d(-1440px, 0px, 0px);">
                                                            <div class="item-product slick-slide slick-cloned" data-slick-index="-4" id="" aria-hidden="true" tabindex="-1" style="width: 360px;">
                                                                <div class="items">
                                                                    <div class="products-entry clearfix product-wapper">
                                                                        <div class="products-thumb">
                                                                            <div class="product-lable">
                                                                                <div class="hot">Hot</div>
                                                                            </div>
                                                                            <div class="product-thumb-hover">
                                                                                <a href="#" tabindex="-1">
                                                                                    <img width="600" height="600" src="media/product/2.jpg" class="post-image" alt="">
                                                                                    <img width="600" height="600" src="media/product/2-2.jpg" class="hover-image back" alt="">
                                                                                </a>
                                                                            </div>
                                                                            <div class="product-button">
                                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                    <a rel="nofollow" href="#" class="product-btn button" tabindex="-1">Add to cart</a>
                                                                                </div>
                                                                                <div class="btn-wishlist" data-title="Wishlist">
                                                                                    <button class="product-btn" tabindex="-1">Add to wishlist</button>
                                                                                </div>
                                                                                <div class="btn-compare" data-title="Compare">
                                                                                    <button class="product-btn" tabindex="-1">Compare</button>
                                                                                </div>
                                                                                <span class="product-quickview" data-title="Quick View">
                                                                                    <a href="#" class="quickview quickview-button" tabindex="-1">Quick View <i class="icon-search"></i></a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="products-content">
                                                                            <div class="contents text-center">
                                                                                <h3 class="product-title"><a href="#" tabindex="-1">Bold Pearl Hoop Earrings</a></h3>
                                                                                <div class="rating">
                                                                                    <div class="star star-4"></div>
                                                                                </div>
                                                                                <span class="price">$200.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-product slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" tabindex="-1" style="width: 360px;">
                                                                <div class="items">
                                                                    <div class="products-entry clearfix product-wapper">
                                                                        <div class="products-thumb">
                                                                            <div class="product-lable">
                                                                                <div class="hot">Hot</div>
                                                                            </div>
                                                                            <div class="product-thumb-hover">
                                                                                <a href="#" tabindex="-1">
                                                                                    <img width="600" height="600" src="media/product/3.jpg" class="post-image" alt="">
                                                                                    <img width="600" height="600" src="media/product/3-2.jpg" class="hover-image back" alt="">
                                                                                </a>
                                                                            </div>
                                                                            <div class="product-button">
                                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                    <a rel="nofollow" href="#" class="product-btn button" tabindex="-1">Add to cart</a>
                                                                                </div>
                                                                                <div class="btn-wishlist" data-title="Wishlist">
                                                                                    <button class="product-btn" tabindex="-1">Add to wishlist</button>
                                                                                </div>
                                                                                <div class="btn-compare" data-title="Compare">
                                                                                    <button class="product-btn" tabindex="-1">Compare</button>
                                                                                </div>
                                                                                <span class="product-quickview" data-title="Quick View">
                                                                                    <a href="#" class="quickview quickview-button" tabindex="-1">Quick View <i class="icon-search"></i></a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="products-content">
                                                                            <div class="contents text-center">
                                                                                <h3 class="product-title"><a href="#" tabindex="-1">Twin Hoops</a></h3>
                                                                                <div class="rating">
                                                                                    <div class="star star-0"></div>
                                                                                </div>
                                                                                <span class="price">$150.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-product slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" tabindex="-1" style="width: 360px;">
                                                                <div class="items">
                                                                    <div class="products-entry clearfix product-wapper">
                                                                        <div class="products-thumb">
                                                                            <div class="product-lable">
                                                                                <div class="onsale">-33%</div>
                                                                            </div>
                                                                            <div class="product-thumb-hover">
                                                                                <a href="#" tabindex="-1">
                                                                                    <img width="600" height="600" src="media/product/4.jpg" class="post-image" alt="">
                                                                                    <img width="600" height="600" src="media/product/4-2.jpg" class="hover-image back" alt="">
                                                                                </a>
                                                                            </div>
                                                                            <div class="product-button">
                                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                    <a rel="nofollow" href="#" class="product-btn button" tabindex="-1">Add to cart</a>
                                                                                </div>
                                                                                <div class="btn-wishlist" data-title="Wishlist">
                                                                                    <button class="product-btn" tabindex="-1">Add to wishlist</button>
                                                                                </div>
                                                                                <div class="btn-compare" data-title="Compare">
                                                                                    <button class="product-btn" tabindex="-1">Compare</button>
                                                                                </div>
                                                                                <span class="product-quickview" data-title="Quick View">
                                                                                    <a href="#" class="quickview quickview-button" tabindex="-1">Quick View <i class="icon-search"></i></a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="products-content">
                                                                            <div class="contents text-center">
                                                                                <h3 class="product-title"><a href="#" tabindex="-1">Yilver And Turquoise Earrings</a></h3>
                                                                                <div class="rating">
                                                                                    <div class="star star-5"></div>
                                                                                </div>
                                                                                <span class="price">
                                                                                    <del aria-hidden="true"><span>$150.00</span></del>
                                                                                    <ins><span>$100.00</span></ins>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-product slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 360px;">
                                                                <div class="items">
                                                                    <div class="products-entry clearfix product-wapper">
                                                                        <div class="products-thumb">
                                                                            <div class="product-lable">
                                                                                <div class="onsale">-7%</div>
                                                                            </div>
                                                                            <div class="product-thumb-hover">
                                                                                <a href="#" tabindex="-1">
                                                                                    <img width="600" height="600" src="media/product/5.jpg" class="post-image" alt="">
                                                                                    <img width="600" height="600" src="media/product/5-2.jpg" class="hover-image back" alt="">
                                                                                </a>
                                                                            </div>
                                                                            <div class="product-button">
                                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                    <a rel="nofollow" href="#" class="product-btn button" tabindex="-1">Add to cart</a>
                                                                                </div>
                                                                                <div class="btn-wishlist" data-title="Wishlist">
                                                                                    <button class="product-btn" tabindex="-1">Add to wishlist</button>
                                                                                </div>
                                                                                <div class="btn-compare" data-title="Compare">
                                                                                    <button class="product-btn" tabindex="-1">Compare</button>
                                                                                </div>
                                                                                <span class="product-quickview" data-title="Quick View">
                                                                                    <a href="#" class="quickview quickview-button" tabindex="-1">Quick View <i class="icon-search"></i></a>
                                                                                </span>
                                                                            </div>
                                                                            <div class="product-stock">
                                                                                <span class="stock">Out Of Stock</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="products-content">
                                                                            <div class="contents text-center">
                                                                                <h3 class="product-title"><a href="#" tabindex="-1">Amp Pendant Light Large</a></h3>
                                                                                <div class="rating">
                                                                                    <div class="star star-4"></div>
                                                                                </div>
                                                                                <span class="price">
                                                                                    <del aria-hidden="true"><span>$150.00</span></del>
                                                                                    <ins><span>$140.00</span></ins>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-product slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 360px;">
                                                                <div class="items">
                                                                    <div class="products-entry clearfix product-wapper">
                                                                        <div class="products-thumb">
                                                                            <div class="product-lable">
                                                                                <div class="hot">Hot</div>
                                                                            </div>
                                                                            <div class="product-thumb-hover">
                                                                                <a href="#" tabindex="0">
                                                                                    <img width="600" height="600" src="media/product/13.jpg" class="post-image" alt="">
                                                                                    <img width="600" height="600" src="media/product/13-2.jpg" class="hover-image back" alt="">
                                                                                </a>
                                                                            </div>
                                                                            <div class="product-button">
                                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                    <a rel="nofollow" href="#" class="product-btn button" tabindex="0">Add to cart</a>
                                                                                </div>
                                                                                <div class="btn-wishlist" data-title="Wishlist">
                                                                                    <button class="product-btn" tabindex="0">Add to wishlist</button>
                                                                                </div>
                                                                                <div class="btn-compare" data-title="Compare">
                                                                                    <button class="product-btn" tabindex="0">Compare</button>
                                                                                </div>
                                                                                <span class="product-quickview" data-title="Quick View">
                                                                                    <a href="#" class="quickview quickview-button" tabindex="0">Quick View <i class="icon-search"></i></a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="products-content">
                                                                            <div class="contents text-center">
                                                                                <h3 class="product-title"><a href="#" tabindex="0">Medium Flat Hoops</a></h3>
                                                                                <div class="rating">
                                                                                    <div class="star star-5"></div>
                                                                                </div>
                                                                                <span class="price">$100.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-product slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" style="width: 360px;">
                                                                <div class="items">
                                                                    <div class="products-entry clearfix product-wapper">
                                                                        <div class="products-thumb">
                                                                            <div class="product-lable">
                                                                                <div class="hot">Hot</div>
                                                                            </div>
                                                                            <div class="product-thumb-hover">
                                                                                <a href="#" tabindex="0">
                                                                                    <img width="600" height="600" src="media/product/2.jpg" class="post-image" alt="">
                                                                                    <img width="600" height="600" src="media/product/2-2.jpg" class="hover-image back" alt="">
                                                                                </a>
                                                                            </div>
                                                                            <div class="product-button">
                                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                    <a rel="nofollow" href="#" class="product-btn button" tabindex="0">Add to cart</a>
                                                                                </div>
                                                                                <div class="btn-wishlist" data-title="Wishlist">
                                                                                    <button class="product-btn" tabindex="0">Add to wishlist</button>
                                                                                </div>
                                                                                <div class="btn-compare" data-title="Compare">
                                                                                    <button class="product-btn" tabindex="0">Compare</button>
                                                                                </div>
                                                                                <span class="product-quickview" data-title="Quick View">
                                                                                    <a href="#" class="quickview quickview-button" tabindex="0">Quick View <i class="icon-search"></i></a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="products-content">
                                                                            <div class="contents text-center">
                                                                                <h3 class="product-title"><a href="#" tabindex="0">Bold Pearl Hoop Earrings</a></h3>
                                                                                <div class="rating">
                                                                                    <div class="star star-4"></div>
                                                                                </div>
                                                                                <span class="price">$200.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-product slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" style="width: 360px;">
                                                                <div class="items">
                                                                    <div class="products-entry clearfix product-wapper">
                                                                        <div class="products-thumb">
                                                                            <div class="product-lable">
                                                                                <div class="hot">Hot</div>
                                                                            </div>
                                                                            <div class="product-thumb-hover">
                                                                                <a href="#" tabindex="0">
                                                                                    <img width="600" height="600" src="media/product/3.jpg" class="post-image" alt="">
                                                                                    <img width="600" height="600" src="media/product/3-2.jpg" class="hover-image back" alt="">
                                                                                </a>
                                                                            </div>
                                                                            <div class="product-button">
                                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                    <a rel="nofollow" href="#" class="product-btn button" tabindex="0">Add to cart</a>
                                                                                </div>
                                                                                <div class="btn-wishlist" data-title="Wishlist">
                                                                                    <button class="product-btn" tabindex="0">Add to wishlist</button>
                                                                                </div>
                                                                                <div class="btn-compare" data-title="Compare">
                                                                                    <button class="product-btn" tabindex="0">Compare</button>
                                                                                </div>
                                                                                <span class="product-quickview" data-title="Quick View">
                                                                                    <a href="#" class="quickview quickview-button" tabindex="0">Quick View <i class="icon-search"></i></a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="products-content">
                                                                            <div class="contents text-center">
                                                                                <h3 class="product-title"><a href="#" tabindex="0">Twin Hoops</a></h3>
                                                                                <div class="rating">
                                                                                    <div class="star star-0"></div>
                                                                                </div>
                                                                                <span class="price">$150.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-product slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" style="width: 360px;">
                                                                <div class="items">
                                                                    <div class="products-entry clearfix product-wapper">
                                                                        <div class="products-thumb">
                                                                            <div class="product-lable">
                                                                                <div class="onsale">-33%</div>
                                                                            </div>
                                                                            <div class="product-thumb-hover">
                                                                                <a href="#" tabindex="0">
                                                                                    <img width="600" height="600" src="media/product/4.jpg" class="post-image" alt="">
                                                                                    <img width="600" height="600" src="media/product/4-2.jpg" class="hover-image back" alt="">
                                                                                </a>
                                                                            </div>
                                                                            <div class="product-button">
                                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                    <a rel="nofollow" href="#" class="product-btn button" tabindex="0">Add to cart</a>
                                                                                </div>
                                                                                <div class="btn-wishlist" data-title="Wishlist">
                                                                                    <button class="product-btn" tabindex="0">Add to wishlist</button>
                                                                                </div>
                                                                                <div class="btn-compare" data-title="Compare">
                                                                                    <button class="product-btn" tabindex="0">Compare</button>
                                                                                </div>
                                                                                <span class="product-quickview" data-title="Quick View">
                                                                                    <a href="#" class="quickview quickview-button" tabindex="0">Quick View <i class="icon-search"></i></a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="products-content">
                                                                            <div class="contents text-center">
                                                                                <h3 class="product-title"><a href="#" tabindex="0">Yilver And Turquoise Earrings</a></h3>
                                                                                <div class="rating">
                                                                                    <div class="star star-5"></div>
                                                                                </div>
                                                                                <span class="price">
                                                                                    <del aria-hidden="true"><span>$150.00</span></del>
                                                                                    <ins><span>$100.00</span></ins>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-product slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1" style="width: 360px;">
                                                                <div class="items">
                                                                    <div class="products-entry clearfix product-wapper">
                                                                        <div class="products-thumb">
                                                                            <div class="product-lable">
                                                                                <div class="onsale">-7%</div>
                                                                            </div>
                                                                            <div class="product-thumb-hover">
                                                                                <a href="#" tabindex="-1">
                                                                                    <img width="600" height="600" src="media/product/5.jpg" class="post-image" alt="">
                                                                                    <img width="600" height="600" src="media/product/5-2.jpg" class="hover-image back" alt="">
                                                                                </a>
                                                                            </div>
                                                                            <div class="product-button">
                                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                    <a rel="nofollow" href="#" class="product-btn button" tabindex="-1">Add to cart</a>
                                                                                </div>
                                                                                <div class="btn-wishlist" data-title="Wishlist">
                                                                                    <button class="product-btn" tabindex="-1">Add to wishlist</button>
                                                                                </div>
                                                                                <div class="btn-compare" data-title="Compare">
                                                                                    <button class="product-btn" tabindex="-1">Compare</button>
                                                                                </div>
                                                                                <span class="product-quickview" data-title="Quick View">
                                                                                    <a href="#" class="quickview quickview-button" tabindex="-1">Quick View <i class="icon-search"></i></a>
                                                                                </span>
                                                                            </div>
                                                                            <div class="product-stock">
                                                                                <span class="stock">Out Of Stock</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="products-content">
                                                                            <div class="contents text-center">
                                                                                <h3 class="product-title"><a href="#" tabindex="-1">Amp Pendant Light Large</a></h3>
                                                                                <div class="rating">
                                                                                    <div class="star star-4"></div>
                                                                                </div>
                                                                                <span class="price">
                                                                                    <del aria-hidden="true"><span>$150.00</span></del>
                                                                                    <ins><span>$140.00</span></ins>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-product slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" tabindex="-1" style="width: 360px;">
                                                                <div class="items">
                                                                    <div class="products-entry clearfix product-wapper">
                                                                        <div class="products-thumb">
                                                                            <div class="product-lable">
                                                                                <div class="hot">Hot</div>
                                                                            </div>
                                                                            <div class="product-thumb-hover">
                                                                                <a href="#" tabindex="-1">
                                                                                    <img width="600" height="600" src="media/product/13.jpg" class="post-image" alt="">
                                                                                    <img width="600" height="600" src="media/product/13-2.jpg" class="hover-image back" alt="">
                                                                                </a>
                                                                            </div>
                                                                            <div class="product-button">
                                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                    <a rel="nofollow" href="#" class="product-btn button" tabindex="-1">Add to cart</a>
                                                                                </div>
                                                                                <div class="btn-wishlist" data-title="Wishlist">
                                                                                    <button class="product-btn" tabindex="-1">Add to wishlist</button>
                                                                                </div>
                                                                                <div class="btn-compare" data-title="Compare">
                                                                                    <button class="product-btn" tabindex="-1">Compare</button>
                                                                                </div>
                                                                                <span class="product-quickview" data-title="Quick View">
                                                                                    <a href="#" class="quickview quickview-button" tabindex="-1">Quick View <i class="icon-search"></i></a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="products-content">
                                                                            <div class="contents text-center">
                                                                                <h3 class="product-title"><a href="#" tabindex="-1">Medium Flat Hoops</a></h3>
                                                                                <div class="rating">
                                                                                    <div class="star star-5"></div>
                                                                                </div>
                                                                                <span class="price">$100.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-product slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" tabindex="-1" style="width: 360px;">
                                                                <div class="items">
                                                                    <div class="products-entry clearfix product-wapper">
                                                                        <div class="products-thumb">
                                                                            <div class="product-lable">
                                                                                <div class="hot">Hot</div>
                                                                            </div>
                                                                            <div class="product-thumb-hover">
                                                                                <a href="#" tabindex="-1">
                                                                                    <img width="600" height="600" src="media/product/2.jpg" class="post-image" alt="">
                                                                                    <img width="600" height="600" src="media/product/2-2.jpg" class="hover-image back" alt="">
                                                                                </a>
                                                                            </div>
                                                                            <div class="product-button">
                                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                    <a rel="nofollow" href="#" class="product-btn button" tabindex="-1">Add to cart</a>
                                                                                </div>
                                                                                <div class="btn-wishlist" data-title="Wishlist">
                                                                                    <button class="product-btn" tabindex="-1">Add to wishlist</button>
                                                                                </div>
                                                                                <div class="btn-compare" data-title="Compare">
                                                                                    <button class="product-btn" tabindex="-1">Compare</button>
                                                                                </div>
                                                                                <span class="product-quickview" data-title="Quick View">
                                                                                    <a href="#" class="quickview quickview-button" tabindex="-1">Quick View <i class="icon-search"></i></a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="products-content">
                                                                            <div class="contents text-center">
                                                                                <h3 class="product-title"><a href="#" tabindex="-1">Bold Pearl Hoop Earrings</a></h3>
                                                                                <div class="rating">
                                                                                    <div class="star star-4"></div>
                                                                                </div>
                                                                                <span class="price">$200.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-product slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" tabindex="-1" style="width: 360px;">
                                                                <div class="items">
                                                                    <div class="products-entry clearfix product-wapper">
                                                                        <div class="products-thumb">
                                                                            <div class="product-lable">
                                                                                <div class="hot">Hot</div>
                                                                            </div>
                                                                            <div class="product-thumb-hover">
                                                                                <a href="#" tabindex="-1">
                                                                                    <img width="600" height="600" src="media/product/3.jpg" class="post-image" alt="">
                                                                                    <img width="600" height="600" src="media/product/3-2.jpg" class="hover-image back" alt="">
                                                                                </a>
                                                                            </div>
                                                                            <div class="product-button">
                                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                    <a rel="nofollow" href="#" class="product-btn button" tabindex="-1">Add to cart</a>
                                                                                </div>
                                                                                <div class="btn-wishlist" data-title="Wishlist">
                                                                                    <button class="product-btn" tabindex="-1">Add to wishlist</button>
                                                                                </div>
                                                                                <div class="btn-compare" data-title="Compare">
                                                                                    <button class="product-btn" tabindex="-1">Compare</button>
                                                                                </div>
                                                                                <span class="product-quickview" data-title="Quick View">
                                                                                    <a href="#" class="quickview quickview-button" tabindex="-1">Quick View <i class="icon-search"></i></a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="products-content">
                                                                            <div class="contents text-center">
                                                                                <h3 class="product-title"><a href="#" tabindex="-1">Twin Hoops</a></h3>
                                                                                <div class="rating">
                                                                                    <div class="star star-0"></div>
                                                                                </div>
                                                                                <span class="price">$150.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-product slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" tabindex="-1" style="width: 360px;">
                                                                <div class="items">
                                                                    <div class="products-entry clearfix product-wapper">
                                                                        <div class="products-thumb">
                                                                            <div class="product-lable">
                                                                                <div class="onsale">-33%</div>
                                                                            </div>
                                                                            <div class="product-thumb-hover">
                                                                                <a href="#" tabindex="-1">
                                                                                    <img width="600" height="600" src="media/product/4.jpg" class="post-image" alt="">
                                                                                    <img width="600" height="600" src="media/product/4-2.jpg" class="hover-image back" alt="">
                                                                                </a>
                                                                            </div>
                                                                            <div class="product-button">
                                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                    <a rel="nofollow" href="#" class="product-btn button" tabindex="-1">Add to cart</a>
                                                                                </div>
                                                                                <div class="btn-wishlist" data-title="Wishlist">
                                                                                    <button class="product-btn" tabindex="-1">Add to wishlist</button>
                                                                                </div>
                                                                                <div class="btn-compare" data-title="Compare">
                                                                                    <button class="product-btn" tabindex="-1">Compare</button>
                                                                                </div>
                                                                                <span class="product-quickview" data-title="Quick View">
                                                                                    <a href="#" class="quickview quickview-button" tabindex="-1">Quick View <i class="icon-search"></i></a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="products-content">
                                                                            <div class="contents text-center">
                                                                                <h3 class="product-title"><a href="#" tabindex="-1">Yilver And Turquoise Earrings</a></h3>
                                                                                <div class="rating">
                                                                                    <div class="star star-5"></div>
                                                                                </div>
                                                                                <span class="price">
                                                                                    <del aria-hidden="true"><span>$150.00</span></del>
                                                                                    <ins><span>$100.00</span></ins>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-product slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" tabindex="-1" style="width: 360px;">
                                                                <div class="items">
                                                                    <div class="products-entry clearfix product-wapper">
                                                                        <div class="products-thumb">
                                                                            <div class="product-lable">
                                                                                <div class="onsale">-7%</div>
                                                                            </div>
                                                                            <div class="product-thumb-hover">
                                                                                <a href="#" tabindex="-1">
                                                                                    <img width="600" height="600" src="media/product/5.jpg" class="post-image" alt="">
                                                                                    <img width="600" height="600" src="media/product/5-2.jpg" class="hover-image back" alt="">
                                                                                </a>
                                                                            </div>
                                                                            <div class="product-button">
                                                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                    <a rel="nofollow" href="#" class="product-btn button" tabindex="-1">Add to cart</a>
                                                                                </div>
                                                                                <div class="btn-wishlist" data-title="Wishlist">
                                                                                    <button class="product-btn" tabindex="-1">Add to wishlist</button>
                                                                                </div>
                                                                                <div class="btn-compare" data-title="Compare">
                                                                                    <button class="product-btn" tabindex="-1">Compare</button>
                                                                                </div>
                                                                                <span class="product-quickview" data-title="Quick View">
                                                                                    <a href="#" class="quickview quickview-button" tabindex="-1">Quick View <i class="icon-search"></i></a>
                                                                                </span>
                                                                            </div>
                                                                            <div class="product-stock">
                                                                                <span class="stock">Out Of Stock</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="products-content">
                                                                            <div class="contents text-center">
                                                                                <h3 class="product-title"><a href="#" tabindex="-1">Amp Pendant Light Large</a></h3>
                                                                                <div class="rating">
                                                                                    <div class="star star-4"></div>
                                                                                </div>
                                                                                <span class="price">
                                                                                    <del aria-hidden="true"><span>$150.00</span></del>
                                                                                    <ins><span>$140.00</span></ins>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <i class="slick-arrow fa fa-angle-right" style=""></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- #content -->
            </div><!-- #primary -->
        </div><!-- #main-content -->
    </div>
</x-main>
