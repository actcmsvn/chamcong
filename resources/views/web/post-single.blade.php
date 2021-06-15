<x-web-layout title="{{$posts->title}}">

	<section class="hero-wrap hero-wrap-2" style="background-image:url({{ asset('images/bg_4.jpg') }})">
        <div class="overlay"></div>
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Trang chủ <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="{{route('home')}}">Post <i class="fa fa-chevron-right"></i></a></span> <span>Post Detail <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Post Details</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate blog-single">
                    <h2 class="mb-3">{{$posts->title}}</h2>
                    <p>{{$posts->descriptions}}</p>
                    <p>
                        <img src="{{ asset('images/images/bg_1.jpg') }}" alt="" class="img-fluid">
                    </p>
                    <p>{!! $posts->contents !!}</p>
                    <p><i class="fa fa-user" aria-hidden="true"></i> Created By Admin</p>
                    <div class="tag-widget post-tag-container mb-5 mt-5">
                        <div class="tagcloud">
                            @foreach ($tags as $tag)
                            <a href="#" class="tag-cloud-link">{{$tag->name}}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="about-author d-flex p-4 bg-light rounded">
                        <div class="bio mr-5">
                            <img src="{{ asset('images/person_1.jpg') }}" alt="Image placeholder" class="img-fluid mb-4">
                        </div>
                        <div class="desc">
                            <h3>George Washington</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                        </div>
                    </div>

                    <div class="pt-2 mt-2">
                        <h3 class="mb-2" style="font-size: 28px; font-weight: bold;">6 Comments</h3>@include('web.comment', ['comments' => $posts->comments, 'post_id' => $posts->id])
                  

                        <div class="comment-form-wrap pt-3">
                            <h3 class="mb-3" style="font-size: 28px; font-weight: bold;">Leave a comment</h3>
                            <form method="post" action="{{ route('comment.add') }}">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $posts->id }}" />
                                <div class="row">                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea name="comment" id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" value="Post Comment" class="btn py-2 px-3 btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
                <div class="col-lg-4 sidebar ftco-animate pl-md-4">
                    <div class="sidebar-box bg-light rounded">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Services</h3>
                            <li><a href="#">Outdoor Activites</a></li>
                            <li><a href="#">Experienced Trainers</a></li>
                            <li><a href="#">Happy Environment</a></li>
                            <li><a href="#">Dairy Products</a></li>
                        </div>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3>Recent Blog</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image:url({{ asset('images/image_1.jpg') }})"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Yoga practices to boost happiness</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="fa fa-calendar"></span> Oct. 10, 2020</a></div>
                                    <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                                    <div><a href="#"><span class="fa fa-comment"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image:url({{ asset('images/image_2.jpg') }})"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Yoga practices to boost happiness</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="fa fa-calendar"></span> Oct. 10, 2020</a></div>
                                    <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                                    <div><a href="#"><span class="fa fa-comment"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image:url({{ asset('images/image_3.jpg') }})"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Yoga practices to boost happiness</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="fa fa-calendar"></span> Oct. 10, 2020</a></div>
                                    <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                                    <div><a href="#"><span class="fa fa-comment"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3>Tag Cloud</h3>
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">agriculture</a>
                            <a href="#" class="tag-cloud-link">farm</a>
                            <a href="#" class="tag-cloud-link">food</a>
                            <a href="#" class="tag-cloud-link">corn</a>
                            <a href="#" class="tag-cloud-link">root</a>
                            <a href="#" class="tag-cloud-link">potatoe</a>
                            <a href="#" class="tag-cloud-link">vegetables</a>
                            <a href="#" class="tag-cloud-link">tractor</a>
                        </div>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3>Paragraph</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-web-layout>