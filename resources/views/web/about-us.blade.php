<x-web-layout title="{{ __('Tâm An Yoga') }}">
    <section class="hero-wrap hero-wrap-2" style="background-image:url({{ asset('images/bg_3.jpg') }})">
        <div class="overlay"></div>
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Trang chủ <i class="fa fa-chevron-right"></i></a></span> <span>Giới thiệu <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">{{ config('app.name', 'Tâm An Yoga') }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-about img">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 about-intro">
                    <div class="row d-flex">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="img d-flex align-items-center align-self-stretch justify-content-center" style="background-image:url({{ asset('images/about.jpg') }});">
                                <div class="year-stablish text-center">
                                    <div class="icon2"><span class="flaticon-yoga-1"></span></div>
                                    <div class="text">
                                        <strong class="number" data-number="09">0</strong>
                                        <span>Năm<br> Kinh nghiệm</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-5 py-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <span class="subheading">Thành tựu trong món quà tự nhiên của thiên nhiên</span>
                                    <h2 class="mb-4">Cuộc sống trong Divine Yoga</h2>
                                    <div class="d-flex about">
                                        <div class="icon"><span class="flaticon-lotus-flower"></span></div>
                                        <h3>"I am standing on my own altar, The Poses are my prayers"</h3>
                                    </div>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    <div class="d-flex video-about align-items-center mt-md-4">
                                        <a href="#" class="video img d-flex align-items-center justify-content-center" style="background-image: url({{ asset('images/about-2.jpg') }});">
                                            <span class="fa fa-play-circle"></span>
                                        </a>
                                        <h4 class="ml-4">Đây là cách chúng tôi làm việc với khách hàng của mình, Xem video</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-services img" style="background-image: url({{ asset('images/bg_3.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-between pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">{{ config('app.name', 'Tâm An Yoga') }}</span>
                    <h2 class="mb-4">Kiểm soát cơ thể để giải phóng tâm hồn của bạn</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-5">
                    <img src="{{ asset('images/about.jpg') }}" alt="Colorlib" class="img-fluid">
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="services-2 d-flex justify-content-between">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-mindfulness"></span></div>
                        <div class="text">
                            <h2>Cân bằng cơ thể và tâm trí</h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        </div>
                    </div>
                    <div class="services-2 d-flex justify-content-between">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-meditate"></span></div>
                        <div class="text">
                            <h2>Cuộc sống hàng ngày lành mạnh</h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        </div>
                    </div>
                    <div class="services-2 d-flex justify-content-between">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-yoga"></span></div>
                        <div class="text">
                            <h2>Cải thiện tính linh hoạt của bạn</h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{ asset('images/bg_2.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex counter-wrap ftco-animate">
                    <div class="block-18 mb-xl-0 mb-2 d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-trainer"></span></div>
                        <div class="text pl-3">
                            <strong class="number" data-number="150">0</strong>
                            <span>Lớp học Yoga</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex counter-wrap ftco-animate">
                    <div class="block-18 mb-xl-0 mb-2 d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-yoga-mat"></span></div>
                        <div class="text pl-3">
                            <strong class="number" data-number="1000">0</strong>
                            <span>Hướng dẫ Yoga</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex counter-wrap ftco-animate">
                    <div class="block-18 mb-xl-0 mb-2 d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-yoga-1"></span></div>
                        <div class="text pl-3">
                            <strong class="number" data-number="65">0</strong>
                            <span>Nhiều năm kinh nghiệm</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex counter-wrap ftco-animate">
                    <div class="block-18 mb-xl-0 mb-2 d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-mindfulness"></span></div>
                        <div class="text pl-3">
                            <strong class="number" data-number="71650">0</strong>
                            <span>Khách hàng thỏa mãn</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb testimony-section bg-light">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 heading-section pr-md-5 py-5 my-md-5 mb-5 mb-md-0 order-md-last">
                    <span class="subheading">Cảm nhận từ khách hàng</span>
                    <h2 class="mb-4">Họ đang nói gì về {{ config('app.name', 'Tâm An Yoga') }}</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <div class="row my-4">
                        <div class="col-lg-6 ftco-animate">
                            <div class="services-3 d-flex align-items-center justify-content-between">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-mindfulness"></span></div>
                                <div class="media-body">
                                    <h3 class="heading">Chúng tôi đang giúp đỡ những người lớn tuổi</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ftco-animate">
                            <div class="services-3 d-flex align-items-center justify-content-between">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-trainer"></span></div>
                                <div class="media-body">
                                    <h3 class="heading">Có một cuộc sống cơ thể khỏe mạnh</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pr-md-5 d-flex align-items-stretch">
                    <div class="carousel-testimony owl-carousel d-flex align-items-center">
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <span class="fa">"</span>
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                    <div class="d-flex align-items-center" style="width: 100%;">
                                        <div class="user-img" style="background-image: url({{ asset('images/person_1.jpg') }})"></div>
                                        <div class="pl-3">
                                            <p class="name">Cô Tâm</p>
                                            <span class="position">Nội trợ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                    <div class="d-flex align-items-center" style="width: 100%;">
                                        <div class="user-img" style="background-image: url({{ asset('images/person_2.jpg') }})"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                    <div class="d-flex align-items-center" style="width: 100%;">
                                        <div class="user-img" style="background-image: url({{ asset('images/person_3.jpg') }})"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                    <div class="d-flex align-items-center" style="width: 100%;">
                                        <div class="user-img" style="background-image: url({{ asset('images/person_1.jpg') }})"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                    <div class="d-flex align-items-center" style="width: 100%;">
                                        <div class="user-img" style="background-image: url({{ asset('images/person_2.jpg') }})"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-web-layout>