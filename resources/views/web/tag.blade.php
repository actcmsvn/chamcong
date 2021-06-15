<x-web-layout title="{{ __('Tâm An Yoga') }}">
    <section class="hero-wrap hero-wrap-2" style="background-image:url({{ asset('images/bg_3.jpg') }})">
        <div class="overlay"></div>
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Trang chủ <i class="fa fa-chevron-right"></i></a></span> <span>Tag</span></p>
                    <h1 class="mb-0 bread">Tag</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Tat ca Blog lien quan Tag</span>
                    <h2 class="mb-4">{{$tag->name}}</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="/blog/{{$blog['slug']}}" class="block-20" style="background-image: url('{{ Storage::url($blog->img_path) }}');">
                        </a>
                        <div class="text d-block">
                            <div class="meta">
                                <p>
                                    <a href="/blog/{{$blog['slug']}}"><span class="fa fa-calendar mr-2"></span>{{$blog->created_at->format('d/m/Y') }}</a>
                                </p>
                            </div>
                            <h3 class="heading">
                                <a href="/blog/{{$blog['slug']}}">
                                @if(strlen($blog->title) > 25)
                                {{Str::limit($blog->title, 25)}}
                                @else
                                {{$blog->title}}
                                @endif
                                </a>
                            </h3>
                            @if(strlen($blog->description) > 120)
                                <p>{{Str::limit($blog->description, 120)}}</p>
                            @else
                                <p>{{$blog->description}}</p>
                            @endif
                            <div><strong>Tags:</strong>
                                @foreach($blog->tags as $tag)
                                    <span>{{ $tag->name }}@if(!$loop->last) @endif</span>
                                @endforeach
                            </div>
                            <p class="mb-0"><a href="/blog/{{$blog['slug']}}" class="btn-custom d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i><span class="sr-only">Read more</span></a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{$blogs->links()}}
        </div>
    </section>
    
</x-web-layout>
