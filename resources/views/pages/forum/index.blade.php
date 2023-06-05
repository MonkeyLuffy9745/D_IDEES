@extends("layouts.base")
<div style="display: none">
    {{ $_forum = true }}
</div>
@section('base.content')

    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area">
      <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-center">
                <p class="text-uppercase">
                  vous avez du mal avec vos cours ?
                </p>
                <h2 class="text-uppercase mt-4 mb-5">
                  posez des questions !
                </h2>

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
                            @include("modules.post-medium")
                        @empty
                            Aucun post
                        @endforelse
                        {{ $posts->links() }}
                    </div>
                </div>
                <div class="col-lg-4">
                    <form action="/forum" method="GET">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <div class="input-group">
                                    <input type="text" name="post_search" class="form-control" placeholder="recherche">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="ti-search"></i></button>
                                    </span>

                                </div><!-- /input-group -->
                                <div class="br"></div>
                                @auth
                                <a class="primary-btn" href="{{ route('forum.create') }}">
                                    Creer un post <i class="ti-arrow-right ml-1"></i>
                                  </a>
                                @endauth
                            </aside>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection
