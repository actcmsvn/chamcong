<x-web-layout title="{{ __('Tâm An Yoga') }}">
    <section class="hero-wrap hero-wrap-2" style="background-image:url({{ asset('images/bg_3.jpg') }})">
        <div class="overlay"></div>
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Trang chủ <i class="fa fa-chevron-right"></i></a></span> <span>Post <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">{{ config('app.name', 'Tâm An Yoga') }} Post</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">{{ config('app.name', 'Tâm An Yoga') }} Post</span>
                    <h2 class="mb-4">Bài viết gần đây</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="{{ route('posts.show',$posts->slug) }}" class="block-20" style="background-image: url('{{ Storage::url($posts->img_path) }}');">
                        </a>
                        <div class="text d-block">
                            <div class="meta">
                                <p>
                                    <a href="{{ route('posts.show',$posts->slug) }}"><span class="fa fa-calendar mr-2"></span>{{$posts->created_at->format('m/d/Y') }}</a>
                                </p>
                            </div>
                            <h3 class="heading">
                                <a href="{{ route('posts.show',$posts->slug) }}">
                                @if(strlen($posts->title) > 25)
                                {{Str::limit($posts->title, 25)}}
                                @else
                                {{$posts->title}}
                                @endif
                                </a>
                            </h3>
                            @if(strlen($posts->descriptions) > 120)
                                <p>{{Str::limit($posts->descriptions, 120)}}</p>
                            @else
                                <p>{{$posts->descriptions}}</p>
                            @endif
                            <p class="mb-0"><a href="{{ route('posts.show',$posts->slug) }}" class="btn-custom d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i><span class="sr-only">Read more</span></a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    
</x-web-layout>