<x-main>
    <div id="site-main" class="site-main">
        <div id="main-content" class="main-content">
            <div id="primary" class="content-area">
                <div id="title" class="page-title">
                    <div class="section-container">
                        <div class="content-title-heading">
                            <h1 class="text-title-heading">
                                Shopping Cart
                            </h1>
                        </div>
                        <div class="breadcrumbs">
                            <a href="{{ route('home') }}">Home</a><span class="delimiter"></span></span>Shopping Cart
                        </div>
                    </div>
                </div>

                <div id="content" class="site-content" role="main">
                    <div class="section-padding">
                        <div class="section-container p-l-r">
                            @if(count($cart) > 0)
                            <div class="shop-cart">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-12 col-md-12 col-12">
                                        <form class="cart-form" action="{{ route('cart.update') }}" method="POST">
                                            @csrf
                                            <div class="table-responsive">
                                                <table class="cart-items table" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-thumbnail">Product</th>
                                                            <th class="product-price">Price</th>
                                                            <th class="product-quantity">Quantity</th>
                                                            <th class="product-subtotal">Subtotal</th>
                                                            <th class="product-remove">Remove</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                        $totalPrice = 0;
                                                        $thickCount = 0;
                                                        @endphp

                                                        @foreach ($cart as $key => $item)
                                                        
                                                        @php
                                                        $totalPrice += ($item['product']->price * $item['quantity']);
                                                        $totalPrice += $item['style'] === "Thick Designer" ? (15 * $item['quantity']) : 0;
                                                        $thickCount += $item['style'] === "Thick Designer" ? (1 * $item['quantity']) : 0;
                                                        @endphp
                                                        <tr class="cart-item">
                                                            <td class="product-thumbnail">
                                                                <a href="#">
                                                                    <img width="600" height="600" src="{{ asset('storage/' . $item['product']->image) }}" class="product-image" alt="">
                                                                </a>
                                                                <div class="product-name">
                                                                    <a href="#">{{ $item['product']->name }}</a>
                                                                </div>
                                                            </td>
                                                            <td class="product-price">
                                                                <span class="price">${{ $item['product']->price }}</span>
                                                            </td>
                                                            <td class="product-quantity">
                                                                <div class="quantity">
                                                                    <button type="button" class="minus">-</button>
                                                                    <input type="number" class="qty" step="1" min="0" max="" name="item[{{$key}}][quantity]" value="{{ $item['quantity'] ?? 1 }}" title="Qty" size="4" placeholder="" inputmode="numeric" autocomplete="off">
                                                                    <button type="button" class="plus">+</button>
                                                                </div>
                                                            </td>
                                                            <input type="hidden" name="item[{{$key}}][price]" value="{{ $item['product']->price }}" />
                                                            <td class="product-subtotal">
                                                                <span>${{ $item['product']->price * $item['quantity'] }}</span>
                                                            </td>
                                                            <td class="product-remove-new">
                                                                <a href="{{ route('cart.delete', [$key, 'cart'=>'yes']) }}" class="remove">×</a>
                                                            </td>
                                                        </tr>

                                                        @endforeach
                                                        <tr>
                                                            <td colspan="6" class="actions">
                                                                <div class="bottom-cart">
                                                                    {{-- <div class="coupon">
																				<input type="text" name="coupon_code" class="input-text" id="coupon-code" value="" placeholder="Coupon code"> 
																				<button type="submit" name="apply_coupon" class="button" value="Apply coupon">Apply coupon</button>
																			</div> --}}
                                                                    <h2><a href="{{ route('home') }}">Continue Shopping</a></h2>
                                                                    <button type="submit" name="update_cart" class="button" value="Update cart">Update cart</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-xl-4 col-lg-12 col-md-12 col-12">
                                        <div class="cart-totals">
                                            <h2>Cart totals</h2>
                                            <div>
                                                <div class="cart-subtotal">
                                                    <div class="title">Subtotal</div>
                                                    <div><span>${{ $totalPrice - ($thickCount * 15) }}</span></div>
                                                </div>
                                                <div class="cart-subtotal">
                                                    <div class="title">Additional Cost (Designer Chain)</div>
                                                    <div><span>${{ $thickCount * 15 }}</span></div>
                                                </div>
                                                <div class="shipping-totals">
                                                    <div class="title">Shipping</div>
                                                    <div>
                                                        <p class="shipping-desc">
                                                            Shipping options will be updated during checkout.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="shipping-totals">
                                                    <div class="title">Taxes & Fee</div>
                                                    <div>
                                                        <p class="shipping-desc">
                                                            13% HST
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="order-total">
                                                    <div class="title">Total</div>
                                                    <div><span>${{ $totalPrice }}</span></div>
                                                </div>
                                            </div>
                                            <div class="proceed-to-checkout">
                                                <a href="{{ route('checkout') }}" class="checkout-button button">
                                                    Proceed to checkout
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="shop-cart-empty-new">
                                <div class="notices-wrapper">
                                    <p class="cart-empty">Your cart is currently empty.</p>
                                </div>
                                <div class="return-to-shop">
                                    <a class="button" href="{{ route('home') }}">
                                        Return to shop
                                    </a>
                                </div>
                            </div>
                            @endif

                        </div>
                    </div>
                </div><!-- #content -->
            </div><!-- #primary -->
        </div><!-- #main-content -->
    </div>
</x-main>
