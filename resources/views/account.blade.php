<x-main>
    <div id="site-main" class="site-main">
        <div id="main-content" class="main-content">
            <div id="primary" class="content-area">
                <div id="title" class="page-title">
                    <div class="section-container">
                        <div class="content-title-heading">
                            <h1 class="text-title-heading">
                                My Account
                            </h1>
                        </div>
                        <div class="breadcrumbs">
                            <a href="{{ route('home') }}">Home</a><span class="delimiter"></span>My Account
                        </div>
                    </div>
                </div>

                <div id="content" class="site-content" role="main">
                    <div class="section-padding">
                        <div class="section-container p-l-r">
                            <div class="page-my-account">
                                <div class="my-account-wrap clearfix">
                                    <nav class="my-account-navigation">
                                        <ul class="nav nav-tabs">
                                            {{-- <li class="nav-item">
												<a class="nav-link active" data-toggle="tab" href="#dashboard" role="tab">Dashboard</a>
											</li> --}}
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#orders" role="tab">Orders</a>
                                            </li>
                                            {{-- <li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#addresses" role="tab">Addresses</a>
											</li> --}}
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#account-details" role="tab">Account details</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="my-account-content tab-content">
                                        {{-- <div class="tab-pane fade show active" id="dashboard" role="tabpanel">
											<div class="my-account-dashboard">
												<p>
													Hello <strong>{{ auth()->user()->name }}</strong> (not <strong>{{ auth()->user()->name }}</strong>? <a href="{{ route('logout') }}">Log out</a>)
                                        </p>
                                        <p>
                                            From your account dashboard you can view your <a data-toggle="tab" role="tab" href="#orders">recent orders</a>, manage your <a data-toggle="tab" role="tab" href="#addresses">shipping and billing addresses</a>, and <a data-toggle="tab" role="tab" href="#account-details">edit your password and account details</a>.
                                        </p>
                                    </div>
                                </div> --}}
                                @if(session('success'))
                                <p class="form-row">
                                    <span class="text text-success"><em>. {{ session('success') }} </em></span>
                                </p>
                                @endif

                                @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                <p class="form-row">
                                    <span class="text text-danger"><em>. {{ $error }} </em></span>
                                </p>
                                @endforeach
                                @endif
                                <div class="tab-pane fade show active" id="orders" role="tabpanel">
                                    <div class="my-account-orders">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Order</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($orders as $order)
                                                    <tr>
                                                        <td>#{{ $order->id }}</td>
                                                        <td>{{ $order->created_at->format('M d, Y') }}</td>
                                                        <td>{{ $order->order_status }}</td>
                                                        <td>${{ $order->total_amount }} for {{ $order->order_product_count }} items</td>
                                                        <td><a href="#" class="btn-small d-block">View</a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="addresses" role="tabpanel">
                                    <div class="my-account-addresses">
                                        <p>
                                            The following addresses will be used on the checkout page by default.
                                        </p>
                                        <div class="addresses">
                                            <div class="addresses-col">
                                                <header class="col-title">
                                                    <h3>Billing address</h3>
                                                    <a href="#" class="edit">Edit</a>
                                                </header>
                                                <address>
                                                    3522 Interstate<br>
                                                    75 Business Spur,<br>
                                                    Sault Ste.<br>
                                                    Marie, MI 49783
                                                </address>
                                            </div>
                                            <div class="addresses-col">
                                                <header class="col-title">
                                                    <h3>Shipping address</h3>
                                                    <a href="#" class="edit">Edit</a>
                                                </header>
                                                <address>
                                                    4299 Express Lane<br>
                                                    Sarasota,<br>
                                                    FL 34249 USA <br>
                                                    Phone: 1.941.227.4444
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-details" role="tabpanel">
                                    <div class="my-account-account-details">
                                        <form class="edit-account" action="{{ route('profile') }}" method="post">
                                            @csrf

                                            <p class="form-row">
                                                <label>Display name <span class="required">*</span></label>
                                                <input type="text" class="input-text" name="name" value="{{ auth()->user()->name }}">
                                                <span><em>This will be how your name will be displayed in the account section and in reviews</em></span>
                                            </p>
                                            <div class="clear"></div>
                                            <p class="form-row">
                                                <label>Email address <span class="required">*</span></label>
                                                <input type="email" class="input-text" name="email" value="{{ auth()->user()->email }}">
                                            </p>
                                            <p class="form-row">
                                                <button type="submit" class="button" name="save_account_details" value="Save changes">Save changes</button>
                                            </p>
                                        </form>
                                        <form class="edit-account" action="{{ route('password') }}" method="post">
                                            @csrf
                                            <fieldset>
                                                <legend>Password change</legend>
                                                <p class="form-row">
                                                    <label>Current password (leave blank to leave unchanged)</label>
                                                    <input type="password" class="input-text" name="old_password" autocomplete="off" required>
                                                </p>
                                                <p class="form-row">
                                                    <label>New password (leave blank to leave unchanged)</label>
                                                    <input type="password" class="input-text" name="new_password" autocomplete="off" required>
                                                </p>
                                                <p class="form-row">
                                                    <label>Confirm new password</label>
                                                    <input type="password" class="input-text" name="new_password_confirmation" autocomplete="off" required>
                                                </p>
                                            </fieldset>
                                            <div class="clear"></div>
                                            <p class="form-row">
                                                <button type="submit" class="button" name="save_account_details" value="Save changes">Update Password</button>
                                            </p>
                                        </form>
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
