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
                                                    <div class="content-thumbnail-scroll">
                                                        <div class="image-thumbnail slick-carousel slick-vertical" data-asnavfor=".image-additional" data-centermode="true" data-focusonselect="true" data-columns4="5" data-columns3="4" data-columns2="4" data-columns1="4" data-columns="4" data-nav="true" data-vertical="&quot;true&quot;" data-verticalswiping="&quot;true&quot;">
                                                            <div class="img-item slick-slide">
                                                                <span class="img-thumbnail-scroll">
                                                                    <img width="600" height="600" src="{{ asset('storage/' . $product->image) }}" alt="">
                                                                </span>
                                                            </div>

                                                            @foreach ($product->others as $img)
                                                            <div class="img-item slick-slide">
                                                                <span class="img-thumbnail-scroll">
                                                                    <img width="600" height="600" src="{{ asset('storage/' . $img) }}" alt="">
                                                                </span>
                                                            </div>
                                                            @endforeach

                                                            {{-- <div class="img-item slick-slide">
																		<span class="img-thumbnail-scroll">
																			<img width="600" height="600" src="media/product/1.jpg" alt="">
																		</span>
																	</div>
																	<div class="img-item slick-slide">
																		<span class="img-thumbnail-scroll">
																			<img width="600" height="600" src="media/product/1-2.jpg" alt="">
																		</span>
																	</div>
																	<div class="img-item slick-slide">
																		<span class="img-thumbnail-scroll">
																			<img width="600" height="600" src="media/product/2.jpg" alt="">
																		</span>
																	</div>
																	<div class="img-item slick-slide">
																		<span class="img-thumbnail-scroll">
																			<img width="600" height="600" src="media/product/2-2.jpg" alt="">
																		</span>
																	</div>
																	<div class="img-item slick-slide">
																		<span class="img-thumbnail-scroll">
																			<img width="600" height="600" src="media/product/3.jpg" alt="">
																		</span>
																	</div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="scroll-image main-image">
                                                        <div class="image-additional slick-carousel" data-asnavfor=".image-thumbnail" data-fade="true" data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="1" data-columns="1" data-nav="true">
                                                            <div class="img-item slick-slide">
                                                                <img width="900" height="900" src="{{ asset('storage/' . $product->image) }}" alt="" title="">
                                                            </div>

                                                            @foreach ($product->others as $img)
                                                            <div class="img-item slick-slide">
                                                                <img width="900" height="900" src="{{ asset('storage/' . $img) }}" alt="" title="">
                                                            </div>
                                                            @endforeach

                                                            {{-- <div class="img-item slick-slide">
                                                                            <img width="900" height="900" src="media/product/1.jpg" alt="" title="">
                                                                        </div>
                                                                        <div class="img-item slick-slide">
                                                                            <img width="900" height="900" src="media/product/1-2.jpg" alt="" title="">
                                                                        </div>
                                                                        <div class="img-item slick-slide">
                                                                            <img width="900" height="900" src="media/product/2.jpg" alt="" title="">
                                                                        </div>
                                                                        <div class="img-item slick-slide">
                                                                            <img width="900" height="900" src="media/product/2-2.jpg" alt="" title="">
                                                                        </div>
                                                                        <div class="img-item slick-slide">
                                                                            <img width="900" height="900" src="media/product/3.jpg" alt="" title="">
                                                                        </div> --}}
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

                                            <style>
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

                                            </style>
                                            <div class="variations">
                                                <form id="cartForm" method="GET">
                                                    <table cellspacing="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="label">Length</td>
                                                                <td class="attributes">
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" id="length-35cm" name="length" value="35">
                                                                        <label class="form-check-label" for="length-35cm">35 CM (14")</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" id="length-40cm" name="length" value="40">
                                                                        <label class="form-check-label" for="length-40cm">40 CM (16")</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" id="length-45cm" name="length" value="45">
                                                                        <label class="form-check-label" for="length-45cm">45 CM (18")</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" id="length-50cm" name="length" value="50">
                                                                        <label class="form-check-label" for="length-50cm">50 CM (20")</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" id="length-55cm" name="length" value="55">
                                                                        <label class="form-check-label" for="length-55cm">55 CM (22")</label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="label">Style</td>
                                                                <td class="attributes">
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" id="box" name="style" value="Box Chain">
                                                                        <label class="form-check-label" for="box">Box Chain</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" id="Cable" name="style" value="Cable Chain">
                                                                        <label class="form-check-label" for="Cable">Cable Chain</label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="label">Plating</td>
                                                                <td class="attributes">
                                                                    <ul class="colors">
                                                                        <li><span class="color-1"></span><input type="radio" name="color" value="Silver"></li>
                                                                        <li><span class="color-2"></span><input type="radio" name="color" value="Gold"></li>
                                                                        <li><span class="color-3"></span><input type="radio" name="color" value="Rose Gold"></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="labelText">Name/Text</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <span class="form-control-wrap">
                                                                        <input type="text" name="custom_text" value="" size="100%" class="form-control" aria-required="true" placeholder="Enter your text ...">
                                                                    </span>
                                                                </td>
                                                            </tr>
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
                                                        @if (auth()->user())
                                                        <a onclick="submitCartForm('{{ route('cart.add', $product->id) }}')" tabindex="0">Add to cart</a>
                                                        @else
                                                        <a href="#" onclick="alert('Please login to continue!')" tabindex="0">Add to cart</a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="btn-quick-buy" data-title="Wishlist">
                                                    @if (auth()->user())
                                                    <a onclick="submitCartForm('{{ route('cart.buy', $product->id) }}')">
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
                                                <span class="posted-in">Category: <a href="{{ route('category', $product->category->id) }}" rel="tag">{{ $product->category->name }}</a></span>
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
                                            <div class="content-product-list slick-wrap">
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
    </div><!-- #primary -->
    </div><!-- #main-content -->
    </div>
</x-main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        // Handle click events on spans
        $('.colors li span').on('click', function() {
            // Get the associated radio button
            var radioBtn = $(this).closest('li').find('input');

            // Check the radio button
            radioBtn.attr('checked', true);

            // Remove the 'selected' class from all spans
            $('.colors li span').removeClass('selected');

            // Add the 'selected' class to the clicked span
            $(this).addClass('selected');
        });
    });


    const submitCartForm = (route) => {
        let form = $('#cartForm')
        form.attr('action', route)
        form.submit();
    }

</script>
