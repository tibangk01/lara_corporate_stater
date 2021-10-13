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

            @if ($contacts)

                @foreach ($contacts as $contact)

                    <div class="col-lg-{{ $contact->contactType->name == 'Address' ? '6' : '3' }}">

                        <div class="info-box mb-4">

                            <i
                                class="bx {{ $contact->iconableItem->icon->is_extended ? 'bxl-' : 'bx-' }}{{ $contact->iconableItem->icon->class }}"></i>

                            <h3>{{ $contact->iconableItem->title }}</h3>

                            <p>{{ $contact->iconableItem->value }}</p>

                        </div>

                    </div>

                @endforeach

            @endif

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-6 ">
                <iframe class="mb-4 mb-lg-0" src="{{ $link->url ?? 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621' }}" frameborder="0"
                    style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>

            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    {{-- <div class="row">
                        <div class="col form-group">
                        </div>
                    </div> --}}
                    <div class="row">

                        <div class="col form-group">

                            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Your First Name" required>

                        </div>

                        <div class="col form-group">

                            <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Your Last Name" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <div class="col form-group">

                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>

                        </div>

                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"
                            required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section>
