@extends('modele')
@section("titre")
    {{$titre}}
@endsection
@section('main')

<ul>
    <li>
        Departement : {{$departement->nom}}
    </li>
    <li>
        Adresse : {{$departement->adresse}}
    </li>
</ul>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom Prenom</th>
            <th scope="col">Cin</th>
            <th scope="col">Image</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($departement->personnels as $p)
            <tr>
                <th scope="row">{{$p->id}}</th>
                <td>{{$p->nom}} {{$p->prenom}}</td>
                <td>{{$p->cin}}</td>
                <td><img src="{{asset('storage/'.$p->chemin)}}" alt="" width="150"></td>
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


<ul>
    @foreach ($departement->personnels as $p)
    <li>{{$p->nom}} {{$p->prenom}}</li>

    @endforeach
</ul>
@endsection
