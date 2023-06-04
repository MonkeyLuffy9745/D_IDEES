    @extends('layouts.base')

<div style="display: none">
    {{ $_blog = true }}
</div>

@section('base.content')
    <!--================ Start Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2 class="text-uppercase mt-4 mb-5">
                                Blog
                            </h2>
                            <div class="page_link">
                                <a href="{{ route('app.index') }}">Home</a>
                                <a href="{{ route('blog.index') }}">Blog</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        @forelse ($posts as $post)
                            @include('modules.post-medium')
                        @empty
                            Aucun Article
                        @endforelse
                        {{ $posts->links() }}
                    </div>
                </div>
                <div class="col-lg-4">
                    <form action="/blog" method="GET">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <div class="input-group">
                                    <input type="text" name="post_search" class="form-control" placeholder="Recherche">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="ti-search"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                                <div class="br"></div>
                            </aside>
                            @include('components.aside')
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection
