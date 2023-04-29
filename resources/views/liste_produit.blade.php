<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des produits</title>
</head>

<body>

    <h2>Liste des produits </h2>
    <table border="1" width="500">
        <thead>
            <tr>
                <td>id</td>
                <td>libelle</td>
                <td>prix</td>
                <td>qte</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($produits as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->libelle}}</td>
                    <td>{{$p->prix}}</td>
                    <td>{{$p->qte}}</td>
                </tr>
            @endforeach


        </tbody>

    </table>
    <div>
        {{ $produits->links()}}
    </div>
</body>

</html>
