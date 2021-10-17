@if ($humanType && $mediaCategory)

    <section id="testimonials" class="testimonials"
        style="background: url({{ asset('storage') . '/' . $mediaCategory->media[0]->link }})">

        <div class="container" data-aos="zoom-in">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper-wrapper">

                    @foreach ($humanType->humans as $human)

                        <div class="swiper-slide">

                            <div class="testimonial-item">

                                <img src="{{ asset('storage') . '/' . $human->officials[0]->clients[0]->avatar }}"
                                    class="testimonial-img" alt="">

                                <h3>{{ $human->full_name }}</h3>

                                <h4>{{ $human->officials[0]->work->name }}</h4>

                                <p>

                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                                    {{ $human->officials[0]->clients[0]->message }}

                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>

                                </p>

                            </div>

                        </div>

                    @endforeach

                </div>

                <div class="swiper-pagination"></div>

            </div>

    </section>

@endif
