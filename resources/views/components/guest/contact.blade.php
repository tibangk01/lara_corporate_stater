<section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

        <div class="section-title">

            @if ($sitePage)

                <h2>{{ $sitePage->section->name }}</h2>

                <h3><span>{{ $sitePage->section->title }}</span></h3>

                <p>{{ $sitePage->section->description }}</p>

            @endif

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

            @if ($contactTypes)

                @foreach ($contactTypes as $contactType)

                    <div class="col-lg-{{ $contactType->name == 'Address' ? '6' : '3' }}">

                        <div class="info-box mb-4">

                            <i
                                class="bx {{ $contactType->icon->is_extended ? 'bxl-' : 'bx-' }}{{ $contactType->icon->class }}"></i>

                            <h3>{{ $contactType->contacts[0]->description->title }}</h3>

                            <p>{{ $contactType->contacts[0]->value }}</p>

                        </div>

                    </div>

                @endforeach

            @endif

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-6 ">
                <iframe class="mb-4 mb-lg-0" src="{{ $linkType->links[0]->url ?? 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621' }}" frameborder="0"
                    style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>

            <x-guest.form.visitor-request/>

        </div>

    </div>
</section>
