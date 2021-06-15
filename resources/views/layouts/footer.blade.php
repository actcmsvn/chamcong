<footer>
    <div class="footer-wrappr " data-background="{{ asset('assets/img/gallery/footer-bg.png') }}">
        <div class="footer-area footer-padding ">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-logo mb-25">
                                <a href="{{route('home')}}"><img src="{{ asset('assets/img/logo/logo2_footer.png') }}" alt="ACTCMS"></a>
                            </div>
                            <div class="footer-tittle mb-50">
                                <p>Subscribe our newsletter to get updates about our services</p>
                            </div>
                            <div class="footer-form">
                                <div id="mc_embed_signup">
                                    <form class="subscribe_form relative mail_part" action="{{route('subscribers.store')}}" method="POST">
                                    @csrf
                                        <input type="email" name="email" placeholder="Email Address " class="placeholder hide-on-focus">
                                        <div class="form-icon">
                                            <button type="submit" name="submit" class="email_icon newsletter-submit button-contactForm">
                                                Subscribe
                                            </button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                            <div class="footer-social mt-50">
                                <a href="https:/facebook.com/actcmsvn"><i class="fab fa-twitter"></i></a>
                                <a href="https:/facebook.com/actcmsvn"><i class="fab fa-facebook-f"></i></a>
                                <a href="https:/facebook.com/actcmsvn"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1"></div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Company</h4>
                                <ul>
                                    <li><a href="#">Why choose us</a></li>
                                    <li><a href="#"> Review</a></li>
                                    <li><a href="#">Customers</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Carrier</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Products</h4>
                                <ul>
                                    <li><a href="#">Why choose us</a></li>
                                    <li><a href="#"> Review</a></li>
                                    <li><a href="#">Customers</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Carrier</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Support</h4>
                                <ul>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#"> Products</a></li>
                                    <li><a href="#">Customers</a></li>
                                    <li><a href="#">Quality</a></li>
                                    <li><a href="#">Sales geography</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="footer-copy-right text-center">
                                <p class="mb-0 text-center" style="color: rgba(255,255,255,.5);">
                                    Copyright &copy; <?php echo date("Y"); ?> All rights reserved | This template is made with <i class="fa fa-heart fa-beat" style="color:red;"></i> by <a href="https://actcms.work" target="_blank" rel="nofollow noopener">ACTCMS</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>