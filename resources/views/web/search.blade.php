<x-web-layout title="Search Result For: {{$key}}">
    <section class="hero-wrap hero-wrap-2" style="background-image:url({{ asset('images/bg_4.jpg') }})">
        <div class="overlay"></div>
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="{{route('home')}}">Blog <i class="fa fa-chevron-right"></i></a></span> <span>Search Result For :</span></p>
                    <h1 class="mb-0 bread">{{$key}}</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <h1 class="my-4">Search Result For: <small>{{$key}}</small></h1>
            <div class="row">                
                @foreach($blogs as $blog)
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="/blog/{{$blog->slug}}" class="block-20" style="background-image: url({{ Storage::url($blog->img_path) }});">
                        </a>
                        <div class="text d-block">
                            <div class="meta">
                                <p>
                                    <a href="/blog/{{$blog->slug}}"><span class="fa fa-calendar mr-2"></span>{{$blog->created_at->format('M d Y')}}</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="/blog/{{$blog->slug}}">{{$blog->title}}</a></h3>
                            <p>{{Str::limit($blog->description, 120)}}</p>
                            <p class="mb-0"><a href="/blog/{{$blog->slug}}" class="btn-custom d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i><span class="sr-only">Read more</span></a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</x-web-layout>