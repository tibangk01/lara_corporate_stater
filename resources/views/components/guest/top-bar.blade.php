<section id="topbar" class="d-flex align-items-center">

    <div class="container d-flex justify-content-center justify-content-md-between">

        <div class="contact-info d-flex align-items-center">

            @foreach ($contacts as $contact)

                <i class="bi bi-{{ $contact->contactType->icon->class }} d-flex align-items-center {{ $loop->last ? 'ms-4' : '' }}">

                    <span>{{ $contact->value }}</span>

                </i>

            @endforeach

        </div>

        <div class="social-links d-none d-md-flex align-items-center">

            @foreach ($sociaLinks as $sociaLink)

                <!-- TODO:return one random element of array -->
                <!-- TODO: navigations links -->
                <a href="{{ $sociaLink->url ?? '#' }}" class="{{ $sociaLink->linkType->icon->class }}">

                    <i class="bi bi-{{ $sociaLink->linkType->icon->class  }}"></i>

                </a>

            @endforeach

        </div>

    </div>

</section>
