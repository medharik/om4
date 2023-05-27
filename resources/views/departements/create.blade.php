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
        <form action="{{ route('departements.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label text-capitalize">nom : </label>
                <input  required type="text" name="nom" id="nom" class="form-control"  value="{{old('nom')}}">
            </div>
            <div class="mb-3">
                <label for="adresse" class="form-label text-capitalize">adresse : </label>
                <textarea type="text" name="adresse" id="adresse" class="form-control"></textarea>
            </div>


            <div class="mb-3">
                <button class="btn btn-primary">Ajouter le departement</button>
            </div>

        </form>
    </div>
   </div>
@endsection
