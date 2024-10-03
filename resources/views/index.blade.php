@extends('layouts.main')
@section('content')
<!-- MAIN -->
<main>
    <!-- slider -->
    <div class="home_slider owl-carousel">
        <div class="item full_slides" style="background:url({{asset('assets/images/slide1.jpg')}}) no-repeat center center; background-size:cover;">
         <div class="full_slide_caption">
            <div class="slider-txt-medium">Collective Action Movement Foundation</div>
            <div class="slider-txt-big">Welcom to <span class="tex-blue">CAMDEVS</span></div>
            <p>Collective Action Movement on democratic values and environmental issues!</p>
            <a class="btn btn-big btn-blue" href="{{url('/about')}}">Learn More!</a>
         </div>
        </div>
        <div class="item full_slides" style="background:url({{asset('assets/images/slide2.jpg')}}) no-repeat center center; background-size:cover;">
         <div class="full_slide_caption">
            <div class="slider-txt-medium">Collective Action Movement Foundation</div>
            <div class="slider-txt-big">Welcom to <span class="tex-blue">CAMDEVS</span></div>
            <p>Collective Action Movement on democratic values and environmental issues!</p>
            <a class="btn btn-big btn-blue" href="{{url('/about')}}">Learn More!</a>
         </div>
        </div>
        <div class="item full_slides" style="background:url({{asset('assets/images/slide3.jpg')}}) no-repeat center center; background-size:cover;">
         <div class="full_slide_caption">
            <div class="slider-txt-medium">Collective Action Movement Foundation</div>
            <div class="slider-txt-big">Welcom to <span class="tex-blue">CAMDEVS</span></div>
            <p>Collective Action Movement on democratic values and environmental issues!</p>
            <a class="btn btn-big btn-blue" href="{{url('/about')}}">Learn More!</a>
         </div>
        </div>
    </div>
    <!-- services section -->
    <section id="home-services" class="grey-bg">
     <div class="section-inner">
      <div class="container">
       <div class="row">
        <div class="col-12 text-center">
         <h2 class="h1 fw-9">Our <span class="tex-blue">Services</span></h2>
         <p class="text-uppercase">lorem Ipsum is simply dummy text</p>
        <div class="heading-bg"></div>
       </div>
       </div>
       <div class="row">
       <div class="col-lg-4 col-md-6">
        <div class="service-box">
          <a href="service-details.html"><div class="service-img" style="background:url({{asset('assets/images/service-img1.jpg')}}) no-repeat center center; background-size:cover"></div></a>
          <div class="service-content">
           <h5><a href="service-details.html">Unlimited Color Schemes</a></h5>
           <p>Lorem ipsum dolor sit amet, consec teturadipsi cing elit. Nobis commodi esse aliquam eligend reprehenderit, numquam a odio. <a href="service-details.html">Read More</a></p>
           <div class="service-info clearfix">
            <div class="s-infobox"><span>5000</span> Projects</div>
            <div class="s-infobox"><span>320</span> Clients</div>
            <div class="s-infobox"><span>12000 hour</span> Working</div>
           </div>
          </div>
        </div>
       </div>
       <div class="col-lg-4 col-md-6">
        <div class="service-box">
          <a href="service-details.html"><div class="service-img" style="background:url({{asset('assets/images/service-img2.jpg')}}) no-repeat center center; background-size:cover"></div></a>
          <div class="service-content">
           <h5><a href="service-details.html">Clean & Unique Design</a></h5>
           <p>Lorem ipsum dolor sit amet, consec teturadipsi cing elit. Nobis commodi esse aliquam eligend reprehenderit, numquam a odio. <a href="service-details.html">Read More</a></p>
           <div class="service-info clearfix">
            <div class="s-infobox"><span>5000</span> Projects</div>
            <div class="s-infobox"><span>320</span> Clients</div>
            <div class="s-infobox"><span>12000 hour</span> Working</div>
           </div>
          </div>
        </div>
       </div>
       <div class="col-lg-4 col-md-6">
        <div class="service-box">
          <a href="service-details.html"><div class="service-img" style="background:url({{asset('assets/images/service-img3.jpg')}}) no-repeat center center; background-size:cover"></div></a>
          <div class="service-content">
           <h5><a href="service-details.html">Working Contact Form</a></h5>
           <p>Lorem ipsum dolor sit amet, consec teturadipsi cing elit. Nobis commodi esse aliquam eligend reprehenderit, numquam a odio. <a href="service-details.html">Read More</a></p>
           <div class="service-info clearfix">
            <div class="s-infobox"><span>5000</span> Projects</div>
            <div class="s-infobox"><span>320</span> Clients</div>
            <div class="s-infobox"><span>12000 hour</span> Working</div>
           </div>
          </div>
        </div>
       </div>
       <div class="col-lg-4 col-md-6">
        <div class="service-box">
          <a href="service-details.html"><div class="service-img" style="background:url({{asset('assets/images/service-img4.jpg')}}) no-repeat center center; background-size:cover"></div></a>
          <div class="service-content">
           <h5><a href="service-details.html">Bootstrap Framework</a></h5>
           <p>Lorem ipsum dolor sit amet, consec teturadipsi cing elit. Nobis commodi esse aliquam eligend reprehenderit, numquam a odio. <a href="service-details.html">Read More</a></p>
           <div class="service-info clearfix">
            <div class="s-infobox"><span>5000</span> Projects</div>
            <div class="s-infobox"><span>320</span> Clients</div>
            <div class="s-infobox"><span>12000 hour</span> Working</div>
           </div>
          </div>
        </div>
       </div>
       <div class="col-lg-4 col-md-6">
        <div class="service-box">
          <a href="service-details.html"><div class="service-img" style="background:url({{asset('assets/images/service-img5.jpg')}}) no-repeat center center; background-size:cover"></div></a>
          <div class="service-content">
           <h5><a href="service-details.html">Fully Responsive</a></h5>
           <p>Lorem ipsum dolor sit amet, consec teturadipsi cing elit. Nobis commodi esse aliquam eligend reprehenderit, numquam a odio. <a href="service-details.html">Read More</a></p>
           <div class="service-info clearfix">
            <div class="s-infobox"><span>5000</span> Projects</div>
            <div class="s-infobox"><span>320</span> Clients</div>
            <div class="s-infobox"><span>12000 hour</span> Working</div>
           </div>
          </div>
        </div>
       </div>
       <div class="col-lg-4 col-md-6">
        <div class="service-box">
          <a href="service-details.html"><div class="service-img" style="background:url({{asset('assets/images/service-img6.jpg')}}) no-repeat center center; background-size:cover"></div></a>
          <div class="service-content">
           <h5><a href="service-details.html">Detailed Documentation</a></h5>
           <p>Lorem ipsum dolor sit amet, consec teturadipsi cing elit. Nobis commodi esse aliquam eligend reprehenderit, numquam a odio. <a href="service-details.html">Read More</a></p>
           <div class="service-info clearfix">
            <div class="s-infobox"><span>5000</span> Projects</div>
            <div class="s-infobox"><span>320</span> Clients</div>
            <div class="s-infobox"><span>12000 hour</span> Working</div>
           </div>
          </div>
        </div>
       </div>
       </div>
       <div class="row">
        <div class="col-12 text-center">
         <a class="btn btn-big btn-blue" href="services.html">View All Services</a>
        </div>
       </div>
      </div>
     </div>
    </section>
    <!-- features section -->
    <section id="home-features">
     <div class="section-inner">
      <div class="container">
       <div class="row">
        <div class="col-12 text-center">
         <h2 class="h1 fw-9">Our Best <span class="tex-blue">Features</span></h2>
         <p class="text-uppercase">lorem Ipsum is simply dummy text</p>
        <div class="heading-bg"></div>
       </div>
       </div>
       <div class="row">
       <div class="col-lg-4 col-md-6">
        <div class="feature-box clearfix">
          <div class="feature-icon"><i class="fas fa-paint-brush"></i></div>
          <div class="feature-contant">
           <h4>Globaly Standard</h4>
           <p>Lorem Ipsum is simply dummy text of the printing</p>
          </div>          
        </div>
       </div>
       <div class="col-lg-4 col-md-6">
        <div class="feature-box clearfix">
          <div class="feature-icon"><i class="fas fa-location-arrow"></i></div>
          <div class="feature-contant">
           <h4>Intensive Training</h4>
           <p>Lorem Ipsum is simply dummy text of the printing</p>
          </div>          
        </div>
       </div>
       <div class="col-lg-4 col-md-6">
        <div class="feature-box clearfix">
          <div class="feature-icon"><i class="fas fa-users"></i></div>
          <div class="feature-contant">
           <h4>Mock Tests</h4>
           <p>Lorem Ipsum is simply dummy text of the printing</p>
          </div>          
        </div>
       </div>
       <div class="col-lg-4 col-md-6">
        <div class="feature-box clearfix">
          <div class="feature-icon"><i class="fas fa-shopping-cart"></i></div>
          <div class="feature-contant">
           <h4>Globaly Accepted</h4>
           <p>Lorem Ipsum is simply dummy text of the printing</p>
          </div>          
        </div>
       </div>
       <div class="col-lg-4 col-md-6">
        <div class="feature-box clearfix">
          <div class="feature-icon"><i class="fas fa-camera"></i></div>
          <div class="feature-contant">
           <h4>Career opportunity</h4>
           <p>Lorem Ipsum is simply dummy text of the printing</p>
          </div>          
        </div>
       </div>
       <div class="col-lg-4 col-md-6">
        <div class="feature-box clearfix">
          <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
          <div class="feature-contant">
           <h4>100% Placement</h4>
           <p>Lorem Ipsum is simply dummy text of the printing</p>
          </div>          
        </div>
       </div>
       </div>
      </div>
     </div>
    </section>
    <!-- home about section -->
    <section id="home-about" class="dark-grey-bg">
      <div class="row">
       <div class="col-md-6">
        <div class="home-about-img" style="background:url({{asset('assets/images/aboutimg.jpg')}}) no-repeat center center; background-size:cover;">
        </div>
       </div>
       <div class="col-md-6">
        <div class="section-inner home-about-content">
          <h2 class="h1 fw-9 tex-white">About <span class="tex-blue">Company</span></h2>
          <p class="text-uppercase tex-white">lorem Ipsum is simply dummy text</p>
          <div class="heading-bg hb-left"></div>
          <p class="tex-dull-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <h6 class="tex-blue">Why we are different:</h6>
          <ul class="list list-white">
           <li>Excepteur sint occaecat cupidatat</li>
           <li>Non proident sunt in culpa qui</li>
           <li>Officia deserunt mollit</li>
           <li>Anim id est laborum</li>
          </ul>
          <a class="btn btn-medium btn-white" href="about.html">Read More</a>
        </div>
       </div>
      </div>
    </section>
    <!-- career section -->
    <section id="home-career">
     <div class="section-inner">
      <div class="container">
       <div class="row">
        <div class="col-md-7">
         <h2 class="h1 fw-9">Career <span class="tex-blue">Prospects</span></h2>
         <p class="text-uppercase">lorem Ipsum is simply dummy text</p>
        <div class="heading-bg hb-left"></div>
         <div class="accordion-wrapper">
          <div class="accordion active">
            <div class="accordion_tab active">Lorem Ipsum is simply dummy text</div>
            <div class="accordion_content">
              <div class="accordion_item">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
              </div>
            </div>
          </div>
          <div class="accordion">
            <div class="accordion_tab">It was popularised in the 1960s with the release of Letraset sheets</div>
            <div class="accordion_content">
              <div class="accordion_item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess. iure poss imusven am aliquam</p>
              </div>
            </div>
          </div>
          <div class="accordion">
            <div class="accordion_tab">It was popularised in the 1960s with the release of Letraset sheets</div>
            <div class="accordion_content">
              <div class="accordion_item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess. iure poss imusven am aliquam</p>
              </div>
            </div>
          </div>
         </div>
       </div>
        <div class="col-md-5">
         <div class="career-img"><img src="{{asset('assets/images/career-img.jpg')}}" alt="career-img"></div>
        </div>
       </div>
      </div>
     </div>
    </section>
    <!-- news section -->
    <section id="home-news" class="grey-bg">
     <div class="section-inner">
      <div class="container">
       <div class="row">
        <div class="col-12 text-center">
         <h2 class="h1 fw-9">Latest <span class="tex-blue">News</span></h2>
         <p class="text-uppercase">lorem Ipsum is simply dummy text</p>
        <div class="heading-bg"></div>
       </div>
       </div>
       <div class="row">
           <div class="col-md-4">
            <div class="news-box">
              <div class="news-date">28<span>Feb</span></div>
              <div class="news-img" style="background:url({{asset('assets/images/news-img1.jpg')}}) no-repeat center center; background-size:cover"></div>
              <div class="contant-box">
               <h4>Your News Heading Here</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti</p>
               <a href="news-details.html" class="btn">Read More</a>
              </div>          
            </div>
           </div>
           <div class="col-md-4">
            <div class="news-box">
              <div class="news-date">28<span>Feb</span></div>
              <div class="news-img" style="background:url({{asset('assets/images/news-img2.jpg')}}) no-repeat center center; background-size:cover"></div>
              <div class="contant-box">
               <h4>Your News Heading Here</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti</p>
               <a href="news-details.html" class="btn">Read More</a>
              </div>          
            </div>
           </div>
           <div class="col-md-4">
            <div class="news-box">
              <div class="news-date">28<span>Feb</span></div>
              <div class="news-img" style="background:url({{asset('assets/images/news-img3.jpg')}}) no-repeat center center; background-size:cover"></div>
              <div class="contant-box">
               <h4>Your News Heading Here</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti</p>
               <a href="news-details.html" class="btn">Read More</a>
              </div>          
            </div>
           </div>
       </div>
      </div>
     </div>
    </section>
    <!-- video section -->
    <section id="home-video" class="dark-grey-bg">
     <div class="section-inner">
      <div class="container">
       <div class="row">
        <div class="col-12 text-center">
         <h2 class="h1 fw-9 tex-white">Latest <span class="tex-blue">Video</span></h2>
         <p class="text-uppercase tex-white">lorem Ipsum is simply dummy text</p>
        <div class="heading-bg"></div>
       </div>
       </div>
       <div class="row">
           <div class="col-md-4">
            <div class="news-box">
              <div class="video-background">
                <div class="video-foreground">
                 <iframe width="100%" height="240" src="https://www.youtube.com/embed/zxO49kFkl0Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
             <div class="contant-box">
               <h4>Your Video Heading Here</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti</p>
               <a href="video-details.html" class="btn">Read More</a>
              </div>                        
            </div>
           </div>
           <div class="col-md-4">
            <div class="news-box">
              <div class="video-background">
                <div class="video-foreground">
                 <iframe width="100%" height="240" src="https://www.youtube.com/embed/MEDRnzbgg1E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
              
             <div class="contant-box">
               <h4>Your Video Heading Here</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti</p>
               <a href="video-details.html" class="btn">Read More</a>
              </div>                        
            </div>
           </div>
           <div class="col-md-4">
            <div class="news-box">
               <div class="video-background">
                <div class="video-foreground">
                  <iframe width="100%" height="280" src="https://www.youtube.com/embed/GgtchYWiuQ4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
             <div class="contant-box">
               <h4>Your Video Heading Here</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti</p>
               <a href="video-details.html" class="btn">Read More</a>
              </div>                        
            </div>
           </div>
       </div>
      </div>
     </div>
    </section>
    <!-- testimonials section -->
    <section id="home-testimonials">
     <div class="section-inner">
      <div class="container">
       <div class="row">
        <div class="col-12 text-center">
         <h2 class="h1 fw-9">Client <span class="tex-blue">Testimonials</span></h2>
         <p class="text-uppercase">lorem Ipsum is simply dummy text</p>
        <div class="heading-bg"></div>
       </div>
       </div>
       <div class="testi-slider">
        <div class="testimonial_slider owl-carousel">
        <div class="row item">
           <div class="col-md-6">
            <div class="testi-box">
             <div class="user-img" style="background:url({{asset('assets/images/testimonial-img1.jpg')}}) no-repeat top center; background-size:cover;"></div>
             <div class="testi-contant">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</p>
              <div class="user-info">Your Name Here <span>Company Name</span></div>
             </div>
            </div>
           </div>
           <div class="col-md-6">
            <div class="testi-box">
             <div class="user-img" style="background:url({{asset('assets/images/testimonial-img2.jpg')}}) no-repeat top center; background-size:cover;"></div>
             <div class="testi-contant">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</p>
              <div class="user-info">Your Name Here <span>Company Name</span></div>
             </div>
            </div>
           </div>
        </div>
        <div class="row item">
           <div class="col-md-6">
            <div class="testi-box">
             <div class="user-img" style="background:url({{asset('assets/images/testimonial-img3.jpg')}}) no-repeat top center; background-size:cover;"></div>
             <div class="testi-contant">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</p>
              <div class="user-info">Your Name Here <span>Company Name</span></div>
             </div>
            </div>
           </div>
           <div class="col-md-6">
            <div class="testi-box">
             <div class="user-img" style="background:url({{asset('assets/images/testimonial-img4.jpg')}}) no-repeat top center; background-size:cover;"></div>
             <div class="testi-contant">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</p>
              <div class="user-info">Your Name Here <span>Company Name</span></div>
             </div>
            </div>
           </div>
        </div>
        </div>
       </div>
      </div>
     </div>
    </section>
</main>

@endsection