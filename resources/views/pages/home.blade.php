
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/home.css') }}" />
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
        <img class="mainImg" src="{{ asset('Pictures/HomePagePicture.png') }}" width="409" height="451">
        <div class="buttons">
            <button >Voter<img src="{{ asset('Pictures/voterIcon.png') }}"></button>
            <button>Candidater<img src="{{ asset('Pictures/candidaterIcon.png') }}"></button>
        </div>
        <div class="title">
        <h1>
            Ensemble nous pouvons faire un
            meilleur pays !
        </h1>
        </div>
        <div class="subtitle">
        <h3>
            Voter pour le meilleur candidat
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
        <button class="InscButton">S'inscrire maintenant !</button>
    </body>
</html>
