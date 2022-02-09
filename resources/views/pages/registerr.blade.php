@extends('layouts.home')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/home.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/register.css') }}" />
    <title>Inscription</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


</head>

<body>

    <div id="circle"></div>
    <div id="rectangleB"></div>
    <div id="rectangleW"></div>
    <div id="rectangleR"></div>

    <div class="register-wrap" style="scroll-behavior: auto;">
        <div class="register-html">
            <form method="POST">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
                    class="tab">INSCRIPTION</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
                <div class="hr"></div>
                <div class="register-form">
                    <div class="sign-in-htm">
                        <div class="form-group">

                            <div class="group text-center">
                                <label for="voterPrenom" class="voterPrenom">Voulez-vous voter ou candidater
                                    ?</label>
                                <div>
                                    <select>
                                        <option selected>Choisissez</option>
                                        <option>Voter</option>
                                        <option value="1">Candidater</option>
                                    </select>
                                    <small> <b></b></small>
                                </div>
                            </div>
                        </div>

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
                            <input id="userCMP" type="text" class="input" data-type="password">
                        </div>

                        <div class="group">
                            <input type="submit" class="button" value="S'INSCRIRE">
                        </div>
                        <div class="notyet">
                            <a class="notyet" href="">Pas encore inscrit ?</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <body>


</html>