@extends('modele')
@section('titre')
    liste des personnnels
@endsection
@section('main')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom Prenom</th>
                <th scope="col">Cin</th>
                <th scope="col">Image</th>
                <th scope="col">Departement</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personnels as $p)
                <tr>
                    <th scope="row">{{$p->id}}</th>
                    <td>{{$p->nom}} {{$p->prenom}}</td>
                    <td>{{$p->cin}}</td>
                    <td><img src="{{asset('storage/'.$p->chemin)}}" alt="" width="150"></td>
                    <td>{{$p->departement->nom}}</td>
                    <td>
                        <a href="" class="btn btn-sm text-danger fs-4"><i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                        <a href="" class="btn btn-sm text-info fs-4"><i class="fa-solid fa-circle-info"></i> </a>
                        <a href="" class="btn btn-sm text-warning fs-4"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
