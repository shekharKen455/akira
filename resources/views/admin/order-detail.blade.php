@php
    $title = 'orders';
@endphp
<x-admin :title="$title">
    <section class="content-main">
        <div class="row">
            <div class="col-9">
                <div class="content-header">
                    <h2 class="content-title">Order Details</h2>
                    <div>
                        <a href="{{ route('admin.order.show', $order->order_id) }}"
                            class="btn btn-light rounded font-sm mr-5 text-body hover-up">Go
                            Back</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Order</h4>
                    </div>
                    <div class="card-body row">
                        @csrf
                        @method('PUT')
                        <div class="mb-4 col-md-3">
                            <label for="product_name" class="form-label">Product Image</label>
                            <div class="d-flex justify-content-left">
                                <a href="{{ asset('storage/' . $order->product->image) }}" target="_blank">
                                    <img src="{{ asset('storage/' . $order->product->image) }}"
                                        class="rounded mx-auto d-block" height="100" />
                                </a>
                            </div>
                        </div>

                        <div class="mb-4 col-md-9">
                            <label for="product_name" class="form-label">Product Name</label>
                            <input class="form-control" name="name" readonly value='{{ $order->product->name }}'>
                        </div>

                        <div class="mb-4">
                            <label for="product_name" class="form-label">Size</label>
                            <input class="form-control" name="name" readonly value='{{ $order->length }}'>
                        </div>

                        <div class="mb-4">
                            <label for="product_name" class="form-label">Chain Style</label>
                            <input class="form-control" name="name" readonly value='{{ $order->style }}'>
                        </div>

                        <div class="mb-4">
                            <label for="product_name" class="form-label">Plating</label>
                            <input class="form-control" name="name" readonly value='{{ $order->plating_color }}'>
                        </div>

                        <div class="mb-4">
                            <label for="product_name" class="form-label">Custom Text/Name</label>
                            <input class="form-control" name="name" readonly value='{{ $order->custom_text }}'>
                        </div>

                        <div class="mb-4">
                            <label for="product_name" class="form-label">language</label>
                            <input class="form-control" name="name" readonly value='{{ $order->lang }}'>
                        </div>

                        <div class="mb-4 col-md-3">
                            <label for="product_name" class="form-label">Font</label>
                            @php
                                $font = preg_replace('~^https?://[^/]+~', '', $order->font);
                            @endphp
                            <div class="d-flex justify-content-left">
                                <a href="{{ asset($font) }}" target="_blank">
                                    <img src="{{ asset($font) }}"
                                        class="rounded mx-auto d-block" height="100" />
                                </a>
                            </div>
                        </div>

                        @if ($order->custom_image)
                            <div class="mb-4">
                                <a href="{{ asset('storage/' . $order->custom_image) }}" target="_blank">
                                    <label for="product_name" class="form-label">Custom Image</label>
                                    <img src="{{ asset('storage/' . $order->custom_image) }}"
                                        class="rounded mx-auto d-block" height="200" />
                                </a>
                            </div>
                        @endif
                    </div>
                </div> <!-- card end// -->
            </div>
        </div>
        </tbody>
        </table>
        </div> <!-- table-responsive //end -->
        </div> <!-- card-body end// -->
        </div>
    </section>
</x-admin>
