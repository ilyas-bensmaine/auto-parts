@section('navbar')
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link"
                        href="{{ route('login', ['language'=>app()->getLocale()]) }}">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link"
                        href="{{ route('register', ['language'=>app()->getLocale()]) }}">{{ __('Register') }}</a>
                </li>
                @endif

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> <i
                            class="fa fa-language" style="padding-right: 10%"></i>
                        {{ strtoupper(App::getLocale()) }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


                        @if (count(Route::current()->parameters()) <= 1 ) <a
                            href="{{ route(Route::currentRouteName(), 'ar') }}" class="dropdown-item">Arabe</a>
                            <a href="{{ route(Route::currentRouteName(), 'fr') }}"
                                class="dropdown-item">Français</a>
                            @else
                            @php
                            echo '<a
                                href="{{ route(Route::currentRouteName(), '.json_encode(Route::current()->parameters).') }}"
                                class="dropdown-item">Arabe</a>';
                            echo '<a
                                href="{{ route(Route::currentRouteName(), '.json_encode(Route::current()->parameters).') }}"
                                class="dropdown-item">Français</a>';
                            @endphp
                            @endif
                    </div>
                </li>

                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout', ['language'=>app()->getLocale()]) }}"
                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout', ['language'=>app()->getLocale()]) }}"
                            method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
@endsection