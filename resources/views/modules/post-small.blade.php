<div class="single_course">
    <div class="course_head">
      {{-- <img class="img-fluid" src="img/courses/c2.jpg" alt="" /> --}}
    </div>
    <div class="course_content">

      <span class="tag mb-4 d-inline-block">{{ $post->created_at }}</span>
      <h4 class="mb-3">
          <a href="course-details.html">{{ $post->title }}</a>
    </h4>
      <p>
        {{ $post->content }}
      </p>
      <div
        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
      >
        <div class="authr_meta">
          <i class="ti-user mr-2"></i>
          <span class="d-inline-block ml-2">{{ $post->user->name() }}</span>
        </div>

        </div>
      </div>
    </div>
  </div>
