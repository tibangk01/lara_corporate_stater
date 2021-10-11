<section id="counts" class="counts">

    <div class="container" data-aos="fade-up">

        <div class="row">

            @if ($counts)

                @foreach ($counts as $count)

                    <div class="col-lg-3 col-md-6">

                        <div class="count-box">

                            <i class="bi bi-{{ $count->iconableItem->icon->class }}"></i>

                            <span data-purecounter-start="0" data-purecounter-end="{{ $count->iconableItem->value }}" data-purecounter-duration="1" class="purecounter"></span>

                            <p>{{ $count->iconableItem->title }}</p>

                        </div>

                    </div>

                @endforeach

            @endif

        </div>

    </div>

</section>
