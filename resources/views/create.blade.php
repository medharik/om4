<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>nouveau produit</title>
</head>
<body>
    <h2>Nouveau produit</h2>

    <form action="{{url("enregistrer")}}" method="post">
       @csrf
    
        <input type="text" name="libelle" id="" placeholder="Libelle">
        <input type="text" name="prix" id="" placeholder="prix">
        <input type="text" name="qte" id="" placeholder="Quantite">
        <button type="submit">Ajouter le produit</button>
    </form>
    
</body>
</html>