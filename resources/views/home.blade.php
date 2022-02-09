<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/home.css') }}" />
    <title>MON COMPTE E-VOTE</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/home.css') }}" />
</head>
@extends('layouts.home')

<body>
    @section('content')
    <div class="container">
        <h2> <b> Bienvenue NOM dans votre espace de vote </b></h2>
        <h5>Vous avez un vote à exprimer !</h5>
        <div class="row text-center">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 id="liste" class="card-title"> <b>La liste des candidats </b></h5>
                        <p class="card-text">Consultez notre liste actualisée au fil de la campagne</p>


                        <div class="input-group">
                            <select class="form-select" id="inputGroupSelect04"
                                aria-label="Example select with button addon">
                                <option selected>Choix d'élection</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <button class="button button1" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-card-list" viewBox="0 0 16 16">
                                    <path
                                        d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                    <path
                                        d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                                </svg>
                                Voir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 id="voter" class=" card-title"> <b> Voter sur un candidat </b></h5>
                        <p class="card-text">Votre voix compte. Alors, pas une minute à perdre, votez dès maintenant !
                        </p>
                        <a href="#" class="button button2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check-square-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                            </svg>
                            Voter</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card text-center">

            <div class="card-body">
                <h5 id="voter" class="card-title"> <b> Le résultat </b> </h5>
                <p class="card-text">Connaître les résultats des dernières élections ou consultations qui ont eu lieu.
                </p>
                <a href="#" class="button button3"><span> Voir le résultat </span></a>
            </div>
            <div class="card-footer text-muted">
                Dans 2 jours
            </div>
        </div>
    </div>
    @endsection
</body>