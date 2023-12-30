@php
    $title = "orders";
@endphp
<x-admin :title="$title">
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Products</h2>
                {{-- <p>Lorem ipsum dolor sit amet.</p> --}}
            </div>
            {{-- <div>
                <a href="{{ route('product.add') }}" class="btn btn-primary btn-sm rounded">Create new</a>
            </div> --}}
        </div>
        <div class="card mb-4">
            <header class="card-header">
                <div class="row gx-3">
                    <div class="col-lg-4 col-md-6 me-auto">
                        <input type="text" placeholder="Search..." class="form-control">
                    </div>
                    <div class="col-lg-2 col-6 col-md-3">
                        <select class="form-select">
                            <option value="Pending">Pending</option>
                            <option value="Processed">Processed</option>
                            <option value="Dispatched">Dispatched</option>
                            <option value="Out for Delivery">Out for Delivery</option>
                            <option value="Delivered">Delivered</option>
                            <option value="Canceled">Canceled</option>
                            <option value="Refunded">Refunded</option>
                            <option>Show all</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-6 col-md-3">
                        <select class="form-select">
                            <option>Show 20</option>
                            <option>Show 30</option>
                            <option>Show 40</option>
                        </select>
                    </div>
                </div>
            </header> <!-- card-header end// -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th scope="col">User name</th>
                                <th scope="col">User Email</th>
                                <th scope="col">Product Count</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Status</th>
                                <th scope="col">Created On</th>
                                <th scope="col" class="text-end">View Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $cat)
                            <tr>
                                <td>{{ $cat->id }}</td>
                                <td>{{ $cat->user->name }}</td>
                                <td>{{ $cat->user->email }}</td>
                                <td><b>{{ $cat->order_product_count }}</b></td>
                                <td>$ {{ $cat->sub_amount }}</td>
                                <td><span class="text text-danger badge">{{ $cat->order_status }}</span></td>
                                <td>{{ $cat->created_at->format('M d, Y') }}</td>
                                <td class="text-end">
                                    <a href="{{ route('admin.order.show', $cat->id) }}" class="btn btn-md rounded font-sm">Details</a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- table-responsive //end -->
            </div> <!-- card-body end// -->
        </div>
        <div class="pagination-area mt-30 mb-50">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-start">
                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">16</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a></li>
                </ul>
            </nav>
        </div>
    </section>
</x-admin>
