@php
$title = "profile";
@endphp
<x-admin :title="$title">
    <section class="content-main">
        <div class="row">
            <div class="col-9">
                <div class="content-header">
                    <h2 class="content-title">Update Password</h2>
                    <div>
                        <a href="{{ route('admin.category') }}" class="btn btn-light rounded font-sm mr-5 text-body hover-up">Go Back</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Profile</h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <label for="product_name" class="form-label text-danger">{{$error}}</label>
                        @endforeach
                        @endif

                        @if(session('success'))
                        <label for="product_name" class="form-label text-success">{{session('success')}}</label>
                        @endif

                        <form action="{{ route('admin.profile.update') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Old Password</label>
                                <input type="password" class="form-control" name="old_password" required v>
                            </div>
                            <div class="mb-4">
                                <label for="product_name" class="form-label">New Password</label>
                                <input type="password" class="form-control" name="new_password" required v>
                            </div>
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="new_password_confirmation" required v>
                            </div>

                            <button class="btn btn-md rounded font-sm">Update</button>
                        </form>
                    </div>
                </div> <!-- card end// -->
            </div>
        </div>
    </section>
</x-admin>
