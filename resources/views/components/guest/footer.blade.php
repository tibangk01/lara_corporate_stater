 <!-- ======= Footer ======= -->
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
                                     @case('privacy')

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
 </footer><!-- End Footer -->
