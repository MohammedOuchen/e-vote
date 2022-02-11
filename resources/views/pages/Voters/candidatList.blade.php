@extends('layouts.home')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/candidatList.css') }}" />
</head>
<body>
    {{-- <div class="card" style="width: 18rem;">
    <img src="{{ asset('Pictures/Eric.jpg') }}" class="card-img-top" alt="">
    <div class="card-body">
        <h3 class="card-title">Eric Zemmour</h3>
        <p class="card-text">Grand fils de pute</p>
        <a href="#" class="btn btn-primary">Afficher plus</a>
    </div>
    </div> --}}

    <div class="row g-3">

        @foreach ($users as $user )
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="./Pictures/alex.jpg" class="card-img-top" alt=>
                    <div class="card-body">
                        <h5 id="card-title">{{ $user->full_name }}</h5>
                        <p class="card-text">{{ $user->date_of_birth }}</p>
                    </div>
                    <a href="https://fr.wikipedia.org/wiki/Emmanuel_Macron" class="btn btn-primary">Afficher plus</a>
                </div>
            </div>
        @endforeach

    </div>

    <!-- <div class="container mt-5">
    <h1 class="text-center">All the Candidates</h1>
    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="card mt-2">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('Pictures/Eric.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Eric Zemmour</h5>
                        <p class="card-text">Grand fils de pute</p>
                        <a href="#" class="btn btn-primary">Afficher plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

    <!-- <div class="card" style="width: 18rem;">
        <img src="{{ asset('Pictures/Eric.png') }}" class="card-img-top" >
        <div class="card-body">
            <h5 class="card-title">Eric Zemmour</h5>
            <p class="card-text">Grand fils de pute.</p>
            <a href="#" class="btn btn-primary">More details</a>
        </div>
   </div> -->

</body>
</html>
