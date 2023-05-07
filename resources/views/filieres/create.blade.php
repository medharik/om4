<h2>Nouvelle Filiere : </h2>
<form action="{{url('filiere')}}" method="post">
    @csrf
 Nom de la  Filiere : <input type="text" name="nom">
 <button>Ajouter</button>

</form>
