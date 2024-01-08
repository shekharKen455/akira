<x-main>
    <div id="site-main" class="site-main">
        <div id="main-content" class="main-content">
            <div id="primary" class="content-area">
                <div id="title" class="page-title">
                    <div class="section-container">
                        <div class="content-title-heading">
                            <h1 class="text-title-heading">
                                Checkout
                            </h1>
                        </div>
                        <div class="breadcrumbs">
                            <a href="{{ route('home') }}">Home</a><span class="delimiter"></span><a href="{{ route('cart.show') }}">Cart</a><span class="delimiter"></span>Checkout
                        </div>
                    </div>
                </div>

                <div id="content" class="site-content" role="main">
                    <div class="section-padding">
                        <div class="section-container p-l-r">
                            <div class="shop-checkout">
                                <form name="checkout" method="POST" class="checkout" action="{{ route('order.save') }}" autocomplete="off" enctype='multipart/form-data'>
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-7 col-md-12 col-12">
                                            <div class="customer-details">
                                                <div class="billing-fields">
                                                    @if ($errors->any())
                                                    @foreach ($errors->all() as $error)
                                                    <p class="form-row">
                                                        <span class="text text-danger"><em>. {{ $error }} </em></span>
                                                    </p>
                                                    @endforeach
                                                    @endif
                                                    <h3>Billing Details</h3>

                                                    <div class="billing-fields-wrapper">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p class="form-row form-row-first validate-required">
                                                                    <label>First name <span class="required" title="required">*</span></label>
                                                                    <span class="input-wrapper">
                                                                        <input type="text" class="input-text" name="first_name" value="{{ old('first_name') }}" required></span>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="form-row form-row-last validate-required">
                                                                    <label>Last name <span class="required" title="required">*</span></label>
                                                                    <span class="input-wrapper">
                                                                        <input type="text" class="input-text" name="last_name" value="{{ old('last_name') }}" required></span>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <p class="form-row form-row-wide validate-required validate-email">
                                                                    <label>Email address <span class="required" title="required">*</span></label>
                                                                    <span class="input-wrapper">
                                                                        <input type="email" class="input-text" name="email" value="{{ old('email') }}" autocomplete="off" required>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <p class="form-row form-row-wide validate-required validate-phone">
                                                                    <label>Phone <span class="required" title="required">*</span></label>
                                                                    <span class="input-wrapper">
                                                                        <input type="tel" class="input-text" name="phone" value="{{ old('phone') }}" required>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <p class="form-row address-field validate-required form-row-wide">
                                                            <label>Street address <span class="required" title="required">*</span></label>
                                                            <span class="input-wrapper">
                                                                <input type="text" class="input-text" name="address_1" placeholder="House number and street name" value="{{ old('address_1') }}" required>
                                                            </span>
                                                        </p>
                                                        <p class="form-row address-field form-row-wide">
                                                            <label>Apartment, suite, unit, etc.&nbsp;<span class="optional">(optional)</span></label>
                                                            <span class="input-wrapper">
                                                                <input type="text" class="input-text" name="address_2" placeholder="Apartment, suite, unit, etc. (optional)" value="{{ old('address_2') }}">
                                                            </span>
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p class="form-row address-field validate-required form-row-wide">
                                                                    <label for="billing_city" class="">Town / City <span class="required" title="required">*</span></label>
                                                                    <span class="input-wrapper">
                                                                        <input type="text" class="input-text" name="city" value="{{ old('city') }}" required>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="form-row address-field validate-required form-row-wide">
                                                                    <label for="billing_city" class="">State <span class="required" title="required">*</span></label>
                                                                    <span class="input-wrapper">
                                                                        <input type="text" class="input-text" name="state" value="{{ old('state') }}" required>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="form-row address-field validate-required validate-state form-row-wide">
                                                                    <label>Country <span class="required" title="required">*</span></label>
                                                                    <span class="input-wrapper">
                                                                        <select id="country" name="country" class="form-control input-text" required>
                                                                            <option value="" selected disabled>Select Country</option>
                                                                            <option value="Afghanistan">Afghanistan</option>
                                                                            <option value="Åland Islands">Åland Islands</option>
                                                                            <option value="Albania">Albania</option>
                                                                            <option value="Algeria">Algeria</option>
                                                                            <option value="American Samoa">American Samoa</option>
                                                                            <option value="Andorra">Andorra</option>
                                                                            <option value="Angola">Angola</option>
                                                                            <option value="Anguilla">Anguilla</option>
                                                                            <option value="Antarctica">Antarctica</option>
                                                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                            <option value="Argentina">Argentina</option>
                                                                            <option value="Armenia">Armenia</option>
                                                                            <option value="Aruba">Aruba</option>
                                                                            <option value="Australia">Australia</option>
                                                                            <option value="Austria">Austria</option>
                                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                                            <option value="Bahamas">Bahamas</option>
                                                                            <option value="Bahrain">Bahrain</option>
                                                                            <option value="Bangladesh">Bangladesh</option>
                                                                            <option value="Barbados">Barbados</option>
                                                                            <option value="Belarus">Belarus</option>
                                                                            <option value="Belgium">Belgium</option>
                                                                            <option value="Belize">Belize</option>
                                                                            <option value="Benin">Benin</option>
                                                                            <option value="Bermuda">Bermuda</option>
                                                                            <option value="Bhutan">Bhutan</option>
                                                                            <option value="Bolivia">Bolivia</option>
                                                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                                            <option value="Botswana">Botswana</option>
                                                                            <option value="Bouvet Island">Bouvet Island</option>
                                                                            <option value="Brazil">Brazil</option>
                                                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                            <option value="Bulgaria">Bulgaria</option>
                                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                                            <option value="Burundi">Burundi</option>
                                                                            <option value="Cambodia">Cambodia</option>
                                                                            <option value="Cameroon">Cameroon</option>
                                                                            <option value="Canada">Canada</option>
                                                                            <option value="Cape Verde">Cape Verde</option>
                                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                                            <option value="Central African Republic">Central African Republic</option>
                                                                            <option value="Chad">Chad</option>
                                                                            <option value="Chile">Chile</option>
                                                                            <option value="China">China</option>
                                                                            <option value="Christmas Island">Christmas Island</option>
                                                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                                            <option value="Colombia">Colombia</option>
                                                                            <option value="Comoros">Comoros</option>
                                                                            <option value="Congo">Congo</option>
                                                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                                            <option value="Cook Islands">Cook Islands</option>
                                                                            <option value="Costa Rica">Costa Rica</option>
                                                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                                            <option value="Croatia">Croatia</option>
                                                                            <option value="Cuba">Cuba</option>
                                                                            <option value="Cyprus">Cyprus</option>
                                                                            <option value="Czech Republic">Czech Republic</option>
                                                                            <option value="Denmark">Denmark</option>
                                                                            <option value="Djibouti">Djibouti</option>
                                                                            <option value="Dominica">Dominica</option>
                                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                                            <option value="Ecuador">Ecuador</option>
                                                                            <option value="Egypt">Egypt</option>
                                                                            <option value="El Salvador">El Salvador</option>
                                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                            <option value="Eritrea">Eritrea</option>
                                                                            <option value="Estonia">Estonia</option>
                                                                            <option value="Ethiopia">Ethiopia</option>
                                                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                                            <option value="Fiji">Fiji</option>
                                                                            <option value="Finland">Finland</option>
                                                                            <option value="France">France</option>
                                                                            <option value="French Guiana">French Guiana</option>
                                                                            <option value="French Polynesia">French Polynesia</option>
                                                                            <option value="French Southern Territories">French Southern Territories</option>
                                                                            <option value="Gabon">Gabon</option>
                                                                            <option value="Gambia">Gambia</option>
                                                                            <option value="Georgia">Georgia</option>
                                                                            <option value="Germany">Germany</option>
                                                                            <option value="Ghana">Ghana</option>
                                                                            <option value="Gibraltar">Gibraltar</option>
                                                                            <option value="Greece">Greece</option>
                                                                            <option value="Greenland">Greenland</option>
                                                                            <option value="Grenada">Grenada</option>
                                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                                            <option value="Guam">Guam</option>
                                                                            <option value="Guatemala">Guatemala</option>
                                                                            <option value="Guernsey">Guernsey</option>
                                                                            <option value="Guinea">Guinea</option>
                                                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                                                            <option value="Guyana">Guyana</option>
                                                                            <option value="Haiti">Haiti</option>
                                                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                                            <option value="Honduras">Honduras</option>
                                                                            <option value="Hong Kong">Hong Kong</option>
                                                                            <option value="Hungary">Hungary</option>
                                                                            <option value="Iceland">Iceland</option>
                                                                            <option value="India">India</option>
                                                                            <option value="Indonesia">Indonesia</option>
                                                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                                            <option value="Iraq">Iraq</option>
                                                                            <option value="Ireland">Ireland</option>
                                                                            <option value="Isle of Man">Isle of Man</option>
                                                                            <option value="Israel">Israel</option>
                                                                            <option value="Italy">Italy</option>
                                                                            <option value="Jamaica">Jamaica</option>
                                                                            <option value="Japan">Japan</option>
                                                                            <option value="Jersey">Jersey</option>
                                                                            <option value="Jordan">Jordan</option>
                                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                                            <option value="Kenya">Kenya</option>
                                                                            <option value="Kiribati">Kiribati</option>
                                                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                                                            <option value="Kuwait">Kuwait</option>
                                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                                            <option value="Latvia">Latvia</option>
                                                                            <option value="Lebanon">Lebanon</option>
                                                                            <option value="Lesotho">Lesotho</option>
                                                                            <option value="Liberia">Liberia</option>
                                                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                                            <option value="Lithuania">Lithuania</option>
                                                                            <option value="Luxembourg">Luxembourg</option>
                                                                            <option value="Macao">Macao</option>
                                                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                                            <option value="Madagascar">Madagascar</option>
                                                                            <option value="Malawi">Malawi</option>
                                                                            <option value="Malaysia">Malaysia</option>
                                                                            <option value="Maldives">Maldives</option>
                                                                            <option value="Mali">Mali</option>
                                                                            <option value="Malta">Malta</option>
                                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                                            <option value="Martinique">Martinique</option>
                                                                            <option value="Mauritania">Mauritania</option>
                                                                            <option value="Mauritius">Mauritius</option>
                                                                            <option value="Mayotte">Mayotte</option>
                                                                            <option value="Mexico">Mexico</option>
                                                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                                            <option value="Monaco">Monaco</option>
                                                                            <option value="Mongolia">Mongolia</option>
                                                                            <option value="Montenegro">Montenegro</option>
                                                                            <option value="Montserrat">Montserrat</option>
                                                                            <option value="Morocco">Morocco</option>
                                                                            <option value="Mozambique">Mozambique</option>
                                                                            <option value="Myanmar">Myanmar</option>
                                                                            <option value="Namibia">Namibia</option>
                                                                            <option value="Nauru">Nauru</option>
                                                                            <option value="Nepal">Nepal</option>
                                                                            <option value="Netherlands">Netherlands</option>
                                                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                                            <option value="New Caledonia">New Caledonia</option>
                                                                            <option value="New Zealand">New Zealand</option>
                                                                            <option value="Nicaragua">Nicaragua</option>
                                                                            <option value="Niger">Niger</option>
                                                                            <option value="Nigeria">Nigeria</option>
                                                                            <option value="Niue">Niue</option>
                                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                            <option value="Norway">Norway</option>
                                                                            <option value="Oman">Oman</option>
                                                                            <option value="Pakistan">Pakistan</option>
                                                                            <option value="Palau">Palau</option>
                                                                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                                            <option value="Panama">Panama</option>
                                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                                            <option value="Paraguay">Paraguay</option>
                                                                            <option value="Peru">Peru</option>
                                                                            <option value="Philippines">Philippines</option>
                                                                            <option value="Pitcairn">Pitcairn</option>
                                                                            <option value="Poland">Poland</option>
                                                                            <option value="Portugal">Portugal</option>
                                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                                            <option value="Qatar">Qatar</option>
                                                                            <option value="Reunion">Reunion</option>
                                                                            <option value="Romania">Romania</option>
                                                                            <option value="Russian Federation">Russian Federation</option>
                                                                            <option value="Rwanda">Rwanda</option>
                                                                            <option value="Saint Helena">Saint Helena</option>
                                                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                                            <option value="Saint Lucia">Saint Lucia</option>
                                                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                                            <option value="Samoa">Samoa</option>
                                                                            <option value="San Marino">San Marino</option>
                                                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                                            <option value="Senegal">Senegal</option>
                                                                            <option value="Serbia">Serbia</option>
                                                                            <option value="Seychelles">Seychelles</option>
                                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                                            <option value="Singapore">Singapore</option>
                                                                            <option value="Slovakia">Slovakia</option>
                                                                            <option value="Slovenia">Slovenia</option>
                                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                                            <option value="Somalia">Somalia</option>
                                                                            <option value="South Africa">South Africa</option>
                                                                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                                            <option value="Spain">Spain</option>
                                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                                            <option value="Sudan">Sudan</option>
                                                                            <option value="Suriname">Suriname</option>
                                                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                                            <option value="Swaziland">Swaziland</option>
                                                                            <option value="Sweden">Sweden</option>
                                                                            <option value="Switzerland">Switzerland</option>
                                                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                                            <option value="Taiwan">Taiwan</option>
                                                                            <option value="Tajikistan">Tajikistan</option>
                                                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                                            <option value="Thailand">Thailand</option>
                                                                            <option value="Timor-leste">Timor-leste</option>
                                                                            <option value="Togo">Togo</option>
                                                                            <option value="Tokelau">Tokelau</option>
                                                                            <option value="Tonga">Tonga</option>
                                                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                            <option value="Tunisia">Tunisia</option>
                                                                            <option value="Turkey">Turkey</option>
                                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                                            <option value="Tuvalu">Tuvalu</option>
                                                                            <option value="Uganda">Uganda</option>
                                                                            <option value="Ukraine">Ukraine</option>
                                                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                                                            <option value="United Kingdom">United Kingdom</option>
                                                                            <option value="United States">United States</option>
                                                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                                            <option value="Uruguay">Uruguay</option>
                                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                                            <option value="Vanuatu">Vanuatu</option>
                                                                            <option value="Venezuela">Venezuela</option>
                                                                            <option value="Viet Nam">Viet Nam</option>
                                                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                                            <option value="Western Sahara">Western Sahara</option>
                                                                            <option value="Yemen">Yemen</option>
                                                                            <option value="Zambia">Zambia</option>
                                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                                        </select>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="form-row address-field validate-required validate-postcode form-row-wide">
                                                                    <label>Postcode / ZIP <span class="required" title="required">*</span></label>
                                                                    <span class="input-wrapper">
                                                                        <input type="text" class="input-text" name="postcode" value="{{ old('postcode') }}" required>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- <div class="additional-fields">
                                                <p class="form-row notes">
                                                    <label>Custom Image <span class="optional">(optional)</span></label>
                                                    <span class="input-wrapper">
                                                        <input type="file" name="custom_image" class="input-text" style="border-bottom: 2px #e5e5e5;height: 100%;" />
                                                    </span>
                                                </p>
                                            </div> --}}

                                            <div class="additional-fields">
                                                <p class="form-row notes">
                                                    <label>Order notes <span class="optional">(optional)</span></label>
                                                    <span class="input-wrapper">
                                                        <textarea name="notes" class="input-text" placeholder="Notes about your order, e.g. special notes for delivery." rows="5" cols="5">{{ old('notes') }}</textarea>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-5 col-md-12 col-12">
                                            <div class="checkout-review-order">
                                                <div class="checkout-review-order-table">
                                                    <h3 class="review-order-title">Product</h3>
                                                    <div class="cart-items">

                                                        @php
                                                        $totalPrice = 0;
                                                        @endphp

                                                        @foreach ($cart as $item)
                                                        @php
                                                        $totalPrice += $item->sub_amount ?? ($item->product->price * $item->quantity);
                                                        @endphp

                                                        <div class="cart-item">
                                                            <div class="info-product">
                                                                <div class="product-thumbnail">
                                                                    <img width="600" height="600" src="{{ asset('storage/' . $item->product->image) }}" alt="">
                                                                </div>
                                                                <div class="product-name">
                                                                    {{ $item->product->name }}
                                                                    <strong class="product-quantity">QTY : {{ $item->quantity ?? 1 }}</strong>
                                                                </div>
                                                            </div>
                                                            <div class="product-total">
                                                                <span>${{ $item->sub_amount ?? $item->product->price }}</span>
                                                            </div>
                                                        </div>
                                                        @endforeach

                                                    </div>
                                                    <div class="cart-subtotal">
                                                        <h2>Subtotal</h2>
                                                        <div class="subtotal-price">
                                                            <span>${{ $totalPrice }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="shipping-totals shipping">
                                                        <h2>Shipping</h2>
                                                        {{-- <div data-title="Shipping">
                                                            <ul class="shipping-methods custom-radio">
                                                                <li>
                                                                    <input type="radio" name="shipping_method" data-index="0" value="free_shipping" class="shipping_method" checked="checked"><label>Free shipping</label>
                                                                </li>
                                                                <li>
                                                                    <input type="radio" name="shipping_method" data-index="0" value="flat_rate" class="shipping_method"><label>Flat rate</label>
                                                                </li>
                                                            </ul>
                                                        </div> --}}
                                                        <div class="Shipping">
                                                            <span>${{ $shipping = ($totalPrice * 13) / 100 }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="shipping-totals shipping">
                                                        <h2>Taxes & Fees</h2>
                                                        <div class="subtotal-price">
                                                            <span id="taxId"> - </span>
                                                        </div>
                                                    </div>
                                                    <div class="order-total">
                                                        <h2>Total</h2>
                                                        <div class="total-price">
                                                            <strong>
                                                                <span id="totalAmountText">${{ $tamt = $totalPrice + $shipping }}</span>
                                                                <input type="hidden" name="sub_amount" id="totalAmount" value="{{ $totalPrice + $shipping }}" />
                                                            </strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="payment" class="checkout-payment">
                                                    <ul class="payment-methods methods custom-radio">
                                                        <li class="payment-method">
                                                            <input type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked">
                                                            <label for="payment_method_bacs">Pay With Moneris</label>
                                                            {{-- <div class="payment-box" style="">
                                                                <p>Make your payment directly into our bank account. Be payment ready with moneris.</p>
                                                            </div> --}}
                                                        </li>

                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-12">
                                                                <label class="required">Card Number:</label><br>
                                                                <span class="form-control-wrap">
                                                                    <input type="number" name="card_number" value="" size="40" class="form-control" aria-required="true" required>
                                                                </span>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6">
                                                                <label class="required">Expiry Month:</label><br>
                                                                <span class="form-control-wrap">
                                                                    <select name="month" class="form-control" required>
                                                                        <option value=''>--Select Month--</option>
                                                                        <option value='01'>Janaury</option>
                                                                        <option value='02'>February</option>
                                                                        <option value='03'>March</option>
                                                                        <option value='04'>April</option>
                                                                        <option value='05'>May</option>
                                                                        <option value='06'>June</option>
                                                                        <option value='07'>July</option>
                                                                        <option value='08'>August</option>
                                                                        <option value='09'>September</option>
                                                                        <option value='10'>October</option>
                                                                        <option value='11'>November</option>
                                                                        <option value='12'>December</option>
                                                                    </select>
                                                                </span>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6">
                                                                <label class="required">Expiry Year:</label><br>
                                                                <span class="form-control-wrap">
                                                                    <input type="number" name="year" min="2023" max="2050" value="" size="4" class="form-control" aria-required="true" required>
                                                                </span>
                                                            </div>
                                                            <div class="col-sm-12 col-md-12">
                                                                <label class="required">CVV:</label><br>
                                                                <span class="form-control-wrap">
                                                                    <input type="number" name="cvv" class="form-control" aria-required="true" required>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        {{-- <li class="payment-method">
                                                            <input type="radio" class="input-radio" name="payment_method" value="cheque">
                                                            <label>Check payments</label>
                                                            <div class="payment-box" style="display: none;">
                                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                            </div>
                                                        </li>
                                                        <li class="payment-method">
                                                            <input type="radio" class="input-radio" name="payment_method" value="cod">
                                                            <label>Cash on delivery</label>
                                                            <div class="payment-box" style="display: none;">
                                                                <p>Pay with cash upon delivery.</p>
                                                            </div>
                                                        </li>
                                                        <li class="payment-method">
                                                            <input type="radio" class="input-radio" name="payment_method" value="paypal">
                                                            <label>PayPal</label>
                                                            <div class="payment-box" style="display: none;">
                                                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                            </div>
                                                        </li> --}}
                                                    </ul>
                                                    <div class="form-row place-order">
                                                        <div class="terms-and-conditions-wrapper">
                                                            <div class="privacy-policy-text"></div>
                                                        </div>
                                                        <button type="submit" class="button alt" name="checkout_place_order" value="Place order">Place order</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- #content -->
            </div><!-- #primary -->
        </div><!-- #main-content -->
    </div>


</x-main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $('#country').on('change', function() {
            let tax = 10;
            let totalAmount = parseFloat('{{ $tamt }}');
            if (this.value === "Canada") {
                let tax = (parseFloat('{{ $totalPrice }}') * 10) / 100;
                let totalAmt = tax + totalAmount
                $('#taxId').html('$' + tax)
                $('#totalAmountText').html('$' + totalAmt)
                $('#totalAmount').val(totalAmt)


            } else {
                let tax = (parseFloat('{{ $totalPrice }}') * 25) / 100;
                let totalAmt = tax + totalAmount
                $('#taxId').html('$' + tax)
                $('#totalAmountText').html('$' + totalAmt)
                $('#totalAmount').val(totalAmt)
            }
        });
    })

</script>
