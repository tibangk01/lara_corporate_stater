<div>
    <i class="bx bxl-world"></i>
</div>
<section id="featured-services" class="featured-services">

    <div class="container" data-aos="fade-up">

        <div class="row">

            @if ($services)

                @foreach ($services as $service)

                    <!-- TODO: fix icons for services later -->
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">

                        <div class="icon-box">

                            <div class="icon">

                                <i class="bx {{ $service->iconableItem->icon->is_extended ? 'bxl-' : 'bx-' }}{{ $service->iconableItem->icon->class }}"></i>

                            </div>

                            <h4 class="title">

                                <a href="{{ route('service', ['id' => $service->id]) }}">{{ __($service->iconableItem->title) }}</a>

                            </h4>

                            <p class="description">{{ __($service->iconableItem->value) }}</p>

                        </div>

                    </div>

                @endforeach

            @endif

        </div>

    </div>

</section>
