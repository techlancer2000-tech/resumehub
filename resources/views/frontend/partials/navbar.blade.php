<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">

        <a class="navbar-brand" href="/">
            <img src="{{ asset('theme/images/logo/RH_LOGO.png') }}" width="200" height="55" />
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link" href="#features">Features</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#templates">Templates</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#pricing">Pricing</a>
                </li>

                @auth

                    <li class="nav-item ms-lg-3">
                        <a href="{{ auth()->user()->isAdmin() ? route('admin.dashboard') : route('user.dashboard') }}"
                           class="btn btn-primary rounded-pill px-4">
                            Dashboard
                        </a>
                    </li>

                @else

                    <li class="nav-item ms-lg-3">
                        <a href="{{ route('login') }}" class="btn btn-outline-primary rounded-pill">
                            Login
                        </a>
                    </li>

                    <li class="nav-item ms-lg-2">
                        <a href="{{ route('register') }}" class="btn btn-primary rounded-pill px-4">
                            Get Started
                        </a>
                    </li>

                @endauth

            </ul>
        </div>
    </div>
</nav>