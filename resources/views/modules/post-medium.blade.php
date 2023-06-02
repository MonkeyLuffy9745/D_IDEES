<article class="row blog_item">
    <div class="col-md-3">
        <div class="blog_info text-right">
            <ul class="blog_meta list">
                <li><a href="#">{{ $post->user->last_name }} {{ $post->user->first_name }}<i class="ti-user"></i></a></li>
                <li><a href="#">{{ $post->created_at }}<i class="ti-calendar"></i></a></li>
                <li><a href="#">{{ count($post->commentaires) }}<i class="ti-comment"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <div class="blog_post">
            <img src="img/blog/main-blog/m-blog-1.jpg" alt="">
            <div class="blog_details">
                <a href="single-blog.html">
                    <h2>{{ $post->title }}</h2>
                </a>
                <p>{{ $post->content }}</p>
                <a href="{{ route('forum.show', $post) }}" class="blog_btn">Plus</a>
            </div>
        </div>
    </div>
</article>
