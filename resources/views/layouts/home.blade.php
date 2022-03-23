<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/home.css') }}" />



</head>

<body>
    <header>
    <a href="{{ route('homee') }}"><img  class="logoImg" src="{{ asset('Pictures/logo.png') }}" width="200" height="100"></a>
        <nav>
            <ul class="linksnav">
                <li><a href="{{ route('home') }}">Acceuil</a></li>
                <li><a href="https://www.service-public.fr/particuliers/vosdroits/N47">Actualité</a></li>
                @auth
                   <li>
                    <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Se Déconnecter
                    </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                    </form>
                @endauth
                @guest
                <li><a href="{{ route('login') }}">Se Connecter</a></li>
                @endguest

            </ul>
        </nav>
    </header>



    <main class="py-4">

        @yield('content')
    </main>
    </div>
</body>

</html>
