<section id="clients" class="clients section-bg">

    <div class="container" data-aos="zoom-in">

        <div class="row">

            @if ($enterprises)

                @foreach ($enterprises as $enterprise)

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">

                        <img src="{{ asset('storage').'/'.$enterprise->logo->link }}" class="img-fluid" alt="{{ $enterprise->name }}">

                    </div>

                @endforeach

            @endif

        </div>

    </div>
    
</section>
