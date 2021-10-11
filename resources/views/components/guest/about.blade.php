<section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">
        <!-- TODO: indent code -->
        @if ($description)

            <div class="section-title">

                <h2>{{ $description->descriptionable->name }}</h2>

                <h3>Find Out More <span>{{ $description->descriptionable->title }}</span></h3>

                <p>{{ $description->descriptionable->description }}</p>

            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ asset('storage').'/'. $media->link }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="100">
                    <h3>{{ $description->title }}</h3>
                    <p class="fst-italic">{{ $description->subtitle }}</p>
                    <ul>
                        @if ($items)

                            @foreach ($items as $item)

                            <li>
                                <i class="bx {{ $item->iconableItem->icon->is_extended ? 'bxl-' : 'bx-' }}{{ $item->iconableItem->icon->class }}"></i>
                                <div>
                                    <h5>{{ $item->iconableItem->title }}</h5>
                                    <p>{{ $item->iconableItem->value }}</p>
                                </div>
                            </li>

                            @endforeach

                        @endif


                    </ul>
                    <p>
                        {{ $description->content }}
                    </p>
                </div>
            </div>

        @endif

    </div>
</section><!-- End About Section -->
