<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>creation d'un nouveau cours </title>
</head>
<body>
<h2>Nouveau</h2>
<form action="{{url('/cours')}}" method="post">
@csrf
    <input type="text" name="titre" placeholder="Titre" id="">
    <input type="text" name="description" placeholder="description" id="">
    <input type="text" name="theme" placeholder="theme" id="">
    <button>Ajouter</button>

</form>
</body>
</html>
