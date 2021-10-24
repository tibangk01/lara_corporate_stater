@isset($section)

    <section id="faq" class="faq section-bg">

        <div class="container" data-aos="fade-up">

            <div class="section-title">

                <h2>{{ $section->name }}</h2>

                <h3>Frequently Asked <span><a href="{{ route('faq') }}">{{ $section->title }}</a></span></h3>

                <p>{{ $section->description }}</p>

            </div>

            <div class="row justify-content-center">

                <div class="col-xl-10">

                    <ul class="faq-list">

                        @forelse ($section->items as $item)

                            <li>
                                <div data-bs-toggle="collapse" class="collapsed question" href="#faq{{ $item->faq->id }}">

                                    {{ $item->faq->description->title }}<i class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i>
                                </div>
                                <div id="faq{{ $item->faq->id }}" class="collapse" data-bs-parent=".faq-list">

                                    <p>
                                        {{ $item->faq->description->content }}

                                        <br>
                                        <a class="btn btn-sm btn-secondary rounded-0"
                                            href="{{ route('faq', ['id' => $item->faq->id]) }}">Read more ...</a>

                                    </p>

                                </div>

                            </li>

                        @empty

                            No item yet.

                        @endforelse

                    </ul>

                </div>

            </div>

        </div>

    </section>

@endisset
