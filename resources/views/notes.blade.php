<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/note.css" class="href">
    <title>Articles</title>
</head>
<body>

    <h1>{{$blocNote['name_bloc_note']}}</h1>
    <table>
  <tr>
    <th>Nom du bloc note</th>
    <th></th>
    <th></th>
  </tr>
   @foreach($note as $noteDetails)
   <tr>
    <td> <a  class="href">{{$noteDetails['texte_note']}}</a></td>
    <td>   <a href="" class="btnDelete">Faite</a></td>
  </tr>
    @endforeach
    </table>

   
</body>
</html>