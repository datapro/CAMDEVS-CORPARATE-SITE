<!-- HEADER -->
<header>
    <div class="h-topbar" style="background-color: #2a363f; margin-bottom:0;">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 col-md-12 h-topbar-left">
                  <ul class="header-social clearfix">
                      <li><a href="https://web.facebook.com/profile.php?id=100087651557657" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                      {{-- <li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li> --}}
                      <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                      {{-- <li><a href="#" target="_blank"><i class="fab fa-flickr"></i></a></li> --}}
                  </ul>
              </div>
              <div class="col-lg-8 col-md-12 h-topbar-right">
                 <span class="ht-phone"><span class="ht-contact-icon"><i class="fa fa-phone" aria-hidden="true"></i></span> Call Us:<a href="tel:+2347053506951">+2347053506951</a></span>
                 <span class="ht-email"><span class="ht-contact-icon"><i class="far fa-envelope"></i></span> Email Us: <a href="#"><span class="__cf_email__" data-cfemail="51383f373e11283e24233d383f3a227f323e3c">camdevspatroit@gmail.com  | admin@camdevsfoundation.com.ng</span></a></span> 
                 <a class="btn" href="{{url('/login')}}"><i class="fas fa-user"></i> Login</a>
              </div>
          </div>
      </div>
  </div>
      <div class="h-navbar">
        <div class="container clearfix">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/images/log.png')}}" alt="logo" style="width: 737px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                      {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="services.html">Services</a>
                            <a class="dropdown-item" href="service-details.html">Service Details</a>
                            <a class="dropdown-item" href="team.html">Team</a>
                            <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                            <a class="dropdown-item" href="pricing.html">Pricing</a>
                            <a class="dropdown-item" href="news.html">News</a>
                            <a class="dropdown-item" href="video.html">Video</a>
                            <a class="dropdown-item" href="faq.html">Faq</a>
                            <a class="dropdown-item" href="typography.html">Typpgraphy</a>
                            <a class="dropdown-item" href="404.html">404</a>
                        </div>
                      </li> --}}
                      <li class="nav-item"><a class="nav-link" href="{{url('/about')}}">About</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{url('/join')}}">Membership</a></li>
                      {{-- <li class="nav-item"><a class="nav-link" href="portfolio.html">Portfolio</a></li> --}}
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Foundation Privileges</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{url('/feed')}}">Feeding program</a>
                            <a class="dropdown-item" href="{{url('/scholars')}}">Scholarship program</a>
                            <a class="dropdown-item" href="{{url('/sme')}}">Business empowerment</a>
                            <a class="dropdown-item" href="{{url('/training')}}">Skill acquisition</a>
                            <a class="dropdown-item" href="{{url('/farmers')}}">Small scale farmers</a>
                        </div>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="{{url('/index')}}">Contact</a></li>
                      <li class="nav-item search-btn"><a class="nav-link" href="#"><i class="fas fa-search"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
  </header>