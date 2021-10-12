<section id="testimonials" class="testimonials">

    <div class="container" data-aos="zoom-in">
<!-- TODO: testimonial bg image -->
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper-wrapper">

                @if ($buyers)

                @foreach ($buyers as $buyer)
                <div class="swiper-slide">

                            <div class="testimonial-item">

                                <img src="{{ asset('storage').'/'.$buyer->avatar }}" class="testimonial-img" alt="avatar">

                                <h3>{{ $buyer->human->full_name }}</h3>

                                <h4>{{ $buyer->human->work->name }}</h4>

                                <p>

                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                                    {{ $buyer->message }}

                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>

                                </p>

                            </div>

                        </div>
                        @endforeach

                    @endif
                    <!-- TODO: indent code -->

                </div>
                <div class="swiper-pagination"></div>

        </div>

</section>
