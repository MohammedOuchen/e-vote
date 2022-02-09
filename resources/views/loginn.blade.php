<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/home.css') }}" />
    <title>Login page</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
    body {
        margin: 0;
        color: #6a6f8c;
        background: white;
        font: 600 16px/18px 'Open Sans', sans-serif;
    }

    *,
    :after,
    :before {
        box-sizing: border-box
    }

    .clearfix:after,
    .clearfix:before {
        content: '';
        display: table
    }

    .clearfix:after {
        clear: both;
        display: block
    }

    a {
        color: inherit;
        text-decoration: none
    }

    .login-wrap {
        width: 50%;
        margin: auto;
        margin-top: 100px;
        margin-right: 50px;
        margin-left: 650px;
        max-width: 525px;
        min-height: 570px;
        position: absolute;
        box-shadow: #0E115A;
        z-index: 0;
        margin-bottom: 20px;
    }

    .login-html {
        width: 100%;
        height: 100%;
        position: absolute;
        padding: 90px 70px 50px 70px;
        background: #0E115A;
        border-radius: 20px;
    }

    .login-html .sign-in,
    .login-html .sign-up,
    .login-form .group .check {
        display: none;
    }

    .login-html .tab,
    .login-form .group .label,
    .login-form .group .button {
        text-transform: uppercase;
        margin: 5px 5px 5px 5px;
    }

    .login-html .tab {
        font-size: 22px;
        margin-right: 15px;
        padding-bottom: 5px;
        margin: 0 15px 10px 0;
        display: inline-block;

    }

    .login-html .sign-in:checked+.tab,
    .login-html .sign-up:checked+.tab {
        color: #fff;
        border-color: #1161ee;
        margin-left: 100px;
        font-size: 30px;
    }

    .login-form .group {
        margin-top: 45px;
        margin-bottom: 25px;
    }

    .login-form .group .label,
    .login-form .group .input,
    .login-form .group .button {
        width: 100%;
        color: #fff;
        display: block;
        margin: 5px 5px 5px 5px;
    }

    .login-form .group .input,
    .login-form .group {
        padding: 8px;
        padding-left: 10px;
        border-radius: 20px;
        background: #0E115A;
        border-color: white;

    }

    .login-form .group input[data-type="password"] {
        text-security: circle;
        -webkit-text-security: circle;
    }

    .login-form .group .label {
        color: white;
        font-size: 12px;
        margin: 5px 5px 5px 5px;
    }

    .login-form .group .button {
        background: #DD131A;
    }

    .hr {
        height: 2px;
        margin: 20px 0 10px 0;
        background: #DD131A;
    }

    .foot-lnk {
        text-align: center;
        color: white;
        font-size: 12px;
        margin-left: 240px;
        margin-top: -20px;
    }

    .registred {
        text-align: center;
        color: white;
        font-size: 12px;
        margin-top: -30px;
    }

    .button {
        padding: 10px 5px;
        border-radius: 20px;
        border-color: #DD131A;
    }

    #circle {
        background: #f00;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        margin-top: 70px;
        margin-left: 880px;
        z-index: 1;
        position: absolute;
    }
    </style>

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

    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
                class="tab">CONNEXION</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
            <div class="login-form">
                <div class="sign-in-htm">

                    <div class="group">
                        <label for="user" class="label">N° de carte national</label>
                        <input id="user" type="text" class="input">
                    </div>

                    <div class="group">
                        <label for="pass" class="label">Mot de passe</label>
                        <input id="pass" type="password" class="input" data-type="password">
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
        </div>
    </div>
</body>
<script type="text/javascript">

</script>

</html>