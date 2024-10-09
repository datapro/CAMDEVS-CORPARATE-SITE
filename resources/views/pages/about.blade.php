@extends('layouts.main')

@section('content')
<main>
  <!-- page heading and breadcrumb -->
  <div class="inner-banner" style="background:url({{asset('assets/images/innerheaderbanner.jpg')}}) no-repeat center center; background-size:cover;">
      <div class="inner-page-heading">
        <h1 class="page-heading">about</h1>
        <div class="heading-bg"></div>
      </div>
  </div>
  <!-- about section -->
  <section id="about-details">
   <div class="section-inner">
    <div class="container">
     <div class="row">
      <div class="col-12">
       <h5 class="text-transform-normal">Collective Action Movement for Democratic Values and Environmental
         issues (CAMDEVS Foundation) is a non governmental organization established by like minds  to  promote 
        Leadership and Citizens patriotism in Nigeria and Africa at large.</h5>
       <p><strong>It is a fact  that  patriotism trickes from the top to the bottom.</strong>  
        For followers to be patriotic,  leaders across boards must demonstrate integrity, 
        transparency, accountability to be able to promote Peace and Unity. </p>

<p>CAMDEVS through systemic sensitization program will continue to proffer 
  solution on how the spirit of patriotism can be Reawakened</p>
     </div>
     </div>
     <div class="row">
      <div class="col-md-6 mb-5">  
       <div class="about-detail-img"><img src="{{asset('assets/images/about-img.jpg')}}" alt="about-img"></div>       
      </div>
      <div class="col-md-6">  
       <p><strong>To see the development we desire, we must first love our country by genuinely participating 
        in the electoral system without being influence with Money.</strong><br> 
        Patriotism start with each one of us seeing the need to love and protect our country through our actions.
        The moment we stop assessing ourselves by our ethnicity, rather see ourselves as one indivisible entity, then, 
        the Peace and Unity we seek for would embrace us as a people.</p>   
       <h6 class="tex-blue">Why we are different:</h6>
       <ul class="list">
         <li>It is a fact today, because of hunger and poverty, many people don't  see being patriotic 
          as a responsibility . We are all complaining, blaming our leaders alone but the truth is ,
           we are all to be blame for what is happening in the country.</li>
         <li>To experience a better Nigeria, everyone must get involved in promoting the ideals of 
          patriotism. We must start from our various homes, primary ,
           secondary, and tertiary education and finally to the secular world.</li>
         <li>As an undergraduate in any of the Universities in the country, to become a beneficiary
           to CAMDEVS Scholarship program, Agro Livestock Farming program, 
          you must have shown reasonable commitment as  patriots who attend our programs. ECT.</li>
         {{-- <li>Anim id est laborum</li>
         <li>Excepteur sint occaecat cupidatat</li>
         <li>Non proident sunt in culpa qui</li>
         <li>Letraset sheets containing Lorem Ipsum passages</li> --}}
       </ul> 
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- about team section -->
  <section id="about-team" class="grey-bg">
   <div class="section-inner">
    <div class="container">
     <div class="row">
      <div class="col-12 text-center">
       <h2 class="h1 fw-9">Past <span class="tex-blue">Events</span></h2>
       <p class="text-uppercase"></p>
      <div class="heading-bg"></div>
     </div>
     </div>
     <div class="row">
     <div class="col-lg-3 col-md-6">
      <div class="team-box">
        <div class="team-member-img"><img src="{{asset('assets/images/act.jpg')}}" alt="Team Member"></div>
        <div class="team-member-info">
         {{-- <h5 class="team-member-name tex-blue text-transform-normal">Team Member Name</h5>
         <p class="team-member-designation">Member Designation</p>            --}}
        </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6">
      <div class="team-box">
        <div class="team-member-img"><img src="{{asset('assets/images/act1.jpg')}}" alt="Team Member"></div>
        <div class="team-member-info">
         {{-- <h5 class="team-member-name tex-blue text-transform-normal">Team Member Name</h5>
         <p class="team-member-designation">Member Designation</p>            --}}
        </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6">
      <div class="team-box">
        <div class="team-member-img"><img src="{{asset('assets/images/act4.jpg')}}" alt="Team Member"></div>
        <div class="team-member-info">
         {{-- <h5 class="team-member-name tex-blue text-transform-normal">Team Member Name</h5>
         <p class="team-member-designation">Member Designation</p>            --}}
        </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6">
      <div class="team-box">
        <div class="team-member-img"><img src="{{asset('assets/images/act5.jpg')}}" alt="Team Member"></div>
        <div class="team-member-info">
         {{-- <h5 class="team-member-name tex-blue text-transform-normal">Team Member Name</h5>
         <p class="team-member-designation">Member Designation</p>            --}}
        </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6">
      <div class="team-box">
        <div class="team-member-img"><img src="{{asset('assets/images/act6.jpg')}}" alt="Team Member"></div>
        <div class="team-member-info">
         {{-- <h5 class="team-member-name tex-blue text-transform-normal">Team Member Name</h5>
         <p class="team-member-designation">Member Designation</p>            --}}
        </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6">
      <div class="team-box">
        <div class="team-member-img"><img src="{{asset('assets/images/act7.jpg')}}" alt="Team Member"></div>
        <div class="team-member-info">
         {{-- <h5 class="team-member-name tex-blue text-transform-normal">Team Member Name</h5>
         <p class="team-member-designation">Member Designation</p>            --}}
        </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6">
      <div class="team-box">
        <div class="team-member-img"><img src="{{asset('assets/images/act8.jpg')}}" alt="Team Member"></div>
        <div class="team-member-info">
         {{-- <h5 class="team-member-name tex-blue text-transform-normal">Team Member Name</h5>
         <p class="team-member-designation">Member Designation</p>            --}}
        </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6">
      <div class="team-box">
        <div class="team-member-img"><img src="{{asset('assets/images/act3.jpg')}}" alt="Team Member"></div>
        <div class="team-member-info">
         {{-- <h5 class="team-member-name tex-blue text-transform-normal">Team Member Name</h5>
         <p class="team-member-designation">Member Designation</p>            --}}
        </div>
      </div>
     </div>
     </div>
    </div>
   </div>
  </section>
  <!-- about partner section -->
  {{-- <section id="about-team" class="dark-grey-bg">
   <div class="section-inner">
    <div class="container">
     <div class="row">
      <div class="col-12 text-center">
       <h2 class="h1 fw-9 tex-white">Meet <span class="tex-blue">Partners</span></h2>
       <p class="text-uppercase tex-white">lorem Ipsum is simply dummy text</p>
      <div class="heading-bg"></div>
     </div>
     </div>
     <div class="row">
     <div class="col-lg-3 col-md-6">
      <div class="partner-logo"><img src="{{asset('assets/images/partner-logo1.jpg')}}" alt="partner-logo"></div>
     </div>
     <div class="col-lg-3 col-md-6">
      <div class="partner-logo"><img src="{{asset('assets/images/partner-logo2.jpg')}}" alt="partner-logo"></div>
     </div>
     <div class="col-lg-3 col-md-6">
      <div class="partner-logo"><img src="{{asset('assets/images/partner-logo3.jpg')}}" alt="partner-logo"></div>
     </div>
     <div class="col-lg-3 col-md-6">
      <div class="partner-logo"><img src="{{asset('assets/images/partner-logo4.jpg')}}" alt="partner-logo"></div>
     </div>
     <div class="col-lg-3 col-md-6">
      <div class="partner-logo"><img src="{{asset('assets/images/partner-logo5.jpg')}}" alt="partner-logo"></div>
     </div>
     <div class="col-lg-3 col-md-6">
      <div class="partner-logo"><img src="{{asset('assets/images/partner-logo6.jpg')}}" alt="partner-logo"></div>
     </div>
     <div class="col-lg-3 col-md-6">
      <div class="partner-logo"><img src="{{asset('assets/images/partner-logo7.jpg')}}" alt="partner-logo"></div>
     </div>
     <div class="col-lg-3 col-md-6">
      <div class="partner-logo"><img src="{{asset('assets/images/partner-logo8.jpg')}}" alt="partner-logo"></div>
     </div>
     </div>
    </div>
   </div>
  </section> --}}
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