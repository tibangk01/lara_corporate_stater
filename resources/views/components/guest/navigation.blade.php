<header id="header" class="d-flex align-items-center">

    <div class="container d-flex align-items-center justify-content-between">

        <!-- TODO:brand, logo images, indent code -->
        <h1 class="logo"><a href="/">{{ $corporation->name }}<span>.</span></a></h1>

        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="/" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

        <nav id="navbar" class="navbar">

            <ul>

                <li>

                    <a class="nav-link scrollto active" href="#hero">{{ __('Home') }}</a>

                </li>

                <li>

                    <a class="nav-link scrollto" href="#about">{{ __('About') }}</a>

                </li>

                <li>

                    <a class="nav-link scrollto" href="#services">{{ __('Services') }}</a>

                </li>

                <li>

                    <a class="nav-link scrollto " href="#portfolio">{{ __('Portfolio') }}</a>

                </li>

                <li>

                    <a class="nav-link scrollto" href="#team">{{ __('Team') }}</a>

                </li>

                <li>

                    <a class="nav-link scrollto" href="#faq">{{ __('F.A.Q') }}</a>

                </li>

                <li>

                    <a class="nav-link scrollto" href="#contact">{{ __('Contact') }}</a>

                </li>

            </ul>

            <i class="bi bi-list mobile-nav-toggle"></i>

        </nav><!-- .navbar -->

    </div>

</header><!-- End Header -->
