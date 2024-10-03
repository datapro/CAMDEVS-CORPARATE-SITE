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
       <h5 class="text-transform-normal">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</h5>
       <p><strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</strong> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>

<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was </p>
     </div>
     </div>
     <div class="row">
      <div class="col-md-6 mb-5">  
       <div class="about-detail-img"><img src="{{asset('assets/images/about-img.jpg')}}" alt="about-img"></div>       
      </div>
      <div class="col-md-6">  
       <p><strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</strong><br> 
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br> 
It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus Page</p>   
       <h6 class="tex-blue">Why we are different:</h6>
       <ul class="list">
         <li>Excepteur sint occaecat cupidatat</li>
         <li>Non proident sunt in culpa qui</li>
         <li>Officia deserunt mollit</li>
         <li>Anim id est laborum</li>
         <li>Excepteur sint occaecat cupidatat</li>
         <li>Non proident sunt in culpa qui</li>
         <li>Letraset sheets containing Lorem Ipsum passages</li>
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
       <h2 class="h1 fw-9">Meet <span class="tex-blue">the team</span></h2>
       <p class="text-uppercase">lorem Ipsum is simply dummy text</p>
      <div class="heading-bg"></div>
     </div>
     </div>
     <div class="row">
     <div class="col-lg-3 col-md-6">
      <div class="team-box">
        <div class="team-member-img"><img src="{{asset('assets/images/team-img1.jpg')}}" alt="Team Member"></div>
        <div class="team-member-info">
         <h5 class="team-member-name tex-blue text-transform-normal">Team Member Name</h5>
         <p class="team-member-designation">Member Designation</p>           
        </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6">
      <div class="team-box">
        <div class="team-member-img"><img src="{{asset('assets/images/team-img2.jpg')}}" alt="Team Member"></div>
        <div class="team-member-info">
         <h5 class="team-member-name tex-blue text-transform-normal">Team Member Name</h5>
         <p class="team-member-designation">Member Designation</p>           
        </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6">
      <div class="team-box">
        <div class="team-member-img"><img src="{{asset('assets/images/team-img3.jpg')}}" alt="Team Member"></div>
        <div class="team-member-info">
         <h5 class="team-member-name tex-blue text-transform-normal">Team Member Name</h5>
         <p class="team-member-designation">Member Designation</p>           
        </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6">
      <div class="team-box">
        <div class="team-member-img"><img src="{{asset('assets/images/team-img4.jpg')}}" alt="Team Member"></div>
        <div class="team-member-info">
         <h5 class="team-member-name tex-blue text-transform-normal">Team Member Name</h5>
         <p class="team-member-designation">Member Designation</p>           
        </div>
      </div>
     </div>
     </div>
    </div>
   </div>
  </section>
  <!-- about partner section -->
  <section id="about-team" class="dark-grey-bg">
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