@foreach($comments as $comment)
<div class="comment-list">
    <div class="single-comment justify-content-between d-flex">
        <div class="user justify-content-between d-flex">
            <div class="thumb">
                <img src="{{ $comment->user->profile_photo_url }}" alt="">
            </div>
            <div class="desc">
                <p class="comment">
                    {{ $comment->comment }}
                </p>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <h5>
                            <a href="#">{{ $comment->user->name }}</a>
                        </h5>
                        <p class="date">{{$comment->created_at->format('d/m/Y H:i') }}</p>
                    </div>
                    <div class="reply-btn">
                        <a href="#" class="btn-reply text-uppercase">reply</a>
                    </div>
                </div>
                <form method="post" action="{{ route('reply.add') }}">
                    @csrf
                    <input type="hidden" name="blog_id" value="{{ $blog_id }}" />
                    <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
                    <div class="row">                            
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="message">Leave a comment</label>
                                <textarea name="comment" id="message" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn py-1 px-2 btn-primary">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('web.replies', ['comments' => $comment->replies])
</div>
@endforeach