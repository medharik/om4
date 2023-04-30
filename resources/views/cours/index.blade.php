<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>liste des cours</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
<h2>{{$notice}}</h2>
<table>
    <tr>
        <td>#</td>
        <td>Titre</td>
        <td>Desc</td>
        <td>Theme</td>
        <td>Actions</td>
    </tr>

@foreach ($cours as $c)
<tr>
    <td>{{$c->id}}</td>
    <td>{{$c->titre}}</td>
    <td>{{$c->description}}</td>
    <td>{{$c->theme}}</td>
    <td></td>
</tr>
@endforeach

</table>
<p>
    {{$cours->links()}}
</p>


</body>
</html>
