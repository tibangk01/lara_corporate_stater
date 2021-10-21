{{-- @if ($section)

    <section id="about" class="about section-bg">

        <div class="container" data-aos="fade-up">

            <div class="section-title">

                <h2>{{ $section->title }}</h2>

                <h3>Find Out More <span><a href="{{ route('about') }}">{{ $section->title }}</a></span></h3>

                <p>{{ $section->description }}</p>

            </div>

            <div class="row">

                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">

                    <img src="{{ asset('storage') . '/' . $section->media->link }}" class="img-fluid" alt="">

                </div>

                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="100">

                    <h3>{{ $section->descriptionable->title }}</h3>

                    <p class="fst-italic">{{ $section->descriptionable->subtitle }}</p>

                    <ul>

                        @forelse ($section->items as $item)

                            <li>

                                <i
                                    class="bx {{ $item->iconableItem->icon->is_extended ? 'bxl-' : 'bx-' }}{{ $item->iconableItem->icon->class }}"></i>

                                <div>

                                    <h5>{{ $item->iconableItem->title }}</h5>

                                    <p>{{ $item->iconableItem->value }}</p>

                                </div>

                            </li>

                        @empty

                            <li>

                                <i class="bx"></i>

                                <div>No item :(</div>

                            </li>

                        @endforelse

                    </ul>

                    <p>

                        {{ $section->descriptionable->content }}

                    </p>

                </div>

            </div>

        </div>

    </section>

@endif --}}


    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>About</h2>
            <h3>Find Out More <span>About Us</span></h3>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
          </div>

          <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
              <img src="{{ asset('img/about.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li>
                  <i class="bx bx-store-alt"></i>
                  <div>
                    <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                    <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                  </div>
                </li>
                <li>
                  <i class="bx bx-images"></i>
                  <div>
                    <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                    <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                  </div>
                </li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
            </div>
          </div>

        </div>
      </section><!-- End About Section -->
