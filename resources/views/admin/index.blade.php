@php
$title = "home";
@endphp
<x-admin title="{{ $title }}">
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Dashboard </h2>
                <p>Whole data about your business here</p>
            </div>
            {{-- <div>
                <a href="#" class="btn btn-primary"><i class="text-muted material-icons md-post_add"></i>Create report</a>
            </div> --}}
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-primary-light"><i class="text-primary material-icons md-monetization_on"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Revenue</h6>
                            <span>${{ $data['rev'] ?? 0 }}</span>
                            <span class="text-sm">
                                Shipping fees are not included
                            </span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-success-light"><i class="text-success material-icons md-local_shipping"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Orders</h6> <span>{{ $data['orders'] ?? 0 }}</span>
                            <span class="text-sm">
                                Exclusive orders
                            </span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-warning-light"><i class="text-warning material-icons md-qr_code"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Products</h6> <span>{{ $data['products'] ?? 0 }}</span>
                            <span class="text-sm">
                                In {{ $data['cat'] ?? 0 }} Categories
                            </span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-info-light"><i class="text-info material-icons md-shopping_basket"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Monthly Earning</h6> <span>${{ $data['monthRev'] ?? 0 }}</span>
                            <span class="text-sm">
                                Based in your local time.
                            </span>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 col-lg-12">
                <div class="card mb-4">
                    <article class="card-body">
                        <h5 class="card-title">Sale statistics</h5>
                        <canvas id="myChart" height="120px"></canvas>
                    </article>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="card mb-4">
                    <article class="card-body">
                        <h5 class="card-title">Revenue Base on Area</h5>
                        <canvas id="myChart2" height="217"></canvas>
                    </article>
                </div>
            </div>
        </div>
    </section>
</x-admin>
