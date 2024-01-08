@php
$title = "orders";
@endphp
<x-admin :title="$title">
    <section class="content-main">
        <div class="row">
            <div class="col-9">
                <div class="content-header">
                    <h2 class="content-title">Order Details</h2>
                    <div>
                        <a href="{{ route('admin.order') }}" class="btn btn-light rounded font-sm mr-5 text-body hover-up">Go Back</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Order</h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <label for="product_name" class="form-label text-danger">{{$error}}</label>
                        @endforeach
                        @endif

                        <form action="{{ route('admin.order.update', $order->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Order ID</label>
                                <input class="form-control" name="name" readonly value='{{ $order->id }}'>
                            </div>
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Total Amount (Including Shiping & Tax)</label>
                                <input class="form-control" name="name" readonly value='$ {{ $order->total_amount }}'>
                            </div>
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Payment ID</label>
                                <input class="form-control" name="name" readonly value='{{ $order->payment_id }}'>
                            </div>

                            @if($order->custom_image)
                            <div class="mb-4">
                                <a href="{{ asset('storage/' . $order->custom_image) }}" target="_blank">
                                    <label for="product_name" class="form-label">Custom Image</label>
                                    <img src="{{ asset('storage/' . $order->custom_image) }}" class="rounded mx-auto d-block" height="200" />
                                </a>
                            </div>
                            @endif


                            <div class="mb-4">
                                <label for="product_name" class="form-label">Update Status <span class="text-danger">*</span></label>
                                <select class="form-control" name="order_status">
                                    <option value="Pending" {{ $order->order_status === "Pending" ? 'selected' : '' }}>Pending</option>
                                    <option value="Processed" {{ $order->order_status === "Processed" ? 'selected' : '' }}>Processed</option>
                                    <option value="Dispatched" {{ $order->order_status === "Dispatched" ? 'selected' : '' }}>Dispatched</option>
                                    <option value="Out for Delivery" {{ $order->order_status === "Out for Delivery" ? 'selected' : '' }}>Out for Delivery</option>
                                    <option value="Delivered" {{ $order->order_status === "Delivered" ? 'selected' : '' }}>Delivered</option>
                                    <option value="Canceled" {{ $order->order_status === "Canceled" ? 'selected' : '' }}>Canceled</option>
                                    <option value="Refunded" {{ $order->order_status === "Refunded" ? 'selected' : '' }}>Refunded</option>
                                </select>
                            </div>
                            <button class="btn btn-md rounded font-sm">Save</button>
                        </form>
                    </div>
                </div> <!-- card end// -->
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Category</h4>
                    </div>

                    @php
                    $address = json_decode($order->address)
                    @endphp

                    <div class="card-body">
                        <div class="row">
                            <div class="mb-4 col-md-6">
                                <label for="product_name" class="form-label">First Name</label>
                                <input class="form-control" name="name" readonly value='{{ $address->first_name }}'>
                            </div>
                            <div class="mb-4 col-md-6">
                                <label for="product_name" class="form-label">Last Name</label>
                                <input class="form-control" name="name" readonly value='{{ $address->last_name }}'>
                            </div>
                            <div class="mb-4 col-md-6">
                                <label for="product_name" class="form-label">Email</label>
                                <input class="form-control" name="name" readonly value='{{ $address->email }}'>
                            </div>
                            <div class="mb-4 col-md-6">
                                <label for="product_name" class="form-label">Phone</label>
                                <input class="form-control" name="name" readonly value='{{ $address->phone }}'>
                            </div>
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Address Line 1</label>
                                <input class="form-control" name="name" readonly value='{{ $address->address_1 }}'>
                            </div>
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Address Line 2</label>
                                <input class="form-control" name="name" readonly value='{{ $address->address_2 }}'>
                            </div>
                            <div class="mb-4 col-md-6">
                                <label for="product_name" class="form-label">City</label>
                                <input class="form-control" name="name" readonly value='{{ $address->city }}'>
                            </div>
                            <div class="mb-4 col-md-6">
                                <label for="product_name" class="form-label">State</label>
                                <input class="form-control" name="name" readonly value='{{ $address->state }}'>
                            </div>
                            <div class="mb-4 col-md-6">
                                <label for="product_name" class="form-label">Country</label>
                                <input class="form-control" name="name" readonly value='{{ $address->country }}'>
                            </div>
                            <div class="mb-4 col-md-6">
                                <label for="product_name" class="form-label">Postal Code</label>
                                <input class="form-control" name="name" readonly value='{{ $address->postcode }}'>
                            </div>
                        </div>
                    </div>
                </div> <!-- card end// -->
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Product name</th>
                                <th scope="col">Product image</th>
                                <th scope="col">Custom Image</th>
                                <th scope="col">Name/Text</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Sub Amount</th>
                                {{-- <th scope="col">Legth</th> --}}
                                <th scope="col">Cable Style</th>
                                <th scope="col">Plating Color</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->orderProduct as $cat)
                            <tr>
                                <td>{{ $cat->product->name }}</td>
                                <td>
                                    <img class="img-fluid img-thumbnail" src="{{ asset('storage/' . $cat->product->image) }}" height="40" width="40" />
                                </td>
                                <td>
                                    <a href="{{ asset('storage/' . $cat->custom_image) }}" target="_blank"><img class="img-fluid img-thumbnail" src="{{ asset('storage/' . $cat->custom_image) }}" height="40" width="40" />
                                </td>
                                <td><strong class="text-danger">{{ $cat->custom_text }}</strong></td>
                                <td>{{ $cat->quantity }}</td>
                                <td>$<b>{{ $cat->product->price * $cat->quantity }}</b></td>
                                {{-- <td>{{ $cat->length }}</td> --}}
                                <td>{{ $cat->style }}</td>
                                <td>{{ $cat->plating_color }}</td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- table-responsive //end -->
            </div> <!-- card-body end// -->
        </div>
        </tbody>
        </table>
        </div> <!-- table-responsive //end -->
        </div> <!-- card-body end// -->
        </div>
    </section>
</x-admin>
