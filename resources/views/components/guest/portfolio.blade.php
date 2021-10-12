<section id="portfolio" class="portfolio">

    <div class="container" data-aos="fade-up">

        <div class="section-title">

            <h2>{{ $section->name }}</h2>

            <h3>{{ __('Check our') }} <span>{{ $section->title }}</span></h3>

            <p>{{ $section->description }}</p>

        </div>

        @if ($projectCategories)

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-12 d-flex justify-content-center">

                    <ul id="portfolio-flters">

                        <li data-filter="*" class="filter-active">All</li>

                        @foreach ($projectCategories as $projectCategoy)

                            <li data-filter=".filter-{{ strtolower($projectCategoy->name) }}">{{ $projectCategoy->name }}</li>

                        @endforeach

                    </ul>

                </div>

            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @if ($projects)

                    @foreach ($projects as $project)

                        <div class="col-lg-4 col-md-6 portfolio-item filter-{{ strtolower($project->projectCategory->name) }}">

                            <img src="{{ asset('storage') . '/' . $project->media->link }}" class="img-fluid" alt="img">

                            <div class="portfolio-info">

                                <h4>{{ $project->description->title }}</h4>

                                <p>{{ $project->projectCategory->name }}</p>

                                <a href="{{ asset('storage') . '/' . $project->media->link }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $project->description->title }}"><i class="bx bx-plus"></i></a>

                                <a href="{{ route('portfolio') }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>

                            </div>

                        </div>

                    @endforeach

                @endif

            </div>

        @endif

    </div>

</section>
