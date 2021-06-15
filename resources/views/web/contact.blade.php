<x-web-layout title="{{ __('Contacts') }}">
    <main>
        <div class="slider-area slider-bg ">
            <div class="single-slider d-flex align-items-center slider-height3">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-8 col-lg-9 col-md-12 ">
                            <div class="hero__caption hero__caption3 text-center">
                                <h1 data-animation="fadeInLeft" data-delay=".6s ">Contact us</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-shape d-none d-lg-block">
                <img class="slider-shape1" src="{{ asset('assets/img/hero/top-left-shape.png') }}" alt="">
            </div>
        </div>
        <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                    <div id="map" style="height: 480px; position: relative; overflow: hidden;">
                        <div class="map">
                            <script>
                                function initMap() {
                                    var contentString = "ACTCMS Vietnam";

                                    var map = new google.maps.Map(document.getElementById('map'), {
                                        center: {lat: 10.036800, lng: 105.780552},
                                        scrollwheel: false,
                                        zoom: 17
                                    });

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(10.036800, 105.780552),
                                        title: "ACTCMS Vietnam"
                                    });

                                    marker.addListener('click', function() {
                                        infowindow.open(map, marker);
                                    });

                                    marker.setMap(map);
                                    infowindow.open(map, marker);
                                }
                            </script>
                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCiGoOJHcgvyWVpuyM4_7cS8l5ANdq-s4&callback=initMap" async defer></script>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="{{route('contacts.store')}}" method="post" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" cols="30" rows="9"placeholder="Nhập nội dung tối đa 500 ký tự"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" type="text" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input class="form-control valid" name="mobile" type="text" placeholder="Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Buttonwood, California.</h3>
                                <p>Rosemead, CA 91770</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+1 253 565 2365</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3><a href="actcms.work@gmail.com" class="__cf_email__">actcms.work@gmail.com</a></h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-web-layout>