@section('seo')
<meta name="description" content="{{$blogs->description}}">
<link rel="canonical" href="{{ url()->current() }}" />
<!--FACEBOOK-->
<meta property="fb:app_id" content="281093175299567|blFtj8QVLbuIYdvHX815kbnK6ig">
<meta property="og:site_name" content="Yoga Tâm An">
<meta property="og:title" content="{{$blogs->title}}">
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:image" content="{{ url('') }}{{ Storage::url($blogs->img_path) }}" /> 
<meta property="og:description" content="{{$blogs->description}}" />
<meta property="og:type" content="article">
<meta property="og:locale" content="vn">
<!--TWITTER-->
<meta property="twitter:card" content="summary">
<meta property="twitter:title" content="{{$blogs->title}}">
<meta property="twitter:description" content="{{$blogs->description}}">
<meta property="twitter:creator" content="Yoga Tâm An">
<meta property="twitter:image" content="{{ url('') }}{{ Storage::url($blogs->img_path) }}">
<meta property="twitter:image:alt" content="{{$blogs->title}}">
@endsection
@section('keywords')
@foreach($tags as $tag){{$tag->name}}@if(!$loop->last),@endif @endforeach
@endsection

<x-web-layout title="{{$blogs->title}}">
    <main>
        <div class="slider-area slider-bg ">
            <div class="single-slider d-flex align-items-center slider-height3">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-8 col-lg-9 col-md-12 ">
                            <div class="hero__caption hero__caption3 text-center">
                                <h1 data-animation="fadeInLeft" data-delay=".6s ">Blog Details</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-shape d-none d-lg-block">
                <img class="slider-shape1" src="{{ asset('assets/img/hero/top-left-shape.png') }}" alt="">
            </div>
        </div>
        <section class="blog_area single-post-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post">
                            <div class="feature-img">
                                <img class="img-fluid" src="{{ Storage::url($blogs->img_path) }}" alt="" >
                            </div>
                            <div class="blog_details">
                                <h2 style="color: #2d2d2d;">{{$blogs->title}}</h2>
                                <ul class="blog-info-link mt-3 mb-4">
                                    <li><a href="#"><i class="fa fa-user"></i> {{ $blogs->user->name }}</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> {{$blogs->comments_count}} Comments</a></li>
                                </ul>
                                <p class="excert">
                                    {{$blogs->description}}
                                </p>
                                <p>
                                    {!! $blogs->contents !!}
                                </p>
                            </div>
                        </div>
                        <div class="navigation-top">
                            <div class="d-sm-flex justify-content-between text-center">
                                <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and @include('web.like', ['model' => $blogs])
                                    people like this</p>
                                <div class="col-sm-4 text-center my-2 my-sm-0">
                                </div>
                                <ul class="social-icons">
                                    <li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                </ul>
                            </div>
                            <div class="navigation-area">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                        <div class="thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="" alt="">
                                            </a>
                                        </div>
                                        <div class="arrow">
                                            <a href="#">
                                                <span class="lnr text-white ti-arrow-left"></span>
                                            </a>
                                        </div>
                                        <div class="detials">
                                            <p>Prev Post</p>
                                            <a href="#">
                                                <h4 style="color: #2d2d2d;">Space The Final Frontier</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                        <div class="detials">
                                            <p>Next Post</p>
                                            <a href="#">
                                                <h4 style="color: #2d2d2d;">Telescopes 101</h4>
                                            </a>
                                        </div>
                                        <div class="arrow">
                                            <a href="#">
                                                <span class="lnr text-white ti-arrow-right"></span>
                                            </a>
                                        </div>
                                        <div class="thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="" alt="" >
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-author">
                            <div class="media align-items-center">
                                <img src="{{ $blogs->user->profile_photo_url }}" alt="">
                                <div class="media-body">
                                    <a href="#">
                                        <h4>{{ $blogs->user->name }}</h4>
                                    </a>
                                    <p>{{ $blogs->user->bio }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="comments-area">
                            <h4>{{$blogs->comments_count}} Comments</h4>
                            @include('web.comment', ['comments' => $blogs->comments, 'blog_id' => $blogs->id])
                        </div>
                        <div class="comment-form">
                            <h4>Leave a Reply</h4>
                            <form class="form-contact comment_form" method="post" action="{{ route('comment.add') }}">
                                @csrf
                                <input type="hidden" name="blog_id" value="{{ $blogs->id }}" />
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post Comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <form action="/search" method="GET" role="search">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input name="q" type="text" class="form-control" placeholder='Search Keyword' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                            <div class="input-group-append">
                                                <button class="btns" type="button"><i class="ti-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
                                </form>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
                                <ul class="list cat-list">
                                    @foreach($categories as $category)
                                    <li>
                                        <a href="/category/{{$category->slug}}" class="d-flex">
                                            <p>{{$category->name}}</p>
                                            <p>&nbsp;({{$category->blogs_count}})</p>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
                                @foreach ($recent_blogs as $recent)
                                <div class="media post_item">
                                    <img src="{{ Storage::url($recent->img_path) }}" width="100" height="60" alt="post">
                                    <div class="media-body">
                                        <a href="/blog/{{$recent['slug']}}">
                                            <h3 style="color: #2d2d2d;">
                                                @if(strlen($recent->title) > 20)
                                                {{Str::limit($recent->title, 20)}}
                                                @else
                                                {{$recent->title}}
                                                @endif
                                            </h3>
                                        </a>
                                        <p>{{$recent->created_at->format('d/m/Y') }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </aside>
                            <aside class="single_sidebar_widget tag_cloud_widget">
                                <h4 class="widget_title" style="color: #2d2d2d;">Tag Clouds</h4>
                                <ul class="list">
                                    @foreach($tags as $tag)
                                    <li>
                                        <a href="/tag/{{$tag->slug}}">{{ $tag->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </aside>
                            <aside class="single_sidebar_widget instagram_feeds">
                                <h4 class="widget_title" style="color: #2d2d2d;">Instagram Feeds</h4>
                                <ul class="instagram_row flex-wrap">
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('assets/img/post/post_5.png') }}" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('assets/img/post/post_6.png') }}" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('assets/img/post/post_7.png') }}" alt="" >
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('assets/img/post/post_8.png') }}" alt="" >
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('assets/img/post/post_9.png') }}" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('assets/img/post/post_10.png') }}" alt="" >
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                            <aside class="single_sidebar_widget newsletter_widget">
                                <h4 class="widget_title" style="color: #2d2d2d;">Newsletter</h4>
                                <form class="subscribe_form relative mail_part" action="{{route('subscribers.store')}}" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email Address " class="form-control">
                                    </div>
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Subscribe</button>
                                </form>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-web-layout>