<div style="border-bottom: #fdc632 1px solid" class="mb-4 p-4">
    <div class="comment-list">
        <div class="single-comment single-reviews justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
                <div class="thumb">
                    <img src="img/blog/c1.jpg" alt="">
                </div>
                <div class="desc">
                    <h5><a href="#">{{ $commentaire->user->last_name }} {{ $commentaire->user->first_name }}</a>
                    </h5>
                    <p class="comment">
                        {{$commentaire->content}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
