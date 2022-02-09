<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/home.css') }}" />
    <title>Login page</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css') }}" />
    

</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Acceuil</a></li>
                <li><a href="#">Actualité</a></li>
                <li><a href="#">Se Connecter</a></li>
            </ul>
        </nav>
    </header>

    <div id="circle"></div>
    <div id="rectangleB"></div>
    <div id="rectangleW"></div>
    <div id="rectangleR"></div>

    <div class=" login-wrap" style="scroll-behavior: auto;">
        <div class="login-html">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
                        class="tab">CONNEXION</label>
                    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
                    <div class="login-form">
                        <div class="sign-in-htm">

                            <div class="group">
                                <label for="user" class="label">Email</label>
                                <input id="email" type="email" class="input">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                            </div>

                            <div class="group">
                                <label for="pass" class="label">Mot de passe</label>
                                <input id="password" type="password" class="input" data-type="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="foot-lnk">
                                <a href="#forgot">Mot de passe oublié ?</a>
                            </div>

                            <div class="hr"></div>

                            <div class="group">
                                <input type="submit" class="button" value="Se connecter">
                            </div>

                            <div class="registred">
                                <a href="#registred">Déja inscrit ?</a>
                            </div>
                        </div>
                    </div>
        </form>
        </div>
    </div>
</body>
<script type="text/javascript">

</script>

</html>
