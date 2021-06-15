<x-web-layout title="{{ __('Tâm An Yoga') }}">
    <section class="hero-wrap hero-wrap-2" style="background-image:url({{ asset('images/bg_3.jpg') }})">
        <div class="overlay"></div>
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Trang chủ <i class="fa fa-chevron-right"></i></a></span> <span>Lịch học <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Lịch học {{ config('app.name', 'Tâm An Yoga') }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Lịch học Yoga</span>
                    <h2 class="mb-4">Lịch trình {{ config('app.name', 'Tâm An Yoga') }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Thứ hai</th>
                                    <th>Thứ ba</th>
                                    <th>Thứ tư</th>
                                    <th>Thứ năm</th>
                                    <th>Thứ sáu</th>
                                    <th>Thứ bảy</th>
                                    <th>Chủ nhật</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><i class="fa fa-close"></i></td>
                                    <td class="text-center bg-color">
                                        <div class="img rounded-circle mb-2" style="background-image: url({{ asset('images/classes-1.jpg') }});"></div>
                                        <a href="#"><strong>Yoga training</strong> <br>
                                            7 am-6 am</a>
                                    </td>
                                    <td><i class="fa fa-close"></i></td>
                                    <td class="text-center bg-color">
                                        <div class="img rounded-circle mb-2" style="background-image: url({{ asset('images/classes-2.jpg') }});"></div>
                                        <a href="#"><strong>Yoga training</strong> <br>
                                            7 am-6 am</a>
                                    </td>
                                    <td><i class="fa fa-close"></i></td>
                                    <td class="text-center bg-color">
                                        <div class="img rounded-circle mb-2" style="background-image: url({{ asset('images/classes-3.jpg') }});"></div>
                                        <a href="#"><strong>Yoga training</strong> <br>
                                            7 am-6 am</a>
                                    </td>
                                    <td><i class="fa fa-close"></i></td>
                                </tr>
                                <tr>
                                    <td class="text-center bg-color">
                                        <div class="img rounded-circle mb-2" style="background-image: url({{ asset('images/classes-4.jpg') }});"></div>
                                        <a href="#"><strong>Yoga training</strong> <br>
                                            7 am-6 am</a>
                                    </td>
                                    <td><i class="fa fa-close"></i></td>
                                    <td class="text-center bg-color">
                                        <div class="img rounded-circle mb-2" style="background-image: url({{ asset('images/classes-5.jpg') }});"></div>
                                        <a href="#"><strong>Yoga training</strong> <br>
                                            7 am-6 am</a>
                                    </td>
                                    <td><i class="fa fa-close"></i></td>
                                    <td class="text-center bg-color">
                                        <div class="img rounded-circle mb-2" style="background-image: url({{ asset('images/classes-6.jpg') }});"></div>
                                        <a href="#"><strong>Yoga training</strong> <br>
                                            7 am-6 am</a>
                                    </td>
                                    <td><i class="fa fa-close"></i></td>
                                    <td class="text-center bg-color">
                                        <div class="img rounded-circle mb-2" style="background-image: url({{ asset('images/classes-7.jpg') }});"></div>
                                        <a href="#"><strong>Yoga training</strong> <br>
                                            7 am-6 am</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-close"></i></td>
                                    <td class="text-center bg-color">
                                        <div class="img rounded-circle mb-2" style="background-image: url({{ asset('images/classes-1.jpg') }});"></div>
                                        <a href="#"><strong>Yoga training</strong> <br>
                                            7 am-6 am</a>
                                    </td>
                                    <td><i class="fa fa-close"></i></td>
                                    <td class="text-center bg-color">
                                        <div class="img rounded-circle mb-2" style="background-image: url({{ asset('images/classes-2.jpg') }});"></div>
                                        <a href="#"><strong>Yoga training</strong> <br>
                                            7 am-6 am</a>
                                    </td>
                                    <td><i class="fa fa-close"></i></td>
                                    <td class="text-center bg-color">
                                        <div class="img rounded-circle mb-2" style="background-image: url({{ asset('images/classes-3.jpg') }});"></div>
                                        <a href="#"><strong>Yoga training</strong> <br>
                                            7 am-6 am</a>
                                    </td>
                                    <td><i class="fa fa-close"></i></td>
                                </tr>
                                <tr>
                                    <td class="text-center bg-color">
                                        <div class="img rounded-circle mb-2" style="background-image: url({{ asset('images/classes-4.jpg') }});"></div>
                                        <a href="#"><strong>Yoga training</strong> <br>
                                            7 am-6 am</a>
                                    </td>
                                    <td><i class="fa fa-close"></i></td>
                                    <td class="text-center bg-color">
                                        <div class="img rounded-circle mb-2" style="background-image: url({{ asset('images/classes-5.jpg') }});"></div>
                                        <a href="#"><strong>Yoga training</strong> <br>
                                            7 am-6 am</a>
                                    </td>
                                    <td><i class="fa fa-close"></i></td>
                                    <td class="text-center bg-color">
                                        <div class="img rounded-circle mb-2" style="background-image: url({{ asset('images/classes-6.jpg') }});"></div>
                                        <a href="#"><strong>Yoga training</strong> <br>
                                            7 am-6 am</a>
                                    </td>
                                    <td><i class="fa fa-close"></i></td>
                                    <td class="text-center bg-color">
                                        <div class="img rounded-circle mb-2" style="background-image: url({{ asset('images/classes-7.jpg') }});"></div>
                                        <a href="#"><strong>Yoga training</strong> <br>
                                            7 am-6 am</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center bg-color">
                                        <div class="img rounded-circle mb-2" style="background-image: url({{ asset('images/classes-1.jpg') }});"></div>
                                        <a href="#"><strong>Yoga training</strong> <br>
                                            7 am-6 am</a>
                                    </td>
                                    <td><i class="fa fa-close"></i></td>
                                    <td class="text-center bg-color">
                                        <div class="img rounded-circle mb-2" style="background-image: url({{ asset('images/classes-2.jpg') }});"></div>
                                        <a href="#"><strong>Yoga training</strong> <br>
                                            7 am-6 am</a>
                                    </td>
                                    <td class="text-center bg-color">
                                        <div class="img rounded-circle mb-2" style="background-image: url({{ asset('images/classes-3.jpg') }});"></div>
                                        <a href="#"><strong>Yoga training</strong> <br>
                                            7 am-6 am</a>
                                    </td>
                                    <td><i class="fa fa-close"></i></td>
                                    <td class="text-center bg-color">
                                        <div class="img rounded-circle mb-2" style="background-image: url({{ asset('images/classes-4.jpg') }});"></div>
                                        <a href="#"><strong>Yoga training</strong> <br>
                                            7 am-6 am</a>
                                    </td>
                                    <td class="text-center bg-color">
                                        <div class="img rounded-circle mb-2" style="background-image: url({{ asset('images/classes-5.jpg') }});"></div>
                                        <a href="#"><strong>Yoga training</strong> <br>
                                            7 am-6 am</a>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th><a href="#"><i class="fa fa-long-arrow-left"></i> Tháng 4 2021</a></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th><a href="#">Tháng 6 2021 <i class="fa fa-long-arrow-right"></i></a></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</x-web-layout>