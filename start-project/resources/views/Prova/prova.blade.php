<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
</head>
<body>
    <h1> Está preparado para saber sua nota?</h1>
    <hr> 
    <a href="{{route('prova.aprovado')}}"> Aprovado </a>
    <br>
    <a href="{{route('prova.reprovado')}}"> Reprovado </a>
    <br>
    <a href="{{route('prova.recuperacao')}}"> Recuperacao </a>
</body>
</html>