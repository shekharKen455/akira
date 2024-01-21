<x-main>

    <style>
        .lableCheck {
            position: relative;
            cursor: pointer;
            display: inline-block;
        }

        .lableCheck>input[type="radio"] {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .lableCheck::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            border: 2px solid transparent;
            box-sizing: border-box;
        }

        .fontSelect {
            border: 2px solid #cb8161;
            border-radius: 5%
        }

        /* Style to increase radio button size */
        input[type="radio"] {
            -ms-transform: scale(1.5);
            /* IE 9 */
            -webkit-transform: scale(1.5);
            /* Safari 3-8 */
            transform: scale(1.5);
        }

        .colors li {
            display: inline-block;
            width: 30px;
            height: 30px;
            margin: 5px;
            cursor: pointer;
        }

        .colors input {
            display: none;
        }

        .selected {
            border: 3px solid #000;
        }

        .text li {
            margin-bottom: 5px;
        }

        .labelText {
            font-size: 12px;
            color: #000;
            margin-bottom: 0;
            margin-right: 15px;
            line-height: 40px;
            font-weight: 500;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            width: 70px;
        }

        .d-none {
            display: none;
        }
    </style>

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
                            <a href="{{ route('home') }}">Home</a><span class="delimiter"></span><a
                                href="{{ route('category', $product->category_id) }}">Catalogs</a><span
                                class="delimiter"></span>{{ $product->name }}
                        </div>
                    </div>
                </div>

                <div id="content" class="site-content" role="main">
                    <div class="shop-details zoom" data-product_layout_thumb="scroll" data-zoom_scroll="true"
                        data-zoom_contain_lens="true" data-zoomtype="inner" data-lenssize="200" data-lensshape="square"
                        data-lensborder="" data-bordersize="2" data-bordercolour="#f9b61e" data-popup="false">
                        <div class="product-top-info">
                            <div class="section-padding">
                                <div class="section-container p-l-r">
                                    <div class="row">
                                        <div class="product-images col-lg-7 col-md-12 col-12">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="content-thumbnail-scroll">
                                                        <div class="image-thumbnail slick-carousel slick-vertical"
                                                            data-asnavfor=".image-additional" data-centermode="true"
                                                            data-focusonselect="true" data-columns4="5"
                                                            data-columns3="4" data-columns2="4" data-columns1="4"
                                                            data-columns="4" data-nav="true"
                                                            data-vertical="&quot;true&quot;"
                                                            data-verticalswiping="&quot;true&quot;">

                                                            @php
                                                                $mainFile = asset('storage/' . $product->image);
                                                            @endphp

                                                            @if (preg_match('/^.*\.(mp4|mov|mpeg|webm|avi)$/i', $mainFile))
                                                                <div class="img-item slick-slide">
                                                                    <span class="img-thumbnail-scroll">
                                                                        <video autoplay muted loop preload="none"
                                                                            width="100%" height="100%">
                                                                            <source src="{{ $mainFile }}"
                                                                                type="video/mp4" />
                                                                        </video>
                                                                    </span>
                                                                </div>
                                                            @else
                                                                <div class="img-item slick-slide">
                                                                    <span class="img-thumbnail-scroll">
                                                                        <img width="600" height="600"
                                                                            src="{{ $mainFile }}" alt="">
                                                                    </span>
                                                                </div>
                                                            @endif

                                                            {{-- <div class="img-item slick-slide">
                                                                <span class="img-thumbnail-scroll">
                                                                    <img width="600" height="600" src="{{ asset('storage/' . $product->image) }}" alt="">
                                                            </span>
                                                        </div> --}}

                                                            @foreach ($product->others as $img)
                                                                @php
                                                                    $file = asset('storage/' . $img);
                                                                @endphp

                                                                @if (preg_match('/^.*\.(mp4|mov|mpeg|webm|avi)$/i', $file))
                                                                    <div class="img-item slick-slide">
                                                                        <span class="img-thumbnail-scroll">
                                                                            <video autoplay muted loop preload="none"
                                                                                width="100%" height="100%">
                                                                                <source src="{{ $file }}"
                                                                                    type="video/mp4" />
                                                                            </video>
                                                                        </span>
                                                                    </div>
                                                                @else
                                                                    <div class="img-item slick-slide">
                                                                        <span class="img-thumbnail-scroll">
                                                                            <img width="600" height="600"
                                                                                src="{{ $file }}"
                                                                                alt="">
                                                                        </span>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="scroll-image main-image">
                                                        <div class="image-additional slick-carousel"
                                                            data-asnavfor=".image-thumbnail" data-fade="true"
                                                            data-columns4="1" data-columns3="1" data-columns2="1"
                                                            data-columns1="1" data-columns="1" data-nav="true">
                                                            <div class="img-item slick-slide">
                                                                <img width="900" height="900"
                                                                    src="{{ asset('storage/' . $product->image) }}"
                                                                    alt="" title="">
                                                            </div>

                                                            @foreach ($product->others as $img)
                                                                @php
                                                                    $file = asset('storage/' . $img);
                                                                @endphp

                                                                @if (preg_match('/^.*\.(mp4|mov|mpeg|webm|avi)$/i', $file))
                                                                    <div class="img-item slick-slide">
                                                                        <video autoplay muted loop preload="none"
                                                                            width="100%" height="100%">
                                                                            <source src="{{ $file }}"
                                                                                type="video/mp4" />
                                                                        </video>
                                                                    </div>
                                                                @else
                                                                    <div class="img-item slick-slide">
                                                                        <img width="900" height="900"
                                                                            src="{{ $file }}" alt=""
                                                                            title="">
                                                                    </div>
                                                                @endif
                                                            @endforeach

                                                        </div>
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

                                            <div class="variations">
                                                <form id="cartForm" method="POST" enctype='multipart/form-data'>
                                                    @csrf
                                                    <table cellspacing="0">
                                                        <tbody>
                                                            @if (str_contains(strtolower($product->category->name), strtolower('PHOTO PENDANTS')) ||
                                                                    str_contains(strtolower($product->category->name), strtolower('NAME PENDANTS')))
                                                                <tr>
                                                                    <td class="label" style="width:20%">Chain Style
                                                                    </td>
                                                                    <td class="attributes">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input"
                                                                                type="radio" id="box"
                                                                                name="style" value="Cuban Chain">
                                                                            <label class="form-check-label"
                                                                                style="margin-left: 2px"
                                                                                for="box"> Cuban </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input"
                                                                                type="radio" id="Cable"
                                                                                name="style" value="Twisted Chain">
                                                                            <label class="form-check-label"
                                                                                style="margin-left: 2px"
                                                                                for="Cable"> Twisted</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input"
                                                                                type="radio" id="thick"
                                                                                name="style" value="Thick Designer">
                                                                            <label class="form-check-label"
                                                                                style="margin-left: 2px"
                                                                                for="Cable"> Thick Designer (Trending)</label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                            @if (str_contains(strtolower($product->category->name), strtolower('RINGS')))
                                                                <tr>
                                                                    <td class="label">Size</td>
                                                                    <td class="attributes">
                                                                        <select name="length">
                                                                            <option>4</option>
                                                                            <option>5</option>
                                                                            <option>6</option>
                                                                            <option>7</option>
                                                                            <option>8</option>
                                                                            <option>9</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                            @if (!str_contains(strtolower($product->category->name), strtolower('PHOTO PENDANTS')))
                                                                <tr>
                                                                    <td class="label">Plating</td>
                                                                    <td class="attributes">
                                                                        <ul class="colors">
                                                                            <li><span class="color-1"></span><input
                                                                                    type="radio" name="color"
                                                                                    value="Silver"></li>
                                                                            <li><span class="color-2"></span><input
                                                                                    type="radio" name="color"
                                                                                    value="Gold"></li>
                                                                            {{-- <li><span class="color-3"></span><input type="radio" name="color" value="Rose Gold"></li> --}}
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                            @if (str_contains(strtolower($product->category->name), strtolower('NAME PENDANTS')))
                                                                <tr>
                                                                    <td class="label" style="width:20%">Language</td>
                                                                    <td class="attributes">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input fontCheck"
                                                                                type="radio" id="English"
                                                                                name="lang" value="English">
                                                                            <label class="form-check-label"
                                                                                style="margin-left: 2px"
                                                                                for="English"> English </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input fontCheck"
                                                                                type="radio" id="Punjabi"
                                                                                name="lang" value="Punjabi">
                                                                            <label class="form-check-label"
                                                                                style="margin-left: 2px"
                                                                                for="Punjabi"> Punjabi </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input fontCheck"
                                                                                type="radio" id="Punjabi2"
                                                                                name="lang"
                                                                                value="Punjabi Caligraphy">
                                                                            <label class="form-check-label"
                                                                                style="margin-left: 2px"
                                                                                for="Punjabi2"> Punjabi Caligraphy
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input fontCheck"
                                                                                type="radio" id="Hindi"
                                                                                name="lang" value="Hindi">
                                                                            <label class="form-check-label"
                                                                                style="margin-left: 2px"
                                                                                for="Hindi"> Hindi </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input fontCheck"
                                                                                type="radio" id="Other"
                                                                                name="lang" value="Other">
                                                                            <label class="form-check-label"
                                                                                style="margin-left: 2px"
                                                                                for="Other"> Other Specify in
                                                                                description box </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                            @if (str_contains(strtolower($product->category->name), strtolower('PHOTO PENDANTS')) ||
                                                                    str_contains(strtolower($product->category->name), strtolower('NAME PENDANTS')))
                                                                <tr>
                                                                    <td class="label" style="width:100%">Name / Text
                                                                    </td>
                                                                    <td style="width:100%">
                                                                        <span class="form-control-wrap">
                                                                            <textarea name="custom_text" style="width:100%" class="form-control" aria-required="true"
                                                                                placeholder="Detail description about how you want your pendant. Please specify ..."></textarea>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                            @if (str_contains(strtolower($product->category->name), strtolower('NAME PENDANTS')))
                                                                <tr id="fontId">
                                                                    <td class="label" style="width:100%">Font</td>
                                                                    <td style="width:100%">
                                                                        @if ($fonts['english'])
                                                                            <div
                                                                                class="row d-flex align-items-center justify-content-center english">
                                                                                @foreach ($fonts['english'] as $font)
                                                                                    <label
                                                                                        class="col-md-3 col-4 lableCheck">
                                                                                        <input type="radio"
                                                                                            name="font"
                                                                                            value="{{ $font }}" />
                                                                                        <img
                                                                                            src="{{ $font }}">
                                                                                    </label>
                                                                                @endforeach
                                                                            </div>
                                                                        @endif
                                                                        @if ($fonts['hindi'])
                                                                            <div
                                                                                class="row d-flex align-items-center justify-content-center hindi d-none">
                                                                                @foreach ($fonts['hindi'] as $font)
                                                                                    <label
                                                                                        class="col-md-3 col-4 lableCheck">
                                                                                        <input type="radio"
                                                                                            name="font"
                                                                                            value="{{ $font }}" />
                                                                                        <img
                                                                                            src="{{ $font }}">
                                                                                    </label>
                                                                                @endforeach
                                                                            </div>
                                                                        @endif
                                                                        @if ($fonts['punjabi'])
                                                                            <div
                                                                                class="row d-flex align-items-center justify-content-center punjabi d-none">
                                                                                @foreach ($fonts['punjabi'] as $font)
                                                                                    <label
                                                                                        class="col-md-3 col-4 lableCheck">
                                                                                        <input type="radio"
                                                                                            name="font"
                                                                                            value="{{ $font }}" />
                                                                                        <img
                                                                                            src="{{ $font }}">
                                                                                    </label>
                                                                                @endforeach
                                                                            </div>
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                            @if (str_contains(strtolower($product->category->name), strtolower('PHOTO PENDANTS')))
                                                                <tr>
                                                                    <td class="label" style="width:100%">Choose your
                                                                        photo(s)</td>
                                                                    <td style="width:100%">
                                                                        <span class="form-control-wrap">
                                                                            <input type="file"
                                                                                name="custom_image[]"
                                                                                class="input-text"
                                                                                style="border-bottom: 2px #e5e5e5;height: 100%;"
                                                                                multiple>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                        </tbody>
                                                    </table>
                                                </form>
                                            </div>
                                            <div class="buttons">
                                                <div class="add-to-cart-wrap">
                                                    {{-- <div class="quantity">
                                                        <button type="button" class="plus">+</button>
                                                        <input type="number" class="qty" step="1" min="0" max="" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric" autocomplete="off">
                                                        <button type="button" class="minus">-</button>
                                                    </div> --}}
                                                    <div class="btn-add-to-cart-new">
                                                        {{-- @if (auth()->user()) --}}
                                                        <a onclick="submitCartForm('{{ route('cart.add', $product->id) }}')"
                                                            tabindex="0">Add to cart</a>
                                                        {{-- @else
                                                        <a href="#" onclick="alert('Please login to continue!')" tabindex="0">Add to cart</a>
                                                        @endif --}}
                                                    </div>
                                                </div>
                                                <div class="btn-quick-buy" data-title="Wishlist">
                                                    {{-- @if (auth()->user()) --}}
                                                    <a
                                                        onclick="submitCartForm('{{ route('cart.buy', $product->id) }}')">
                                                        <button class="product-btn">Buy It Now</button>
                                                    </a>
                                                    {{-- @else
                                                    <button class="product-btn" onclick="alert('Please login to continue!')">Buy It Now</button>
                                                    @endif --}}

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
                                                <span class="posted-in">Category: <a
                                                        href="{{ route('category', $product->category->id) }}"
                                                        rel="tag">{{ $product->category->name }}</a></span>
                                                <span class="tagged-as">Tags: <a href="#"
                                                        rel="tag">Hot</a>, <a href="#"
                                                        rel="tag">Trend</a></span>
                                            </div>
                                            <div class="social-share">
                                                <a href="#" title="Facebook" class="share-facebook"
                                                    target="_blank">
                                                    <i class="fa fa-facebook"></i>Facebook
                                                </a>
                                                <a href="#" title="Twitter" class="share-twitter">
                                                    <i class="fa fa-twitter"></i>Twitter
                                                </a>
                                                <a href="#" title="Pinterest" class="share-pinterest">
                                                    <i class="fa fa-pinterest"></i>Pinterest
                                                </a>
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
                                            {{-- <h2>Related Products</h2> --}}
                                        </div>
                                        <div class="block-content">
                                            {{-- <div class="content-product-list slick-wrap">
                                                <div class="slick-sliders products-list grid" data-slidestoscroll="true" data-dots="false" data-nav="1" data-columns4="1" data-columns3="2" data-columns2="3" data-columns1="3" data-columns1440="4" data-columns="4">
                                                    <div class="item-product slick-slide">
                                                        <div class="items">
                                                            <div class="products-entry clearfix product-wapper">
                                                                <div class="products-thumb">
                                                                    <div class="product-lable">
                                                                        <div class="hot">Hot</div>
                                                                    </div>
                                                                    <div class="product-thumb-hover">
                                                                        <a href="shop-details.html">
                                                                            <img width="600" height="600" src="media/product/13.jpg" class="post-image" alt="">
                                                                            <img width="600" height="600" src="media/product/13-2.jpg" class="hover-image back" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div class="btn-add-to-cart" data-title="Add to cart">
                                                                            <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                        </div>
                                                                        <div class="btn-wishlist" data-title="Wishlist">
                                                                            <button class="product-btn">Add to wishlist</button>
                                                                        </div>
                                                                        <div class="btn-compare" data-title="Compare">
                                                                            <button class="product-btn">Compare</button>
                                                                        </div>
                                                                        <span class="product-quickview" data-title="Quick View">
                                                                            <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="products-content">
                                                                    <div class="contents text-center">
                                                                        <h3 class="product-title"><a href="shop-details.html">Medium Flat Hoops</a></h3>
                                                                        <div class="rating">
                                                                            <div class="star star-5"></div>
                                                                        </div>
                                                                        <span class="price">$100.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-product slick-slide">
                                                        <div class="items">
                                                            <div class="products-entry clearfix product-wapper">
                                                                <div class="products-thumb">
                                                                    <div class="product-lable">
                                                                        <div class="hot">Hot</div>
                                                                    </div>
                                                                    <div class="product-thumb-hover">
                                                                        <a href="shop-details.html">
                                                                            <img width="600" height="600" src="media/product/2.jpg" class="post-image" alt="">
                                                                            <img width="600" height="600" src="media/product/2-2.jpg" class="hover-image back" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div class="btn-add-to-cart" data-title="Add to cart">
                                                                            <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                        </div>
                                                                        <div class="btn-wishlist" data-title="Wishlist">
                                                                            <button class="product-btn">Add to wishlist</button>
                                                                        </div>
                                                                        <div class="btn-compare" data-title="Compare">
                                                                            <button class="product-btn">Compare</button>
                                                                        </div>
                                                                        <span class="product-quickview" data-title="Quick View">
                                                                            <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="products-content">
                                                                    <div class="contents text-center">
                                                                        <h3 class="product-title"><a href="shop-details.html">Bold Pearl Hoop Earrings</a></h3>
                                                                        <div class="rating">
                                                                            <div class="star star-4"></div>
                                                                        </div>
                                                                        <span class="price">$200.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-product slick-slide">
                                                        <div class="items">
                                                            <div class="products-entry clearfix product-wapper">
                                                                <div class="products-thumb">
                                                                    <div class="product-lable">
                                                                        <div class="hot">Hot</div>
                                                                    </div>
                                                                    <div class="product-thumb-hover">
                                                                        <a href="shop-details.html">
                                                                            <img width="600" height="600" src="media/product/3.jpg" class="post-image" alt="">
                                                                            <img width="600" height="600" src="media/product/3-2.jpg" class="hover-image back" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div class="btn-add-to-cart" data-title="Add to cart">
                                                                            <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                        </div>
                                                                        <div class="btn-wishlist" data-title="Wishlist">
                                                                            <button class="product-btn">Add to wishlist</button>
                                                                        </div>
                                                                        <div class="btn-compare" data-title="Compare">
                                                                            <button class="product-btn">Compare</button>
                                                                        </div>
                                                                        <span class="product-quickview" data-title="Quick View">
                                                                            <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="products-content">
                                                                    <div class="contents text-center">
                                                                        <h3 class="product-title"><a href="shop-details.html">Twin Hoops</a></h3>
                                                                        <div class="rating">
                                                                            <div class="star star-0"></div>
                                                                        </div>
                                                                        <span class="price">$150.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-product slick-slide">
                                                        <div class="items">
                                                            <div class="products-entry clearfix product-wapper">
                                                                <div class="products-thumb">
                                                                    <div class="product-lable">
                                                                        <div class="onsale">-33%</div>
                                                                    </div>
                                                                    <div class="product-thumb-hover">
                                                                        <a href="shop-details.html">
                                                                            <img width="600" height="600" src="media/product/4.jpg" class="post-image" alt="">
                                                                            <img width="600" height="600" src="media/product/4-2.jpg" class="hover-image back" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div class="btn-add-to-cart" data-title="Add to cart">
                                                                            <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                        </div>
                                                                        <div class="btn-wishlist" data-title="Wishlist">
                                                                            <button class="product-btn">Add to wishlist</button>
                                                                        </div>
                                                                        <div class="btn-compare" data-title="Compare">
                                                                            <button class="product-btn">Compare</button>
                                                                        </div>
                                                                        <span class="product-quickview" data-title="Quick View">
                                                                            <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="products-content">
                                                                    <div class="contents text-center">
                                                                        <h3 class="product-title"><a href="shop-details.html">Yilver And Turquoise Earrings</a></h3>
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
                                                    <div class="item-product slick-slide">
                                                        <div class="items">
                                                            <div class="products-entry clearfix product-wapper">
                                                                <div class="products-thumb">
                                                                    <div class="product-lable">
                                                                        <div class="onsale">-7%</div>
                                                                    </div>
                                                                    <div class="product-thumb-hover">
                                                                        <a href="shop-details.html">
                                                                            <img width="600" height="600" src="media/product/5.jpg" class="post-image" alt="">
                                                                            <img width="600" height="600" src="media/product/5-2.jpg" class="hover-image back" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div class="btn-add-to-cart" data-title="Add to cart">
                                                                            <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                        </div>
                                                                        <div class="btn-wishlist" data-title="Wishlist">
                                                                            <button class="product-btn">Add to wishlist</button>
                                                                        </div>
                                                                        <div class="btn-compare" data-title="Compare">
                                                                            <button class="product-btn">Compare</button>
                                                                        </div>
                                                                        <span class="product-quickview" data-title="Quick View">
                                                                            <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                        </span>
                                                                    </div>
                                                                    <div class="product-stock">
                                                                        <span class="stock">Out Of Stock</span>
                                                                    </div>
                                                                </div>
                                                                <div class="products-content">
                                                                    <div class="contents text-center">
                                                                        <h3 class="product-title"><a href="shop-details.html">Amp Pendant Light Large</a></h3>
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
                                            </div> --}}
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
    </div><!-- #primary -->
    </div><!-- #main-content -->
    </div>
</x-main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {


        const labels = document.querySelectorAll('.lableCheck');
        labels.forEach(label => {
            label.addEventListener('click', () => {
                labels.forEach(l => l.classList.remove('fontSelect'));
                label.classList.add('fontSelect');
            });
        });


        // Handle click events on spans
        $('.colors li span').on('click', function() {
            var radioBtn = $(this).closest('li').find('input');
            radioBtn.attr('checked', true);
            $('.colors li span').removeClass('selected');
            $(this).addClass('selected');
        });

        $('.fontCheck').on('click', function(e) {
            $("input[name='font']:radio").prop('checked', false);
            $('.fontSelect').removeClass('fontSelect');
            if (e.target.id === "English") {
                $("#fontId").show();
                $(".english").show();
                $(".hindi").hide();
                $(".punjabi").hide();
            }
            if (e.target.id === "Hindi") {
                $("#fontId").show();
                $(".english").hide();
                $(".hindi").show();
                $(".punjabi").hide();
            }
            if (e.target.id === "Punjabi" || e.target.id === "Punjabi2") {
                $("#fontId").show();
                $(".english").hide();
                $(".hindi").hide();
                $(".punjabi").show();
            }

            if (e.target.id === "Other") {
                $(".english").hide();
                $(".hindi").hide();
                $(".punjabi").hide();
                $("#fontId").hide();
            }
        });
    });

    const submitCartForm = (route) => {
        let form = $('#cartForm')
        form.attr('action', route)
        form.submit();
    }
</script>
