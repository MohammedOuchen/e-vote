<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/resultat.css') }}" />
    <title>RESULTAT D'ELECTION</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
@extends('layouts.account')


<body>

    <div class="first">
        <div id="tabgauche" class="card text-white mb-3">

            <div class="card-body">

                <b>
                    <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path fill-rule="evenodd"
                                d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                        </svg> &nbsp; &nbsp; 234 343 participants</p>
                    <hr>
                    <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-envelope-check" viewBox="0 0 16 16">
                            <path
                                d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                            <path
                                d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z" />
                        </svg> &nbsp; &nbsp; 434 564 votants</p>
                    <hr>
                    <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg> &nbsp; &nbsp; Participation : 84,01%</p>
                    <hr>
                    <p class="card-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                            <path
                                d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            <path fill-rule="evenodd"
                                d="M12.146 5.146a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z" />
                        </svg>&nbsp; &nbsp; Abstention : 15,20%</p>
                </b>
            </div>
        </div>

        <div class="text-election">
            <h2> <b> ÉLECTION PRÉSIDENTIELLE 2022</b></h2>
            <h5>RÉSULTATS PREMIER TOUR</h5>
        </div>

    </div>
    <br>
    <div class="row g-3">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="./Pictures/alex.jpg" class="card-img-top" alt=>
                <div class="card-body">
                    <h5 id="card-title" class="card-title">Alexandre Langlois</h5>
                    <p class="card-text"> 20%</p>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="./Pictures/mari.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 id="card-title" class="card-title">Marine Le Pen</h5>
                    <p class="card-text"> 10%</p>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="./Pictures/c.jpeg" class="card-img-top" alt="New York">
                <div class="card-body">
                    <h5 id="card-title" class="card-title">Eric Zemmour</h5>
                    <p class="card-text">12%</p>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="./Pictures/mel.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 id="card-title" class="card-title">Jean-Luc Mélenchon</h5>
                    <p class="card-text">34%</p>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="./Pictures/nathh.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 id="card-title" class="card-title">Nathalie Arthaud</h5>

                    <p class="card-text"> 15%</p>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="./Pictures/vall.jpg" class="card-img-top" alt="London">
                <div class="card-body">
                    <h5 id="card-title" class="card-title">Valérie Pécresse</h5>

                    <p class="card-text">25%</p>

                </div>
            </div>
        </div>
    </div>

</body>

</html>