<section id="faq" class="faq section-bg">

    <div class="container" data-aos="fade-up">

        @if ($sitePage)

        <div class="section-title">

            <h2>{{ $sitePage->section->name }}</h2>

            <h3>{{ __('Frequently Asked') }} <span> <a href="{{ route('faq') }}">{{ $sitePage->section->title }}</a></span></h3>

            <p>{{ $sitePage->section->description }}</p>

        </div>

        @endif

        <div class="row justify-content-center">

            @if ($faqs)

            @foreach ($faqs as $faq)

            <div class="col-xl-10">

                <ul class="faq-list">

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#{{ Str::slug($faq->slugable) }}">{{ $faq->description->title }}<i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="{{ Str::slug($faq->slugable) }}" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                {{ $faq->description->content }}
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

            @endforeach

            @endif
        </div>

    </div>

</section>
