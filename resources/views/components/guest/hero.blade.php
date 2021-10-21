 {{-- <!-- ======= Hero Section ======= -->
 <section id="hero" style="background: url({{ asset('storage').'/'.$media->link }})" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>{{ __('Welcome to') }} <span>{{ $media->mediaable->name }}</span></h1>
      <h2>{{ __($media->mediaable->slogan) }}</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">{{ __('Get Started') }}</a>
        <a href="{{ $link->url ?? '#' }}" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section><!-- End Hero --> --}}

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>BizLand</span></h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section><!-- End Hero -->
