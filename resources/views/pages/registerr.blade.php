<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/home.css') }}" />
    <title>register page</title>

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

    .register-wrap {
        width: 50%;
        margin: auto;
        margin-top: 100px;
        margin-right: 50px;
        margin-left: 650px;
        max-width: 525px;
        min-height: 700px;
        position: absolute;
        box-shadow: #0E115A;
        z-index: 0;
        margin-bottom: 20px;
    }

    .register-html {
        width: 100%;
        height: 100%;
        position: absolute;
        padding: 90px 70px 50px 70px;
        background: #0E115A;
        border-radius: 20px;
    }

    .register-html .sign-in,
    .register-html .sign-up,
    .register-form .group .check {
        display: none;
    }

    .register-html .tab,
    .register-form .group .label,
    .register-form .group .button {
        text-transform: uppercase;
        margin: 5px 5px 5px 5px;
    }

    .register-html .tab {
        font-size: 22px;
        margin-right: 15px;
        padding-bottom: 5px;
        margin: 0 15px 10px 0;
        display: inline-block;

    }

    .register-html .sign-in:checked+.tab,
    .register-html .sign-up:checked+.tab {
        color: #fff;
        border-color: #1161ee;
        margin-left: 100px;
        font-size: 30px;
    }

    .register-form .group {
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .register-form .group .label,
    .register-form .group .input,
    .register-form .group .button {
        width: 100%;
        color: #fff;
        display: block;
        margin: 5px 5px 5px 5px;
    }

    .register-form .group .input,
    .register-form .group {
        padding: 8px;
        padding-left: 10px;
        border-radius: 20px;
        background: #0E115A;
        border-color: white;

    }

    .register-form .group input[data-type="password"] {
        text-security: circle;
        -webkit-text-security: circle;
    }

    .register-form .group .label {
        color: white;
        font-size: 12px;
        margin: 5px 5px 5px 5px;
    }

    .register-form .group .button {
        background: #DD131A;
    }




    .register-form .groupR {
        margin-top: 5px;
        margin-bottom: 5px;
        display: table-cell;
    }

    .register-form .groupR .label,
    .register-form .groupR .input,
    .register-form .groupR .button {
        width: 25%;
        color: #fff;
        margin: 5px 5px 5px 5px;
    }

    .register-form .groupR .input,
    .register-form .groupR {
        padding: 8px;
        padding-left: 100px;
        border-radius: 20px;
        background: #0E115A;
        border-color: white;
    }

    .register-form .groupR input[data-type="password"] {
        text-security: circle;
        -webkit-text-security: circle;
    }

    .register-form .groupR .label {
        color: white;
        font-size: 12px;
        margin: 5px 5px 5px 5px;
    }

    .register-form .groupR .button {
        background: #DD131A;
    }





    .register-form .groupL {
        margin-top: 5px;
        margin-bottom: 5px;
        display: table-cell;
    }

    .register-form .groupL .label,
    .register-form .groupL .input,
    .register-form .groupL .button {
        width: 25%;
        color: #fff;
        display: block;
        margin: 5px 5px 5px 5px;
    }

    .register-form .groupL .input,
    .register-form .groupL {
        padding: 8px;
        padding-left: 10px;
        border-radius: 20px;
        background: #0E115A;
        border-color: white;

    }

    .register-form .groupL input[data-type="password"] {
        text-security: circle;
        -webkit-text-security: circle;
    }

    .register-form .groupL .label {
        color: white;
        font-size: 12px;
        margin: 5px 5px 5px 5px;
    }

    .register-form .groupL .button {
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

    .parent{
        display: table;
        width: 100%;
        table-layout: fixed; 
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

    <div class="register-wrap">
        <div class="register-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
                class="tab">S'INSCRIRE</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
            <div class="register-form">
                <div class="sign-in-htm">

                    <div class="parent">
                        <span class="groupL">
                            <label for="voterPrenom" class="voterPrenom">Prénom</label>
                            <input id="voterPrenom" type="text" class="input">
                        </span>

                        <span class="groupR">
                            <label for="voter" class="voterNom">Nom</label>
                            <input id="voterNom" type="text" class="input">
                        </span>
                    </div>

                    <div class="parent">
                        <span class="groupL">
                            <label for="voterCIN" class="voterCIN">N° de carte national</label>
                            <input id="voterCIN" type="text" class="input">
                        </span>

                        <span class="groupR">
                            <label for="voterDN" class="voterDN">Date de naissance</label>
                            <input id="voterDN" type="text" class="input">
                        </span>
                    </div>

                    <span class="group">
                        <label for="votermail" class="voterDN">Email</label>
                        <input id="votermail" type="text" class="input">
                    </span>

                    <div class="parent">
                        <span class="groupR">
                            <label for="passMP" class="passMP">Mot de passe</label>
                            <input id="passMP" type="password" class="input" data-type="password">
                        </span>

                        <span class="groupL">
                            <label for="userCMP" class="userCMP">Confirmer Mot de passe</label>
                            <input id="userCMP" type="text" class="input">
                        </span>
                    </div>

                    <div class="hr"></div>

                    <div class="group">
                        <input type="submit" class="button" value="S'INSCRIRE'">
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">

</script>

</html>