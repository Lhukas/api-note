<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/note.css" class="href">
    <link rel="stylesheet" href="/css/main.css" class="href">
    <title>Articles</title>
</head>
<body>
<div class = "header">
<h1>{{$blocNote['name_bloc_note']}}</h1>
<a href="/" class="btnHeader">Retour a l'acceuil</a>

</div>
<div class="container">
@if($message = Session::get('success'))
    <div class="alert">
        <p>{{$message}}</p>
    </div>
    @endif


    <table>
  <tr>
    <th>note</th>
    <th>Actions</th>
    
  </tr>
  @if(sizeof($note)>0)
   @foreach($note as $noteDetails)
   <tr>
    <td> <a  class="href">{{$noteDetails['texte_note']}}</a></td>
    <td>   <a href="remove/note/{{$noteDetails['id']}}" class="btnDelete">retirer</a></td>
  </tr>
    @endforeach
    @endif
    </table>
    <h2>Ajouter une note</h2>
    <form action="/save/note/{{$blocNote['id']}}" method="POST" id="form_note">
    @csrf
    <input type="text" name="texte_note" id="texte_note">
    <input type="text" name="id" value="{{$blocNote['id']}}" style="display:none;">
    <input type="submit" value="Valider" id="submit_note">
</form>
<h2>Télécharger le bloc note : </h2>
<a href="/pdf/{{$blocNote['id']}}" class="btnHeader">Télécharger</a>


<h2>Recevoir ma liste par mail : </h2>

<form action="/send-email/{{$blocNote['id']}}" method="POST" id="form_note">
    @csrf
    <input type="text" name="mailToSend" id="texte_note" placeholder="Adresse mail">
  

    <input type="submit" value="Envoyé" id="submit_note">
</form>

</div>
   
</body>
</html>