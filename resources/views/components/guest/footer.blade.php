 {{-- <!-- ======= Footer ======= -->
 <footer id="footer">

     <x-guest.newsletter />

     <div class="footer-top">
         <div class="container">
             <div class="row">

                 @if ($corporation)

                     <div class="col-lg-3 col-md-6 footer-contact">

                         <h3>{{ $corporation->name }}<span>.</span></h3>

                         <p>

                             @if ($corporation->contacts)

                                 @foreach ($corporation->contacts as $contact)

                                     @if ($contact->contactType)

                                         @if ($contact->contactType->name == 'Address')
                                             <!-- TODO: split the value -->
                                             {{ $contact->value }}<br>

                                         @endif


                                     @endif

                                 @endforeach

                             @endif

                             <br><br>

                             @if ($corporation->contacts)

                                 @foreach ($corporation->contacts as $contact)

                                     @if ($contact->contactType)

                                         @if ($contact->contactType->name != 'Address')

                                             <strong>{{ $contact->contactType->name }}:</strong>
                                             {{ $contact->value }}<br>

                                         @endif


                                     @endif

                                 @endforeach

                             @endif
                         </p>
                     </div>
                 @endif

                 <div class="col-lg-3 col-md-6 footer-links">
                     <h4>Useful Links</h4>
                     <ul>

                         @if ($sitePages)

                             <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>

                             @foreach ($sitePages as $sitePage)

                                 @php
                                     $route;
                                 @endphp

                                 @switch(Str::lower($sitePage->name))

                                     @case('about')

                                         @php
                                             $route = 'about';
                                         @endphp

                                     @break
                                     @case('contact')

                                         @php
                                             $route = 'contact';
                                         @endphp

                                     @break
                                     @case('faq')

                                         @php
                                             $route = 'faq';
                                         @endphp

                                     @break
                                     @case('privacy policy')

                                         @php
                                             $route = 'privacy_policy';
                                         @endphp

                                     @break
                                     @case('services')

                                         @php
                                             $route = 'service';
                                         @endphp

                                     @break
                                     @case('team')

                                         @php
                                             $route = 'team';
                                         @endphp

                                     @break
                                     @default

                                         @php
                                             $route = 'home';
                                         @endphp

                                 @endswitch

                                 <li><i class="bx bx-chevron-right"></i> <a
                                         href="{{ route($route) }}">{{ $sitePage->name }}</a></li>

                             @endforeach

                         @endif
                     </ul>
                 </div>

                 <div class="col-lg-3 col-md-6 footer-links">
                     <h4>Our Services</h4>
                     <ul>

                        @if ($section)

                            @foreach ($section->items as $item)

                            <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $item->iconableItem->title }}</a></li>

                            @endforeach

                        @endif

                     </ul>
                 </div>

                 <div class="col-lg-3 col-md-6 footer-links">
                     <h4>Our Social Networks</h4>
                     <!-- TODO: review this after-->
                     <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                     <div class="social-links mt-3">

                        @if ($linkTypes)

                            @foreach ($linkTypes as $linkType)

                                <a href="{{ $linkType->links[0]->url }}" class="{{ $linkType->icon->class }}"><i class="bx bxl-{{ $linkType->icon->class }}"></i></a>

                            @endforeach

                        @endif
                     </div>
                 </div>

             </div>
         </div>
     </div>

     <div class="container py-4">
         <div class="copyright">
             &copy; Copyright <strong><span>{{ $corporation->name }}</span></strong>. All Rights Reserved
         </div>
         <div class="credits">
             <!-- All the links in the footer should remain intact. -->
             <!-- You can delete the links only if you purchased the pro version. -->
             <!-- Licensing information: https://bootstrapmade.com/license/ -->
             <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
             Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
         </div>
     </div>
 </footer><!-- End Footer --> --}}  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>BizLand<span>.</span></h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->


