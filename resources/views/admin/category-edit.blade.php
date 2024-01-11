@php
$title = "categories";
@endphp
<x-admin :title="$title">
    <section class="content-main">
        <div class="row">
            <div class="col-9">
                <div class="content-header">
                    <h2 class="content-title">Update Catalog</h2>
                    <div>
                        <a href="{{ route('admin.category') }}" class="btn btn-light rounded font-sm mr-5 text-body hover-up">Go Back</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Catalog</h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <label for="product_name" class="form-label text-danger">{{$error}}</label>
                        @endforeach
                        @endif

                        <form action="{{ route('category.update', $cat->id) }}" method="POST" enctype='multipart/form-data'>
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Name</label>
                                <input type="text" placeholder="Category Name" class="form-control" name="name" required value='{{ $cat->name }}'>
                            </div>
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Description</label>
                                <textarea class="form-control" name="description" placeholder="Category Description ...">{{ $cat->description }}</textarea>
                            </div>

                            <div class="mb-4">
                                <label for="product_name" class="form-label">Category Images</label>
                                <input type="file" class="form-control" name="image" />
                            </div>

                            <button class="btn btn-md rounded font-sm">Save</button>
                        </form>
                    </div>
                </div> <!-- card end// -->
            </div>
        </div>
    </section>
</x-admin>
