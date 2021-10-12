<section id="team" class="team section-bg">

    <div class="container" data-aos="fade-up">

        <div class="section-title">

            <h2>{{ $sitePage->section->title }}</h2>


            <h3>{{ __('Our Hardworking') }} <span>{{ $sitePage->section->name }}</span></h3>

            <p>{{  $sitePage->section->description}}</p>

        </div>

        <div class="row">


            @if ($employees)

            @foreach ($employees as $employee)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">

                <div class="member">

                    <div class="member-img">
                        <img src="{{ asset('storage').'/'.$employee->profile }}" class="img-fluid" alt="profile">

                        @if ($employee->human->links)

                        <div class="social">
                        @foreach ($employee->human->links as $link)

                            <a href="{{ $link->url }}"><i class="bi bi-{{ $link->linkType->icon->class }}"></i></a>
                            @endforeach

                        </div>
                            @endif
                    </div>

                    <div class="member-info">
                        <h4>{{ $employee->human->full_name }}</h4>
                        <span>{{ $employee->human->work->name }}</span>
                    </div>
                </div>

            </div>
                @endforeach

                @endif


        </div>

    </div>
</section>
