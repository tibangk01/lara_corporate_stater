 <!-- ======= Hero Section ======= -->
 <section id="hero" style="background: url({{ asset('storage').'/'.$media->link }})" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>{{ __('Welcome to') }} <span>{{ $media->mediaable->name }}</span></h1>
      <h2>{{ __($media->mediaable->slogan) }}</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">{{ __('Get Started') }}</a>
        <a href="{{ $link->url ?? '#' }}" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section><!-- End Hero -->
