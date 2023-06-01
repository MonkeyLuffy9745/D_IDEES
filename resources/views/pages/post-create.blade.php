@extends("layouts.base")

@section('base.content')

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Blog Create</h2>
                <div class="page_link">
                  <a href="index.html">Home</a>
                  <a href="blog.html">Blog</a>
                  <a href="single-blog.html">Blog Create</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="comment-form mt-0">
                        <h4>Créer un Post</h4>
                        <form class="">
                            <div class="form-group form-inline">
                                <div class="form-group w-100 name">
                                    <input type="text" class="form-control" id="title" placeholder="Titre" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Titre'">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mb-10" rows="5" style="resize: vertical; height: 300px;" name="content" placeholder="Message"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required=""></textarea>
                            </div>
                            <a href="#" class="primary-btn w-100">Poster</a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <div class="br"></div>
                            </aside>
                            @include("components.aside")
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection
