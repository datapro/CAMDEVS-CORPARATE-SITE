@extends('layouts.main')
@section('content')
<!-- MAIN -->
<main>
    <!-- page heading and breadcrumb -->
     <!-- page heading and breadcrumb -->
  <div class="inner-banner" style="background:url({{asset('assets/images/innerheaderbanner.jpg')}}) no-repeat center center; background-size:cover;">
    <div class="inner-page-heading">
      <h1 class="page-heading">Contact</h1>
      <div class="heading-bg"></div>
    </div>
</div>
    <!-- contact info and form -->
    <section id="contact-section" class="grey-bg">
     <div class="section-inner">
     <div class="container">
      <div class="row contact-info-sec text-center">
       <div class="col-lg-4 contact-info-box">
        <div class="contact-icon"><i class="fas fa-phone"></i></div>
        <h5 class="fw-7">Talk to Us</h5>
        <p>Toll-Free: <a href="tel:+2347053506951">+2347053506951</a>
    
       </div>    
       <div class="col-lg-4 contact-info-box">
        <div class="contact-icon"><i class="far fa-envelope"></i></div>
        <h5 class="fw-7">Contact Us</h5>
        <p><a href="#"><span class="__cf_email__" data-cfemail="0960676f664970667c656067627a276a6664">Camdevspatroit@gmail.com</span></a><br>
    {{-- <a href="https://envato.originalweb.co/cdn-cgi/l/email-protection#32414742425d4046724b5d47405e5b5c59411c515d5f"><span class="__cf_email__" data-cfemail="7605030606190402360f1903041a1f181d055815191b">[email&#160;protected]</span></a></p> --}}
       </div>
       <div class="col-lg-4 contact-info-box">
        <div class="contact-icon"><i class="fas fa-location-arrow"></i></div>
        <h5 class="fw-7">Location</h5>
        <p>Benin Office :
        <br>
        No 1, Reservation road, Oguola Press Center, GRA, Benin City.</p>
        <p>Abuja Office :
        <br>
        Muhammad complex, Utako, Abuja.</p>
       </div>  
      </div>
      <div class="row">
       <div class="col-lg-6 mb-5 p-0">
        <form class="contact-form" method="post" action="{{url('/index')}}">
         @csrf
        <div class="f-field"><input name="fname" type="text" required placeholder="Name"></div>
        <div class="f-field"><input name="email" type="email" required placeholder="Email"></div>
        <div class="f-field"><input name="phone" type="text" required placeholder="Phone"></div>
        <div class="f-field"><textarea name="msg" placeholder="Message"></textarea></div>
        <div class="submit-btn"><input name="submit" type="submit" value="submit"></div>
        </form>
        @include('inc.messages')
       </div>
       <div class="col-lg-6 p-0">
        <div class="gmap"><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15862.091002639143!2d5.609944721736699!3d6.326233862680221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sNo%201%2C%20Reservation%20road%2C%20Oguola%20Press%20Center%2C%20GRA%2C%20Benin%20City!5e0!3m2!1sen!2sng!4v1727850665068!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
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