@extends('layouts.home')
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
    <!-- Styles -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<body>
    <div class="allcontent">
        <div class="container text-center">
            <h1><b> VOTEZ, c'est votre droit ! </b></h1>
            <p>Sentez-vous fier d'être un électeur. Soyez prêt à voter</p>
            <hr>
            <div class="alltable">
                <div class="input-group">
                    <span class="input-group-text">FILTRER</span>
                    <input type="text" id="myInput" onkeyup="myFunction()" title="Type in a name"
                        placeholder="Rechercher les noms" class="form-control">
                </div>
                <table id="myTable" class="table table-striped table-hover">
                    <thead>
                        <tr class="header">
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Voter</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td><button type="button" class="btn btn-outline-danger">Voter</button></td>
                        </tr>
                        <tr>
                            <td>Mary</td>
                            <td>Moe</td>
                            <td><button type="button" class="btn btn-outline-danger">Voter</button></td>
                        </tr>
                        <tr>
                            <td>July</td>
                            <td>Dooley</td>
                            <td><button type="button" class="btn btn-outline-danger">Voter</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script>
function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
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
</script>

</html>