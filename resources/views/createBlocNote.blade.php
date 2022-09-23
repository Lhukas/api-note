<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css" class="href">
    <link rel="stylesheet" href="/css/create.css" class="href">
    <title>Document</title>
</head>
<body>

<div class = "header">
    
 <h1>Création d'un bloc note</h1>


   <a href="/" class="btnHeader">Retour a l'acceuil</a>


</div>

<div class="container">

    <form action="save" method="POST" id="form_bloc_note">
    @csrf
    <label>Nom du bloc note </label>
    <br>
    <input type="text" name="nameBlocNote" id="" class="nameBlocNote">

    <p>Note : </p>
    <input type="text" name="note1" id="" class="nameNote">
    <input type="button" value="Ajouter une note" onclick="ajouterNote()" class="btnHeader">
    <input type="submit" value="Valider" class="btnHeader">

    <p>Voulez vous rendre cette liste non-modifable, permettre uniquement la supprésion </p>

    <input type="checkbox" name="modif" id="">



    </form>
    


</div>
   
</body>
</html>


<script>
    var conteurNote = 2

function ajouterNote() {

    var inputNote = document.createElement('input');
    inputNote.type = "text";
    inputNote.name = "note"+conteurNote;
   

    document.getElementsByName("note"+(conteurNote-1))[0].after(inputNote)

    conteurNote++;
    //document.getElementsByName("note1")[0].appendChild(inputNote)
    
}


</script>