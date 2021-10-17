@if ($enterprises)

    <section id="clients" class="clients section-bg">

        <div class="container" data-aos="zoom-in">

            <div class="row">

                @foreach ($enterprises as $enterprise)

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">

                        <img src="{{ asset('storage') . '/' . $enterprise->logo->link }}" class="img-fluid" alt="img">

                    </div>

                @endforeach

            </div>

        </div>

    </section>

@endif
