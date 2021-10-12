<section id="pricing" class="pricing">

    <div class="container" data-aos="fade-up">

        <div class="section-title">

            <h2>{{ $sitePage->section->name }}</h2>

            <h3>{{ __('Check our') }} <span>{{ $sitePage->section->title }}</span></h3>

            <p>{{ $sitePage->section->description }}</p>

        </div>

        <div class="row">

            @if ($pricings)

                @foreach ($pricings as $pricing)

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">

                        <div class="box">

                            <h3>{{ $pricing->title }}</h3>

                            <h4><sup>{{ $pricing->currency->name }}</sup>{{ $pricing->month_price }}<span> / month</span></h4>

                            <ul>

                                @foreach ($pricing->features as $feature)

                                    <li class="{{ $feature->pivot->is_active ? '' : 'na' }}">{{ $feature->content }}</li>

                                @endforeach

                            </ul>

                            <div class="btn-wrap">

                                <a href="#contact" class="btn-buy">{{ __('Buy Now') }}</a>

                            </div>

                        </div>

                    </div>

                @endforeach

            @endif

        </div>

    </div>

</section>
