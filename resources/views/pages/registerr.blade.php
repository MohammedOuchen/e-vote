

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/home.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/register.css') }}" />
    <title>register page</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


</head>

<body>
    <header>
        <img src="">
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

    <div class="register-wrap">
        <div class="register-html">
        
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
                    class="tab">S'INSCRIRE</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
                <div class="register-form">
                    <div class="sign-in-htm">
                    <form>
                        <div class="form-group">

                            <div class="group">
                                <label for="voterPrenom" class="voterPrenom">Prénom</label>
                                <input id="voterPrenom" type="text" class="input">
                            </div>

                            <div class="group">
                                <label for="voter" class="voterNom">Nom</label>
                                <input id="voterNom" type="text" class="input">
                            </div>

                            <div class="group">
                                <label for="voterCIN" class="voterCIN">N° de carte national</label>
                                <input id="voterCIN" type="text" class="input">
                            </div>

                            <div class="group">
                                <label for="voterDN" class="voterDN">Date de naissance</label>
                                <input id="voterDN" type="text" class="input">
                            </div>

                            <div class="group">
                                <label for="votermail" class="voterDN">Email</label>
                                <input id="email" type="email" class="input">
                            </div>

                                <div class="group">
                                    <label for="passMP" class="passMP">Mot de passe</label>
                                    <input id="passMP" type="password" class="input" data-type="password">
                                </div>

                                <div class="group">
                                    <label for="userCMP" class="userCMP">Confirmer Mot de passe</label>
                                    <input id="userCMP" type="text" class="input">
                                </div>

                            <div class="group">
                                <input type="submit" class="button" value="S'INSCRIRE'">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">

</script>

</html>