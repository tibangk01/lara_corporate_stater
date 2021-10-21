{{-- @if ($section)

    <section id="portfolio" class="portfolio">

        <div class="container" data-aos="fade-up">

            <div class="section-title">

                <h2>{{ $section->name }}</h2>

                <h3>{{ __('Check our') }} <span>{{ $section->title }}</span></h3>

                <p>{{ $section->description }}</p>

            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-12 d-flex justify-content-center">

                    <ul id="portfolio-flters">

                        <li data-filter="*" class="filter-active">All</li>

                        @foreach ($projectCategories as $projectCategory)

                            <li data-filter=".filter-{{ Str::lower($projectCategory->name) }}">
                                {{ $projectCategory->name }}</li>

                        @endforeach

                    </ul>

                </div>

            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @foreach ($section->items as $item)

                    @foreach ($item->projects as $project)

                        <div
                            class="col-lg-4 col-md-6 portfolio-item filter-{{ Str::lower($project->projectCategory->name) }}">
                            <img src="{{ asset('storage') . '/' . $project->medias[0]->link }}" class="img-fluid"
                                alt="img">

                            <div class="portfolio-info">

                                <h4>{{ Str::ucfirst($project->name) }}</h4>

                                <p>{{ $project->projectCategory->name }}</p>

                                <a href="{{ asset('storage') . '/' . $project->medias[0]->link }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                    title="{{ Str::ucfirst($project->name) }}"><i class="bx bx-plus"></i></a>

                                <a href="{{ route('portfolio', ['id' => $project->id]) }}" class="details-link"
                                    title="More Details"><i class="bx bx-link"></i></a>

                            </div>

                        </div>

                    @endforeach

                @endforeach

            </div>

        </div>

    </section>

@endif --}}


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Portfolio</h2>
            <h3>Check our <span>Portfolio</span></h3>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="{{ asset('img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <a href="{{ asset('img/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Portfolio Section -->

