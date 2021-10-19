@if ($services)

    <x-guest.layout>

        <x-guest.main>

            <section id="services" class="services">

                <div class="container" data-aos="fade-up">

                    <div class="row">

                        @foreach ($services as $service)

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                                data-aos-delay="100">

                                <div class="icon-box">

                                    <div class="icon">
                                        <i
                                            class="bx {{ $service->iconableItem->icon->is_extended ? 'bxl-' : 'bx-' }}{{ $service->iconableItem->icon->class }}"></i>

                                    </div>

                                    <h4><a href="">{{ $service->iconableItem->title }}</a></h4>

                                    <p>{{ $service->iconableItem->value }}</p>

                                </div>

                            </div>

                        @endforeach

                    </div>
                    
                </div>

            </section>

        </x-guest.main>

    </x-guest.layout>

@endif
