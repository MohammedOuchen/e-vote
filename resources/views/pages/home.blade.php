@extends('layouts.home')
<title> E-vote </title>
< @section('content') <img class="mainImg" src="{{ asset('Pictures/HomePagePicture.png') }}" width="409" height="451">
    <div class="buttons">
        <a href="{{ route('loginn') }}" class="button buttonHome"> Voter
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-hand-index-thumb" viewBox="0 0 16 16">
                <path
                    d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 0 0 1 0V6.435l.106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 1 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.118a.5.5 0 0 1-.447-.276l-1.232-2.465-2.512-4.185a.517.517 0 0 1 .809-.631l2.41 2.41A.5.5 0 0 0 6 9.5V1.75A.75.75 0 0 1 6.75 1zM8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v6.543L3.443 6.736A1.517 1.517 0 0 0 1.07 8.588l2.491 4.153 1.215 2.43A1.5 1.5 0 0 0 6.118 16h6.302a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5.114 5.114 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.632 2.632 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046l-.048.002zm2.094 2.025z" />
            </svg>
        </a>
        <a href="{{ route('registerr') }}" class="button buttonHome">candidater
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path
                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                <path fill-rule="evenodd"
                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
            </svg>
        </a>
    </div>
    <div class="title">
        <h1>
            Ensemble nous pouvons faire un
            meilleur pays !
        </h1>
    </div>
    <div class="subtitle">
        <h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-all"
                viewBox="0 0 16 16">
                <path
                    d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z" />
                <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z" />
            </svg> Voter pour le meilleur candidat
        </h3>
    </div>
    <div class="text">
        <p>
            Qui sera le prochain président de la République française en 2022 ? De nombreuses
            personnalités politiques en rêvent. À trois mois du premier tour du scrutin, une
            vingtaine de candidatures ont déjà été déclarées. D'autres candidats devraient se
            manifester dans les semaines à venir.
        </p>
    </div>
    <a href="{{ route('registerr') }}" class="InscButton">S'inscrire maintenant !</a>

    <div class="divs">

        <div class="card text-dark bg-light mb-3 ">
            <div id="blueone" class="card-body text-center">
                <h2 class="card-title">ÊTRE CANDIDAT À L'ÉLECTION</h2>
                <hr class="red_hr">
                <p class="card-text">Tous les électeurs français sont libres de se porter candidat à l’élection.
                </p>
                <a href="{{ route('registerr') }}" class="button buttonC "> Candidater </a>
            </div>
        </div>

        <div class="card border-danger mb-3">
            <div class="card-body text-center">
                <h2 id="whiteone" class="card-title">RÉSULTAT DE L'ÉLÉCTION</h2>
                <hr class="red_hr">
                <p class="card-text">Les résultats nationaux du premier tour de l'élection présidentielle française
                    de 2022
                    seront dévoilés le dimanche 11 février à partir de 09h.</p>
                <a href="{{ route('loginn') }}" class="button buttonV "> Voir les résultats</a>
            </div>
        </div>

        <div class="card text-dark bg-light mb-3">
            <div id="redone" class="card-body text-center">
                <h2 class="card-title">PARTICIPER À L'ÉLECTION</h2>
                <hr class="blue_hr">
                <p class="card-text">En tant que citoyen, vous êtes appelé à voter !</p>
                <a href="{{ route('loginn') }}" class="button buttonV "> Voter </a>
            </div>
        </div>
    </div>

    <blockquote class="blockquote text-center">
        <h1 class="mb-0"><b>
                <span class="textdeco">Ne pas voter</span>, c'est laisser les autres décider pour nous.
                C'est se priver du moyen le plus simple de peser sur notre destin.
            </b></h1>
    </blockquote>

    <section class="">
        <!-- Footer -->
        <footer class="text-center text-white" style="background-color: #0e115a;">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: CTA -->
                <section class="">
                    <p class="d-flex justify-content-center align-items-center">
                        <span class="me-3">Voter! Faisons entendre votre voix !</span>
                        <button type=" button" class="btn btn-outline-light btn-rounded"
                            onclick="window.location='{{ route('loginn') }}'">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-forward-fill" viewBox="0 0 16 16">
                                <path
                                    d="m9.77 12.11 4.012-2.953a.647.647 0 0 0 0-1.114L9.771 5.09a.644.644 0 0 0-.971.557V6.65H2v3.9h6.8v1.003c0 .505.545.808.97.557z" />
                            </svg>
                        </button>
                    </p>
                </section>
                <!-- Section: CTA -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2022 Copyright:
                <a class="text-white">E-vote</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </section>
    @endsection