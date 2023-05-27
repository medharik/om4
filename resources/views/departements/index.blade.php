@extends('modele')
@section('titre')
    liste des departements
@endsection
@section('main')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Personnels</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departements as $p)
                <tr>
                    <th scope="row">{{$p->id}}</th>
                    <td>{{$p->nom}}</td>
                    <td>{{$p->adresse}}</td>
                    <td>
                        <span class="badge text-bg-{{App\Models\Departement::couleur($p->personnels->count())}}">
<?php

                            {{$p->personnels->count()}} personnel{{$p->personnels->count()>1?"s":""}}<td>

                        </span>

                    <td>
                        <form action="{{route('departements.destroy',$p->id)}}" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button class="btn text-danger"> <i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>


                        <a href="{{route('departements.show',$p->id)}}" class="btn btn-sm text-info fs-4"><i class="fa-solid fa-circle-info"></i> </a>
                        <a href="{{route('departements.edit',$p->id)}}" class="btn btn-sm text-warning fs-4"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
