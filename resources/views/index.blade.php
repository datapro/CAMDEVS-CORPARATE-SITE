@extends('layouts.main')
@section('content')
<!-- MAIN -->
<main>
  <!-- slider -->
  <div class="home_slider owl-carousel">
    <div class="item full_slides" style="background:url({{asset('assets/images/slide1.jpg')}}) no-repeat center center; background-size:cover;">
      <div class="full_slide_caption">
        <div class="slider-txt-medium">Collective Action Movement for Democratic and Environmental Issues (CAMDEVS) Foundation </div>
        <div class="slider-txt-big">Welcome to <span class="tex-blue">CAMDEVS</span></div>
        <p>Collective Action Movement on democratic values and environmental issues!</p>
        <a class="btn btn-big btn-blue" href="{{url('/about')}}">Learn More!</a>
      </div>
    </div>
    <div class="item full_slides" style="background:url({{asset('assets/images/slide2.jpg')}}) no-repeat center center; background-size:cover;">
      <div class="full_slide_caption">
        <div class="slider-txt-medium">Collective Action Movement for Democratic and Environmental Issues (CAMDEVS) Foundation </div>
        <div class="slider-txt-big">Welcome to <span class="tex-blue">CAMDEVS</span></div>
        <p>Collective Action Movement on democratic values and environmental issues!</p>
        <a class="btn btn-big btn-blue" href="{{url('/about')}}">Learn More!</a>
      </div>
    </div>
    <div class="item full_slides" style="background:url({{asset('assets/images/slide3.jpg')}}) no-repeat center center; background-size:cover;">
      <div class="full_slide_caption">
        <div class="slider-txt-medium">Collective Action Movement for Democratic and Environmental Issues (CAMDEVS) Foundation </div>
        <div class="slider-txt-big">Welcome to <span class="tex-blue">CAMDEVS</span></div>
        <p>Collective Action Movement on democratic values and environmental issues!</p>
        <a class="btn btn-big btn-blue" href="{{url('/about')}}">Learn More!</a>
      </div>
    </div>
    <div class="item full_slides" style="background:url({{asset('assets/images/slide4.jpg')}}) no-repeat center center; background-size:cover;">
      <div class="full_slide_caption">
        <div class="slider-txt-medium">Collective Action Movement for Democratic and Environmental Issues (CAMDEVS) Foundation </div>
        <div class="slider-txt-big">Welcome to <span class="tex-blue">CAMDEVS</span></div>
        <p>Collective Action Movement on democratic values and environmental issues!</p>
        <a class="btn btn-big btn-blue" href="{{url('/about')}}">Learn More!</a>
      </div>
    </div>
    <div class="item full_slides" style="background:url({{asset('assets/images/slide5.jpg')}}) no-repeat center center; background-size:cover;">
      <div class="full_slide_caption">
        <div class="slider-txt-medium">Collective Action Movement for Democratic and Environmental Issues (CAMDEVS) Foundation </div>
        <div class="slider-txt-big">Welcome to <span class="tex-blue">CAMDEVS</span></div>
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
            <h2 class="h1 fw-9">CAMDEVS<span class="tex-blue"> Foundation</span></h2>
            <p class="text-uppercase"> To advocate for the survival of our Environment.</p>
            <div class="heading-bg"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="service-box">
              <a href="#">
                <div class="service-img" style="background:url({{asset('assets/images/agro.jpg')}}) no-repeat center center; background-size:cover"></div>
              </a>
              <div class="service-content">
                <h5><a href="#">Agro Allied Farming</a></h5>
                <p>The agro-allied sector encompasses a wide range of industries that add value to
                  agricultural products, support farmers, and contribute to the overall economy. It plays
                  a critical role in advancing rural Democratic, promoting industrialization, and ensuring
                  food security. By addressing challenges such as infrastructure.</p>
                {{-- <div class="service-info clearfix">
            <div class="s-infobox"><span>5000</span> Projects</div>
            <div class="s-infobox"><span>320</span> Clients</div>
            <div class="s-infobox"><span>12000 hour</span> Working</div>
           </div> --}}
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-box">
              <a href="#">
                <div class="service-img" style="background:url({{asset('assets/images/skills.jpg')}}) no-repeat center center; background-size:cover"></div>
              </a>
              <div class="service-content">
                <h5><a href="#">Skill Acquisition</a></h5>
                <p>Skill acquisition is a lifelong process that helps individuals remain competitive,
                  capable, and confident in an ever-evolving world. By taking advantage of formal education,
                  self-learning, and practical experience, individuals can continually
                  grow and succeed in their personal and professional lives.</p>
                {{-- <div class="service-info clearfix">
            <div class="s-infobox"><span>5000</span> Projects</div>
            <div class="s-infobox"><span>320</span> Clients</div>
            <div class="s-infobox"><span>12000 hour</span> Working</div>
           </div> --}}
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-box">
              <a href="#">
                <div class="service-img" style="background:url({{asset('assets/images/scholarship.jpg')}}) no-repeat center center; background-size:cover"></div>
              </a>
              <div class="service-content">
                <h5><a href="#">Scholarship</a></h5>
                <p>A scholarship is a financial aid award designed to help students pay for their education. Unlike
                  loans, scholarships do not need to be repaid. They are typically awarded based on various criteria
                  such as academic achievement, extracurricular involvement, leadership potential, financial need, or specific talents and skills.</p>
                {{-- <div class="service-info clearfix">
            <div class="s-infobox"><span>5000</span> Projects</div>
            <div class="s-infobox"><span>320</span> Clients</div>
            <div class="s-infobox"><span>12000 hour</span> Working</div>
           </div> --}}
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-box">
              <a href="#">
                <div class="service-img" style="background:url({{asset('assets/images/feeding.jpg')}}) no-repeat center center; background-size:cover"></div>
              </a>
              <div class="service-content">
                <h5><a href="#">Feeding Program</a></h5>
                <p>Feeding programs are vital initiatives that help address hunger, improve nutrition, and support
                  vulnerable communities. By combining food distribution with other Democratical programs such as
                  education and health services, feeding programs can have long-term positive impacts on individuals
                  and communities. These initiatives often rely on partnerships, donations, and local involvement to ensure sustainability and effectiveness.</p>
                {{-- <div class="service-info clearfix">
            <div class="s-infobox"><span>5000</span> Projects</div>
            <div class="s-infobox"><span>320</span> Clients</div>
            <div class="s-infobox"><span>12000 hour</span> Working</div>
           </div> --}}
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-box">
              <a href="#">
                <div class="service-img" style="background:url({{asset('assets/images/smallscale.jpg')}}) no-repeat center center; background-size:cover"></div>
              </a>
              <div class="service-content">
                <h5><a href="#">Small Scale Business</a></h5>
                <p>Small-scale businesses are essential to local economies, fostering innovation, job creation, and
                  community Democratic. Although they face unique challenges, careful planning, efficient operations,
                  and a focus on customer satisfaction can lead to long-term success. By leveraging local resources,
                  modern technology, and a strong work ethic, small business owners can grow their ventures and make
                  a meaningful impact in their industries.
                </p>
                {{-- <div class="service-info clearfix">
            <div class="s-infobox"><span>5000</span> Projects</div>
            <div class="s-infobox"><span>320</span> Clients</div>
            <div class="s-infobox"><span>12000 hour</span> Working</div>
           </div> --}}
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-box">
              <a href="#">
                <div class="service-img" style="background:url({{asset('assets/images/verifiedmember.jpg')}}) no-repeat center center; background-size:cover"></div>
              </a>
              <div class="service-content">
                <h5><a href="#">Become a Certified Member of CAMDEVS</a></h5>
                <p>Click on this link to become a Certified member of CAMDEVS to be qualify for the above empowerment opportunities.
                  By becoming a member, individuals or businesses gain access to unique opportunities, resources, and a sense of belonging. Each membership comes with its own set of benefits and responsibilities,
                  fostering personal growth, professional Democratic, and community engagement.
                </p>
                {{-- <div class="service-info clearfix">
            <div class="s-infobox"><span>5000</span> Projects</div>
            <div class="s-infobox"><span>320</span> Clients</div>
            <div class="s-infobox"><span>12000 hour</span> Working</div>
           </div> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a class="btn btn-big btn-blue" href="{{url('/join')}}">Become a MEMBER</a>
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
            <h2 class="h1 fw-9">CAMDEVS <span class="tex-blue">features</span></h2>
            <p class="text-uppercase">Foundation represent</p>
            <div class="heading-bg"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="feature-box clearfix">
              <div class="feature-icon"><i class="fas fa-paint-brush"></i></div>
              <div class="feature-contant">
                <h4>Agro Allied</h4>
                <p>We assist farmers with agro allied product e.g fertilizers</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="feature-box clearfix">
              <div class="feature-icon"><i class="fas fa-location-arrow"></i></div>
              <div class="feature-contant">
                <h4>Intensive Training</h4>
                <p>Assist with training for skills</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="feature-box clearfix">
              <div class="feature-icon"><i class="fas fa-users"></i></div>
              <div class="feature-contant">
                <h4>Micro Business Empowerment</h4>
                <p>We support small scale enterprise</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="feature-box clearfix">
              <div class="feature-icon"><i class="fas fa-shopping-cart"></i></div>
              <div class="feature-contant">
                <h4>Feeding Program</h4>
                <p>Our feeding is to support less Privilege and strictly for approved member</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="feature-box clearfix">
              <div class="feature-icon"><i class="fas fa-camera"></i></div>
              <div class="feature-contant">
                <h4>Scholarship opportunity</h4>
                <p>We give scholarship to merited members</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="feature-box clearfix">
              <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
              <div class="feature-contant">
                <h4>Leadership training</h4>
                <p>Membership training also available</p>
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
          <h2 class="h1 fw-9 tex-white">About <span class="tex-blue">CAMDEVS</span></h2>
          <p class="text-uppercase tex-white">Aims And Object</p>
          <div class="heading-bg hb-left"></div>
          <p class="tex-dull-white">To inspire Leaders and citizenry of Nigeria to patriotic
            Ideals such as bravery, integrity, Morality, Love ,sense of responsibility to the
            wellbeing of our Nation, regardless of race, colour and religion.</p>
          <p class="text-uppercase tex-white">Vision</p>
          <div class="heading-bg hb-left"></div>
          <p class="tex-dull-white">To inspire the spirit of patriotism and peaceful co existence
            of the younger generation through standard awareness program
            To mobilize Nigerians for collective action where all hands must be involved in
            nation building .</p>
          <p class="text-uppercase tex-white">Mission Statement</p>
          <div class="heading-bg hb-left"></div>
          <p class="tex-dull-white">To inspire democratic Values that can transcend into
            Nigeria of our dream..</p>
          {{-- <h6 class="tex-blue">Why we are different:</h6>
          <ul class="list list-white">
           <li>Excepteur sint occaecat cupidatat</li>
           <li>Non proident sunt in culpa qui</li>
           <li>Officia deserunt mollit</li>
           <li>Anim id est laborum</li>
          </ul> --}}
          <a class="btn btn-medium btn-white" href="{{url('/about')}}">Read More</a>
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
            <p class="text-uppercase">Empowerment in agro-allied</p>
            <div class="heading-bg hb-left"></div>
            <div class="accordion-wrapper">
              <div class="accordion active">
                <div class="accordion_tab active">Capacity Building and Training</div>
                <div class="accordion_content">
                  <div class="accordion_item">
                    <p>Empowerment in the agro-allied sector often starts with building the capacity of
                      farmers, agripreneurs, and small-scale businesses. This includes:

                      Skills training: Providing training on modern farming techniques, mechanization,
                      and best practices to increase productivity and efficiency.
                      Access to new technology: Farmers and businesses are introduced to new technologies
                      (such as improved seeds, pest control methods, and automated equipment) that can boost output.
                      Entrepreneurial skills: Training on business Democratic, financial management,
                      and marketing to help people transition from subsistence farming to commercial agriculture.</p>
                  </div>
                </div>
              </div>
              <div class="accordion">
                <div class="accordion_tab">Microloans and credit facilities for smallholder farmers.</div>
                <div class="accordion_content">
                  <div class="accordion_item">
                    <p>Grants and subsidies from governments or NGOs to encourage investments in
                      sustainable agriculture and agro-processing.</p>
                  </div>
                </div>
              </div>
              <div class="accordion">
                <div class="accordion_tab">It was popularised in the 1960s with the release of Letraset sheets</div>
                <div class="accordion_content">
                  <div class="accordion_item">
                    <p>To experience a better Nigeria, everyone must get involved in promoting the ideals of patriotism. We must start from our various homes, primary , secondary, and tertiary education and finally to the secular world.
</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="career-img"><img src="{{asset('assets/images/career.jpg')}}" alt="career-img"></div>
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
            <h2 class="h1 fw-9">Previous <span class="tex-blue">Events</span></h2>
            <p class="text-uppercase">Some past empowerment program</p>
            <div class="heading-bg"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="news-box">
              <div class="news-date">12<span>Sept</span></div>
              <div class="news-img" style="background:url({{asset('assets/images/act6.jpg')}}) no-repeat center center; background-size:cover"></div>
              <div class="contant-box">
                <h4>Food Security: </h4>
                <p>CAMDEVS task FG on security
                  A social Political group , Collective Action on Democratic Movement and Environmental issues has called on Federal Government to expedite action in addressing the insecurity situation across the country which is preventing farmers from accesing their farms.</p>

                {{-- <a href="news-details.html" class="btn">Read More</a> --}}
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="news-box">
              <div class="news-date">10<span>May</span></div>
              <div class="news-img" style="background:url({{asset('assets/images/leadership.jpg')}}) no-repeat center center; background-size:cover"></div>
              <div class="contant-box">
                <h4>CAMDEVS</h4>
                <p>Leadership and some Members of Collective Action Movement on Democratic Values and Environmental Issues were fully on ground at the golden jubilee Anniversary of Chief Peter Ehi Okons at Intercontinental hotel in Lagos, Nigeria.</p>

                {{-- <a href="news-details.html" class="btn">Read More</a> --}}
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="news-box">
              <div class="news-date">20<span>Sept</span></div>
              <div class="news-img" style="background:url({{asset('assets/images/leadership2.jpg')}}) no-repeat center center; background-size:cover"></div>
              <div class="contant-box">
                <h4>Edo Poll</h4>

                <p>The National coordinator of Collective Action Movement for Democratic and Environmental Issues, ( CAMDEVS), Ambassador Emmanuel Akuba has tasked the Independent National Electoral Commission (INEC) .</p>

                {{-- <a href="news-details.html" class="btn">Read More</a> --}}
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
            <h2 class="h1 fw-9 tex-white">CAMDEVS<span class="tex-blue"> Video</span></h2>
            <p class="text-uppercase tex-white">Video of past events</p>
            <div class="heading-bg"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="news-box">
              <div class="video-background">
                <div class="video-foreground">
                  <video src="{{asset('assets/videos/v1.mp4')}}" controls width="100%" height="240"></video>
                </div>
              </div>
              <div class="contant-box">
                {{-- <h4>Your Video Heading Here</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti</p> --}}
                {{-- <a href="video-details.html" class="btn">Read More</a> --}}
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="news-box">
              <div class="video-background">
                <div class="video-foreground">
                  <video src="{{asset('assets/videos/v2.mp4')}}" controls width="100%" height="240"></video>
                </div>
              </div>

              <div class="contant-box">
                {{-- <h4>Your Video Heading Here</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti</p> --}}
                {{-- <a href="video-details.html" class="btn">Read More</a> --}}
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="news-box">
              <div class="video-background">
                <div class="video-foreground">
                  <video src="{{asset('assets/videos/v3.mp4')}}" controls width="100%" height="240"></video>
                </div>
              </div>
              <div class="contant-box">
                {{-- <h4>Your Video Heading Here</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti</p> --}}
                {{-- <a href="video-details.html" class="btn">Read More</a> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- testimonials section -->
  {{-- <section id="home-testimonials">
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
  </section> --}}
</main>

@endsection
