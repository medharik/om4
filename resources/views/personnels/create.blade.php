@extends('modele')
@section('titre')
    {{ $titre }}
@endsection
@section('main')
   <div class="row">
    <div class="col-md-6 mx-auto">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{ route('personnels.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label text-capitalize">nom : </label>
                <input  required type="text" name="nom" id="nom" class="form-control"  value="{{old('nom')}}">
            </div>
            <div class="mb-3">
                <label  for="prenom" class="form-label text-capitalize">prenom : </label>
                <input required type="text" name="prenom" value="{{old('prenom')? old('prenom'):''}}" id="prenom" class="form-control">
            </div>
            <div class="mb-3">
                <label for="cin" class="form-label text-capitalize">cin : </label>
                <input required pattern="[a-z]{1,2}[ /-]{0,}[0-9]{5,6}" type="text" name="cin" id="cin" class="form-control">
                @error('cin')
               <div class="alert alert-danger"> {{$message}}</div>
            @enderror

            </div>
            <div class="mb-3">
                <label for="email" class="form-label text-capitalize">email : </label>
                <input   type="email" name="email" id="email" class="form-control @error('email')
is-invalid
                @enderror">
                @error('email')
                    {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <label for="adresse" class="form-label text-capitalize">adresse : </label>
                <textarea type="text" name="adresse" id="adresse" class="form-control"></textarea>
            </div>

                <div class="mb-3">
                    <label for="tel" class="form-label text-capitalize">tel : </label>
                    <input type="text" name="telephone" id="tel" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="tel" class="form-label text-capitalize">Image : </label>
                    <input type="file" name="chemin" id="chemin" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="departement_id" class="form-label text-capitalize">Departement : </label>
                    @foreach ($departements as $d)
<div class="form-check form-switch">

    <input class="form-check-input"  value="{{$d->id}}" name="departement_id" type="radio" role="switch" id="flexSwitchCheckChecked">
    <label class="form-check-label" for="flexSwitchCheckChecked">{{$d->nom}}</label>
  </div>
                    @endforeach


                </div>
            <div class="mb-3">
                <button class="btn btn-primary">Ajouter le personnel</button>
            </div>

        </form>
    </div>
   </div>
@endsection
