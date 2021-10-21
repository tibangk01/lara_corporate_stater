{{-- <section id="topbar" class="d-flex align-items-center">

    <div class="container d-flex justify-content-center justify-content-md-between">

        <div class="contact-info d-flex align-items-center">

            @if ($contactTypes)

                @foreach ($contactTypes as $contactType)

                    <i
                        class="bi bi-{{ $contactType->icon->class }} d-flex align-items-center {{ $loop->last ? 'ms-4' : '' }}">

                        <span>{{ $contactType->contacts[0]->value }}</span>

                    </i>

                @endforeach

            @endif

        </div>

        <div class="social-links d-none d-md-flex align-items-center">

            @foreach ($linkTypes as $linkType)

                <!-- TODO: navigations links -->
                <a href="{{ $linkType->links[0]->url ?? '#' }}" class="{{ $linkType->icon->class }}">

                    <i class="bi bi-{{ $linkType->icon->class }}"></i>

                </a>

            @endforeach

        </div>

    </div>

</section> --}}


  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>
