<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Mon application</title>
    </head>

    <body>
        <header>
            Soundclound ça déchire
        </header>

        <audio id="audio" controls>
        </audio>
        <nav>
            <li> <a href="/"> Home</a></li>
            <li> <a href="/about"> About </a></li>
            <li> <a href="/article/1"> Article 1 </a></li>
        </nav>
        @guest
            <li>
                <a href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li>
                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li> <a href="/chanson/nouvelle"> Nouvelle chanson </a></li>
            <li>
                <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div aria-labelledby="navbarDropdown">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>

        @endguest
        <div id="main">
            @yield('contenu')
        </div>
        <footer> Le pied de la page </footer>
    </body>
        <script src="/js/jquery.js"></script>
        <script src="/js/divers.js"></script>
</html>
