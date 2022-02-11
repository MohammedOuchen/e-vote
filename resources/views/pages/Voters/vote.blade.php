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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Styles -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<body>
    @extends('layouts.home')


    <div class="allcontent">
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </symbol>
        </svg>

        @if (session()->has('error'))
        <center>
            <div style="width:300px;" class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    <h6 style="margin: auto; color:crimson">
                        {{  session()->get('error')}}
                    </h6>
                </div>
            </div>

        </center>
        @endif

        @if (session()->has('status'))
        <center>
            <div style="width:300px;" class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>
                    <h6 style="margin: auto; color:green">
                        {{  session()->get('status')}}
                    </h6>
                </div>
            </div>

        </center>
        @endif
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

                                <form action="{{ route('vote.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="candidat_id" value="{{ $voter->id }}">
                                    <button name="VoteButton" type="submit" class="btn btn-outline-danger"
                                        data-backdrop="static" data-keyboard="false" data-toggle="modal"
                                        data-target="#exampleModalCenter">
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