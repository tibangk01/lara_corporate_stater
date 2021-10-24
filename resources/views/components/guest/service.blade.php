@if ($section)

    <section id="services" class="services">
        <!-- TODO : cards behavior + mt null for first 3 items-->
        <div class="container" data-aos="fade-up">

            <div class="section-title">

                <h2>{{ $section->name }}</h2>

                <h3>Check our <span> <a href="{{ route('service') }}">{{ $section->title }}</a></span></h3>

                <p>{{ $section->description }}</p>

            </div>

            <div class="row">

                @if ($section->items)

                    @foreach ($section->items as $item)

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                            data-aos-delay="200">

                            <div class="icon-box">

                                <div class="icon">
                                    <i
                                        class="bx {{ $item->iconableItem->icon->is_extended ? 'bxl-' : 'bx-' }}{{ $item->iconableItem->icon->class }}"></i>

                                </div>

                                <h4><a href="{{ route('service', ['id' => $item->iconableItem->service->id]) }}">{{ $item->iconableItem->title }}</a></h4>

                                <p>{{ $item->iconableItem->value }}</p>

                            </div>

                        </div>

                    @endforeach

                @endif

            </div>

        </div>

    </section>

@endif
