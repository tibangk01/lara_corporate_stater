<!-- ======= Top Bar ======= -->

<section id="topbar" class="d-flex align-items-center">

    <div class="container d-flex justify-content-center justify-content-md-between">

        <div class="contact-info d-flex align-items-center">

            @foreach ($siteSettings as $siteSetting)

                @foreach ($siteSetting->contacts as $contact)

                    @php

                        $contactType = $contact->load('contactType.socialIcon');

                    @endphp

                    <i class="bi bi-{{ $contact->contactType->socialIcon->class }} d-flex align-items-center {{ $loop->last ? 'ms-4' : '' }}">

                        <span>{{ $contact->value }}</span>

                    </i>

                @endforeach

            @endforeach

        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>
    </div>
</section>
