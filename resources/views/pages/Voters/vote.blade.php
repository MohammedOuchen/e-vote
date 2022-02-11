
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>MON VOTE</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/vote.css') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Styles -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<body>
    @extends('layouts.home')

    <div class="allcontent">
        <div class="container text-center">
            <h1><b> VOTEZ, c'est votre droit ! </b></h1>
            <p>Sentez-vous fier d'être un électeur. Soyez prêt à voter</p>
            <hr>
            <div class="alltable">
                <div class="input-group">
                    <span class="input-group-text">FILTRER</span>
                    <input name="filter" type="text" id="myInput" onkeyup="myFunction()" title="Type in a name"
                        placeholder="Rechercher les noms" class="form-control">
                </div>
                <table id="myTable" class="table table-striped table-hover">
                    <thead>
                        <tr class="header">
                            <th>Nom et Prénom</th>
                            <th>Date de naissance</th>
                            <th>Voter</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($voters as $voter)

                        <tr>
                            <td>{{ $voter->full_name }}</td>
                            <td>{{ $voter->date_of_birth }}</td>
                            <td>
                                <!-- <button type="button" class="btn btn-outline-danger">Voter</button> -->
                                <!-- Button trigger modal -->

                                <form action="{{ route('vote.store') }}"  method="POST">
                                    @csrf
                                    <input type="hidden" name="candidat_id" value="{{ $voter->id }}">
                                    <button name="VoteButton" type="submit" class="btn btn-outline-danger" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#exampleModalCenter">
                                        Voter
                                    </button>
                                </form>

                            </td>
                        </tr>

                        @empty
                                 Aucun candidat pour l'instant.
                        @endforelse


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Confirmer votre vote</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </>
                        </div>
                        <div class="modal-body">
                            êtes-vous sûr de vouloir voter pour ce candidat ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-primary" onclick="DisableFunction()">Confirmer</button>
                        </div>
                        </div>
                    </div>
                    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

</body>
<script>
function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

// function DisableFunction(){
//     //var buttons = document.getElementById("VoteButton").disabled = true;
//     var elems = document.getElementsByName("VoteButton");
//     // console.log(elems);
//     // var elems = document.querySelectorAll('[name="VoteButton"]');

//     for (var i = 0; i < elems.length; i++) {
//         elems[0].disabled = true;
//     }
//     $('#exampleModalCenter').modal('hide');
//     // //$('#exampleModalCenter').modal({backdrop: 'static', keyboard: false})
//     // $(document.body).removeClass("modal-open");
//     // $(".modal-backdrop").remove();
// }

</script>

</html>
