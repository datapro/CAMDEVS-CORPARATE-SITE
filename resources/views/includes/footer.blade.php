<footer id="footer">
  <div class="section-inner footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
          <a class="footer-logo" href="{{url('/')}}"><img src="{{asset('assets/images/log.png')}}" alt="logo" style="width: 737px;"></a>
          <p>Collective Action Movement for Democratic Values and Environmental issues (CAMDEVS Foundation) is a non governmental organization established
            by like minds to promote Leadership and Citizens patriotism in Nigeria and Africa at large. </p>
          <h5>Sign Up Our Newsletter</h5>
          @include('inc.messages')
          <form class="newsletter-form" method="post" action="{{url('/')}}">
            @csrf
            <div class="f-field"><input name="email" type="email" required placeholder="Enter Your Email Address"></div>
            <div class="submit-btn"><input name="submit" type="submit" value="Sign Up"></div>

          </form>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          {{-- <h5 class="mb-4">Company</h5>
                    <ul class="footer-menu">
                        <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('/about')}}">About</a></li>
          <li><a href="{{url('/services')}}">Services</a></li>
          <li><a href="#">Scholarship</a></li>
          <li><a href="{{url('/index')}}">Contact</a></li>
          <li><a href="team.html">Team</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="testimonials.html">Testimonial</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="faq.html">FAQ</a></li>
          </ul> --}}
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <h5 class="mb-4">Quick Links</h5>
          <ul class="footer-menu">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/about')}}">About</a></li>
            <li><a href="{{url('/member')}}">New Member</a></li>
            <li><a href="{{url('/scholarship')}}">Scholarship</a></li>
            <li><a href="{{url('/index')}}">Contact</a></li>
            {{-- <li><a href="team.html">Team</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="testimonials.html">Testimonial</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="faq.html">FAQ</a></li>   --}}
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <h5 class="mb-4">Contact Us</h5>
          <p>Benin Office :<br> No 1, Reservation road, Oguola Press Center, GRA, Benin City</p>
          <p>Abuja Office : <br> Muhammad complex, Utako, Abuja</p>
          <p><strong>Phone:</strong> <a href="tel:+2347053506951">+2347053506951</a><br>
            <strong>Email:</strong> <a href="#"><span class="__cf_email__" data-cfemail="442d2a222b043d2b3136282d2a2f376a272b29">Camdevspatroit@gmail.com</span></a></p>
          <ul class="footer-social clearfix">
            <li class="facebook"><a href="https://web.facebook.com/profile.php?id=100087651557657" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li class="twitter"><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
            {{-- <li class="gplus"><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li> --}}
            <li class="linkedin"><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
            <li class="flicker"><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="section-inner footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>Copyright © 2024 CAMDEV By Datapro Tech. Int.- All rights reserved.</p>
        </div>
        <div class="col-md-6 text-end">
          {{-- <p><a href="terms-conditions.html">Terms & Conditions</a> | <a href="privacy-policy.html">Privacy Policy</a></p> --}}
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- jQuery first, then Popper.js')}}, then Bootstrap JS -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script defer src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('assets/js/owl/owl.js')}}"></script>
<script src="{{asset('assets/js/is.min.js')}}"></script>
<script src="{{asset('assets/js/all.js')}}"></script>
<script src="{{asset('assets/js/colors.js')}}"></script>
