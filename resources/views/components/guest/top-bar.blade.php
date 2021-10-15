<section id="topbar" class="d-flex align-items-center">

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

</section>
