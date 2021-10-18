<section class="breadcrumbs">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center">

            <h2>{{ $pageTitle }} Details</h2>

            <ol>

                <li><a href="{{ route('home') }}">Home</a></li>

                <li>

                    <a href="{{ route(request()->route()->getName()) }}">
                        {{ $pageTitle }}
                    </a>

                </li>

                <li>{{ $pageTitle }} Details</li>

            </ol>

        </div>

    </div>

</section>
