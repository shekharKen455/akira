<x-admin>
    <section class="content-main">
        <div class="row">
            <div class="col-9">
                <div class="content-header">
                    <h2 class="content-title">Update Product</h2>
                    <div>
                        <a href="{{ route('admin.product') }}" class="btn btn-light rounded font-sm mr-5 text-body hover-up">Go Back</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Product</h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <label for="product_name" class="form-label text-danger">{{$error}}</label>
                        @endforeach
                        @endif

                        <form action="{{ route('product.update', $product->id) }}" method="POST" enctype='multipart/form-data'>
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Name</label>
                                        <input type="text" placeholder="Product Name" class="form-control" name="name" required value="{{ $product->name }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Price</label>
                                        <input type="number" placeholder="Product Price" class="form-control" name="price" required value="{{ $product->price }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Sale Price</label>
                                        <input type="number" placeholder="Product Sale Price" class="form-control" name="sale_price" value="{{ $product->sale_price }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Quantity</label>
                                        <input type="number" placeholder="Product Quantity" class="form-control" name="quantity" required value="{{ $product->quantity }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Discount</label>
                                        <input type="number" placeholder="Product Discount" class="form-control" name="discount" value="{{ $product->discount }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Rating</label>
                                        <select class="form-control" name="rating">
                                            <option value="1" {{ $product->rating === 1 ? 'selected' : '' }}>1</option>
                                            <option value="2" {{ $product->rating === 2 ? 'selected' : '' }}>2</option>
                                            <option value="3" {{ $product->rating === 3 ? 'selected' : '' }}>3</option>
                                            <option value="4" {{ $product->rating === 4 ? 'selected' : '' }}>4</option>
                                            <option value="5" {{ $product->rating === 5 ? 'selected' : '' }}>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Category</label>
                                <select class="form-control" name="category_id" required>
                                    @foreach ($cats as $cat)
                                    <option value="{{ $cat->id }}" {{ $cat->id === $product->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Main Image</label>
                                <input type="file" class="form-control" name="main_image" />
                            </div>
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Other Images</label>
                                <input type="file" class="form-control" name="other_images[]" multiple />
                            </div>
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Description</label>
                                <textarea class="form-control" name="description" placeholder="Product Description ..."> {{ $product->description }} </textarea>
                            </div>

                            <button class="btn btn-md rounded font-sm">Save</button>
                        </form>
                    </div>
                </div> <!-- card end// -->
            </div>
        </div>
    </section>
</x-admin>
