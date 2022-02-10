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
                    <form method="POST" action="{{ route('registerr') }}">
                    @csrf
                        <div class="form-group">

                            <div class="group">
                            <select onchange="yesnoCheck(this);" id="choice" class="form-select" aria-label="Default select example" placeholder="Choisissez ..." required>
                                <option disabled selected value default> -- select an option -- </option>    
                                <option value="Candidater" selected>Candidater</option>
                                <option value="Voter">Voter</option>
                            </select>
                            <small id="mainChoice" class="form-text text-muted">Vous voulez voter ou candidater</small>
                            </div>

                            <div id="ifYes" class="group">
                            <select class="form-select" aria-label="Default select example" placeholder="Choisissez ...">
                                <option selected>Elections municipales</option>
                                <option value="1">Elections départementales</option>
                                <option value="2">Elections régionales</option>
                                <option value="3">Elections législatives</option>
                            </select>
                            <small id="electionChoice" class="form-text text-muted">Choisissez l'election où vous voulez candidatez</small>
                            </div>
  
                            <div class="group">
                                <label for="voterPrenom" class="voterPrenom">Prénom</label>
                                <input id="voterPrenom" type="text" class="form-control @error('voterPrenom') is-invalid @enderror" name="voterPrenom" value="{{ old('voterPrenom') }}" required autocomplete="name" autofocus>

                                @error('voterPrenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                            <div class="group">
                                <label for="voterNom" class="voterNom">Nom</label>
                                <input id="voterNom" type="text" class="form-control @error('name') is-invalid @enderror" name="voterNom" value="{{ old('voterNom') }}" required autocomplete="name" autofocus>

                                @error('voterNom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="group">
                                <label for="voterCIN" class="voterCIN">N° de carte national</label>
                                <input id="voterCIN" type="text" class="form-control @error('voterCIN') is-invalid @enderror" name="voterCIN" value="{{ old('voterCIN') }}" required autocomplete="name" autofocus>

                                @error('voterCIN')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="group">
                                <label for="voterDN" class="voterDN">Date de naissance</label>
                                <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="name" autofocus>

                                @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="group">
                                <label for="votermail" class="voterDN">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                                <div class="group">
                                    <label for="passMP" class="passMP">Mot de passe</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>

                                <div class="group">
                                    <label for="userCMP" class="userCMP">Confirmer Mot de passe</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                            <div class="group">
                                <button type="submit" class="button">
                                    {{ __('Register') }}
                                </button>
                            </div>

                            <div class="registred">
                            @if (Route::has('registerr'))
                                <a href="{{ route('registerr') }}">{{ __('Déjà inscrit ?') }}</a>
                            @endif
                        </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

<script type="text/javascript">
function yesnoCheck(that) {
    if (that.value == "Voter") {
        document.getElementById("ifYes").style.display = "none";
    } else {
        document.getElementById("ifYes").style.display = "block";
    }
}

</script>

</html>