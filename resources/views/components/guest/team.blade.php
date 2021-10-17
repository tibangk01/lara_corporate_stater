@if ($section)

    <section id="team" class="team section-bg">

        <div class="container" data-aos="fade-up">

            <div class="section-title">

                <h2>{{ $section->title }}</h2>


                <h3>{{ __('Our Hardworking') }} <span>{{ $section->name }}</span></h3>

                <p>{{ $section->description }}</p>

            </div>

            <div class="row">

                @foreach ($section->items as $item)

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">

                        <div class="member">

                            <div class="member-img">
                                <img src="{{ asset('storage') . '/' . $item->employee->profile }}" class="img-fluid"
                                    alt="profile">

                                <div class="social">
                                    @foreach ($item->employee->official->human->links as $link)

                                        <a href="{{ $link->url }}"><i
                                                class="bi bi-{{ $link->linkType->icon->class }}"></i></a>

                                    @endforeach
                                </div>

                            </div>

                            <div class="member-info">
                                <h4>{{ $item->employee->official->human->full_name }}</h4>
                                <span>{{ $item->employee->official->work->name }}</span>
                            </div>
                        </div>

                    </div>

                @endforeach


            </div>

        </div>
    </section>

@endif
