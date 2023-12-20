<x-main>

    <div id="site-main" class="site-main">
        <div id="main-content" class="main-content">
            <div id="primary" class="content-area">
                <div id="title" class="page-title">
                    <div class="section-container">
                        <div class="content-title-heading">
                            <h1 class="text-title-heading">
                                Catelogs
                            </h1>
                        </div>
                        <div class="breadcrumbs">
                            <a href="{{ route('home') }}">Home</a><span class="delimiter"></span>Catelogs
                        </div>
                    </div>
                </div>
                <div id="content" class="site-content" role="main">
                    <div class="section-padding">
                        <div class="section-container p-l-r">
                            <div class="posts-list grid">
                                <div class="row">
                                    @foreach ($cats as $cat)

                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                        <div class="post-entry clearfix post-wapper">
                                            <div class="post-image">
                                                <a href="{{ route('category', $cat->id) }}">
                                                    <img src="media/product/{{ $cat->name }}.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <h2 class="post-title">
                                                    <a href="{{ route('category', $cat->id) }}">{{ $cat->name }}</a>
                                                </h2>
                                                <div class="post-categories">
                                                    <a href="{{ route('category', $cat->id) }}">{{ $cat->description }}</a>
                                                </div>
                                                {{-- <div class="post-meta">
                                                    <span class="post-time">July 24, 2023</span>
                                                    <span class="post-comment">1 Comment</span>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                                </div>
                            </div>

                            {{-- <nav class="pagination">
                                <ul class="page-numbers">
                                    <li><a class="prev page-numbers" href="#">Previous</a></li>
                                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                                    <li><a class="page-numbers" href="#">2</a></li>
                                    <li><a class="page-numbers" href="#">3</a></li>
                                    <li><a class="next page-numbers" href="#">Next</a></li>
                                </ul>
                            </nav> --}}
                        </div>
                    </div>
                </div>
            </div><!-- #primary -->
        </div><!-- #main-content -->
    </div>

</x-main>
