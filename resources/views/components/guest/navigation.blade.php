<header id="header" class="d-flex align-items-center">

    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="/">{{ $corporation->name }}<span>.</span></a></h1>

        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="/" class="logo"><img src="{{ asset('storage').'/'. $linkType->logos[0]->link }}" alt=""></a> --}}

        <nav id="navbar" class="navbar">

            <ul>

                <li>

                    <a class="nav-link scrollto {{ request()->route()->named('home') ? 'active' : ''}}" href="{{  request()->route()->named('home') ? '#hero' : route('home') }}">{{ __('Home') }}</a>

                </li>

                <li>

                    <a class="nav-link scrollto {{ request()->route()->named('about') ? 'active' : ''}}" href="{{  request()->route()->named('home') ? '#about' : route('about') }}">{{ __('About') }}</a>

                </li>

                <li>

                    <a class="nav-link scrollto {{ request()->route()->named('service') ? 'active' : ''}}" href="{{  request()->route()->named('home') ? '#services' : route('service') }}">{{ __('Services') }}</a>

                </li>

                <li>

                    <a class="nav-link scrollto {{ request()->route()->named('portfolio') ? 'active' : ''}}" href="{{  request()->route()->named('home') ? '#portfolio' : route('portfolio') }}">{{ __('Portfolio') }}</a>

                </li>

                <li>

                    <a class="nav-link scrollto {{ request()->route()->named('team') ? 'active' : ''}}" href="{{  request()->route()->named('home') ? '#team' : route('team') }}">{{ __('Team') }}</a>

                </li>

                <li>

                    <a class="nav-link scrollto {{ request()->route()->named('faq') ? 'active' : ''}}" href="{{  request()->route()->named('home') ? '#faq' : route('faq') }}">{{ __('F.A.Q') }}</a>

                </li>

                @if (request()->route()->named('privacy_policy'))

                <li>

                    <a class="nav-link scrollto {{ request()->route()->named('privacy_policy') ? 'active' : ''}}" href="{{ route('privacy_policy') }}">{{ __('Privacy & Policy') }}</a>

                </li>

                @endif

                <li>

                    <a class="nav-link scrollto {{ request()->route()->named('contact') ? 'active' : ''}}" href="{{  request()->route()->named('home') ? '#contact' : route('contact') }}">{{ __('Contact') }}</a>

                </li>


            </ul>

            <i class="bi bi-list mobile-nav-toggle"></i>

        </nav>

    </div>

</header>
