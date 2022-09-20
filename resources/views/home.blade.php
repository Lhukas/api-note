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
    <span>Je me suis inspiré de l'application note d'Apple</span>

    <span>pour te fournir le travail plus rapidement, je n'ai pas énormément travaillé la partie front <br> J'ai plus travaillé la partie back, 
    en plus c'est sur cette partie que l'ont vas intervenir
    </span>
</div>

<div class="container">
    @if($message = Session::get('success'))
    <div class="alert">
        <p>{{$message}}</p>
    </div>
    @endif
<a href="create">Ajouter une liste</a>
    <ul>
   @foreach($listBlocNote as $blocNote)
   <li> 
        <a href="{{$blocNote['id']}}" class="href">{{$blocNote['name_bloc_note']}}</a>
        <div class="containerBtn">
        <a href="" class="btnDelete">Supprimer</a>
        <a href="" class="btnEdit">Editer</a>

        <div>
    
    
    </li>
    @endforeach
</ul>
</div>
</body>
</html>