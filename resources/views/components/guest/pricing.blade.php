{{-- <section id="pricing" class="pricing">

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

                        <div class="box {{ $pricing->is_featured ? 'featured' : '' }}">

                            @if ($pricing->is_advanced)

                                <span class="advanced">Advanced</span>

                            @endif

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

</section> --}}

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Pricing</h2>
            <h3>Check our <span>Pricing</span></h3>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
          </div>

          <div class="row">

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="box">
                <h3>Free</h3>
                <h4><sup>$</sup>0<span> / month</span></h4>
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li class="na">Pharetra massa</li>
                  <li class="na">Massa ultricies mi</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
              <div class="box featured">
                <h3>Business</h3>
                <h4><sup>$</sup>19<span> / month</span></h4>
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li>Pharetra massa</li>
                  <li class="na">Massa ultricies mi</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
              <div class="box">
                <h3>Developer</h3>
                <h4><sup>$</sup>29<span> / month</span></h4>
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li>Pharetra massa</li>
                  <li>Massa ultricies mi</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
              <div class="box">
                <span class="advanced">Advanced</span>
                <h3>Ultimate</h3>
                <h4><sup>$</sup>49<span> / month</span></h4>
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li>Pharetra massa</li>
                  <li>Massa ultricies mi</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Pricing Section -->

