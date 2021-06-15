
<header>
  <div class="header-area header-transparent">
      <div class="main-header ">
          <div class="header-bottom  header-sticky">
              <div class="container-fluid">
                  <div class="row align-items-center">
                      <div class="col-xl-2 col-lg-2">
                          <div class="logo">
                              <a href="{{route('home')}}"><img src="{{ asset('assets/img/logo/logo.png') }}" alt=""></a>
                          </div>
                      </div>
                      <div class="col-xl-10 col-lg-10">
                          <div class="menu-wrapper d-flex align-items-center justify-content-end">
                              <div class="main-menu d-none d-lg-block">
                                  <nav>
                                      <ul id="navigation">
                                          <li><a href="{{route('home')}}">Home</a></li>
                                          <li><a href="{{ route('packages') }}">Packages</a></li>
                                          <li><a href="{{ route('helps') }}">Help</a></li>
                                          <li><a href="#">Blog</a>
                                              <ul class="submenu">
                                                @foreach($categories as $category)
                                                <li><a href="/category/{{$category['slug']}}">{{$category['name']}}</a></li>
                                                @endforeach
                                                  <li><a href="elements.html">Element</a></li>
                                              </ul>
                                          </li>
                                          <li><a href="{{ route('contacts.index') }}">Contact</a></li>
                                          <li class="button-header margin-left "><a href="{{ route('register') }}" class="btn">Sign Up</a></li>
                                          <li class="button-header"><a href="{{ route('login') }}" class="btn3">Sign In</a></li>
                                      </ul>
                                  </nav>
                              </div>
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="mobile_menu d-block d-lg-none"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</header>