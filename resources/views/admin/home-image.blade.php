@php
$title = "categories";
@endphp
<x-admin :title="$title">
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Images</h2>
                {{-- <p>Lorem ipsum dolor sit amet.</p> --}}
            </div>
            <div>
                <a href="{{ route('admin.image.add') }}" class="btn btn-primary btn-sm rounded">Add new</a>
            </div>
        </div>
        <div class="card mb-4">
            <header class="card-header">
                <div class="row gx-3">
                    <div class="col-lg-4 col-md-6 me-auto">
                        <input type="text" placeholder="Search..." class="form-control">
                    </div>
                    <div class="col-lg-2 col-6 col-md-3">
                        <select class="form-select">
                            <option>Status</option>
                            <option>Active</option>
                            <option>Disabled</option>
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
                <div class="row">
                    @foreach ($images as $img)

                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('storage/' . $img['image']) }}" alt="{{ $img['name'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $img['name'] }}</h5>
                                <a href="{{ $img['link'] }}" target="_blank" class="btn btn-primary">Go to link</a>
                                <a href="{{ route('admin.image.delete', $img['id']) }}" target="_blank" class="btn btn-danger">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div> <!-- table-responsive //end -->
            </div> <!-- card-body end// -->
        </div>

    </section>
</x-admin>
