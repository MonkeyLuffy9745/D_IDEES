@extends("layouts.base")
<div style="display: none">
    {{ $_forum = true }}
</div>
@section('base.content')

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Post Details</h2>
                <div class="page_link">
                  <a href="{{ route('app.index') }}">Home</a>
                  <a href="{{ route('forum.index') }}">Forum</a>
                  <a href="{{ route('forum.show', $post) }}">post Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="img/courses/course-details.jpg" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title">{{ $post->title }}</h4>
                        <div class="content">{{$post->content}}
                        </div>

                        <h4 class="title">Commentaires</h4>
                        <div class="comments-area mt-0 mb-30">
                            @forelse ( $post->commentaires as $commentaire )
                                @include('modules.comment-medium')
                            @empty
                                <p>Pas encore de commentaires</p>
                            @endforelse
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 right-contents">
                    <ul>
                    </ul>

                    <h4 class="title">Commentaire</h4>
                    <div class="content">
                        <div class="review-top row pt-40">
                            <div class="col-lg-12">
                                </div>
                            </div>
                        </div>
                        <div class="feedeback">
                            <h6>Contenu</h6>
                            <textarea name="feedback" class="form-control" cols="10" rows="10"></textarea>
                            <div class="mt-10 text-right">
                                <a href="#" class="primary-btn2 text-right rounded-0 text-white">envoyer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->
@endsection
