<x-web-layout title="{{$category['name']}}">
    <main>
        <div class="slider-area slider-bg ">
            <div class="single-slider d-flex align-items-center slider-height3">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-8 col-lg-9 col-md-12 ">
                            <div class="hero__caption hero__caption3 text-center">
                                <h1 data-animation="fadeInLeft" data-delay=".6s ">{{$category['name']}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-shape d-none d-lg-block">
                <img class="slider-shape1" src="{{ asset('assets/img/hero/top-left-shape.png') }}" alt="">
            </div>
        </div>
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            @foreach ($blogs as $blog)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ Storage::url($blog->img_path) }}" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>{{$blog->created_at->format('d') }}</h3>
                                        <p>{{$blog->created_at->format('m') }}</p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="/blog/{{$blog['slug']}}">
                                        <h2 class="blog-head" style="color: #2d2d2d;">{{$blog->title}}</h2>
                                    </a>
                                    <p>{{$blog->description}}</p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> {{ $blog->user->name }}</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> {{$blog->comments_count}} Comments</a></li>
                                    </ul>
                                </div>
                            </article>
                            @endforeach

                            {{$blogs->links()}}
                                                       
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
                                    <img src="{{ Storage::url($recent->img_path) }}" width="80" height="80" alt="post">
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
                                        <a href="/tag/{{$tag->slug}}">{{$tag->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </aside>

                            <aside class="single_sidebar_widget instagram_feeds">
                                <h4 class="widget_title" style="color: #2d2d2d;">Instagram Feeds</h4>
                                <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/504344940e135ca98766433e744c0615.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
                                <!--<ul class="instagram_row flex-wrap">
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('assets/img/post/post_5.png') }}" alt="">
                                        </a>
                                    </li>
                                </ul>-->
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