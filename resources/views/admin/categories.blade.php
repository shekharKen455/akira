@php
$title = "categories";
@endphp
<x-admin :title="$title">
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Catalogs</h2>
                {{-- <p>Lorem ipsum dolor sit amet.</p> --}}
            </div>
            <div>
                <a href="{{ route('category.add') }}" class="btn btn-primary btn-sm rounded">Create new</a>
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
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Created On</th>
                                <th scope="col" class="text-end">Edit</th>
                                <th scope="col" class="text-end">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $cat)
                            <tr>
                                <td>{{ $cat->id }}</td>
                                <td><b>{{ $cat->name }}</b></td>
                                <td><a href="{{ asset('storage/' . $cat->image) }}" target="_blank"><img class="img-fluid img-thumbnail" style="border-radius:50%" src="{{ asset('storage/' . $cat->image) }}" height="50" width="50" /></a></td>
                                <td><span class="badge rounded-pill alert-warning">{{ strtoupper($cat->status) }}</span></td>
                                <td>{{ $cat->created_at->format('M d, Y') }}</td>
                                <td class="text-end">
                                    <a href="{{ route('category.edit', $cat->id) }}" class="btn btn-md rounded font-sm">Edit</a>
                                </td>
                                <td class="text-end">
                                    <a href="{{ route('category.delete', $cat->id) }}" class="btn btn-md rounded font-sm">Delete</a>
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
