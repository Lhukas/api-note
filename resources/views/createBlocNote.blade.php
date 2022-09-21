<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>


 <h1>Création d'un bloc note</h1>
    <form action="save" method="POST" id="form_bloc_note">
    @csrf
    <input type="text" name="nameBlocNote" id="">
    <input type="button" value="Ajouter une note" onclick="ajouterNote()">
    <input type="submit" value="Valider">


    </form>
    


    </fieldset>
   
</body>
</html>


<script>
    var conteurNote = 1

function ajouterNote() {

    var inputNote = document.createElement('input');
    inputNote.type = "text";
    inputNote.name = "note"+conteurNote;
    conteurNote++;

    document.getElementById("form_bloc_note").appendChild(inputNote)
    
}


</script>