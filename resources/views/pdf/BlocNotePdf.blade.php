<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/home.css" class="href">
    <link rel="stylesheet" href="/css/main.css" class="href">
    <title>Document</title>
</head>
<style>

    h1{
        text-align : center;
    }

table {
    border-collapse: collapse;
    width: 100%;
    margin-bottom: 50px;
    margin-top: 50px;
  }
  th{
  
  
    color: black;
  }
  
  
  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }
  
  tr:nth-child(even) {
    background-color: #dddddd;
  }
</style>
<body>

<h1>{{$bloc_note['name_bloc_note']}}</h1>

<table>
  <tr>
    <th>note</th>
  </tr>
@if(sizeof($note)>0)
   @foreach($note as $noteDetails)
   <tr>
    <td> <a  class="href">{{$noteDetails['texte_note']}}</a></td>

  </tr>
    @endforeach
@endif
    </table>
</body>
</html>