<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/home.css" class="href">
    <link rel="stylesheet" href="/css/main.css" class="href">
    <title>Mon bloc note</title>
</head>
<body>
    <div class = "header">
    <h1>Mon bloc-notes en laravel</h1>

    <a href="create" class="btnHeader">Ajouter une liste</a>


</div>


<div class="container">
    @if($message = Session::get('success'))
    <div class="alert">
        <p>{{$message}}</p>
    </div>
    @endif


    <h1>Mes listes</h1>

<table>
  <tr>
    <th>Nom du bloc note</th>
    <th>Supprimer</th>
    <th>Editer</th>
  </tr>
   @foreach($listBlocNote as $blocNote)
   <tr>
    <td> <a href="show/{{$blocNote['id']}}" class="href">{{$blocNote['name_bloc_note']}}</a></td>
    <td>   <a href="remove/bloc_note/{{$blocNote['id']}}" class="btnDelete">Supprimer</a></td>
    <td>  <a href="show/{{$blocNote['id']}}" class="btnEdit">Editer</a></td>
  </tr>
    @endforeach
    </table>
</div>
</body>
</html>