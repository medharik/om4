<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * endPoint : GET  /departements, route('departements.index)
     */
    public function index()
    {
        $departements = Departement::all();
        $titre = "Liste des departements";
        return view("departements/index", compact('departements', 'titre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * endPoint : GET departements/create
     * route('departements.create')
     */
    public function create()
    {
        $titre = "Ajouter un departement";

        return view("departements/create", compact('titre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * endPoint : POST /departements : url('/departements'), route('departements.store)
     *
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|unique:departements|email',
        //     'cin' => 'unique:departements',
        //     'nom' => 'required|min:2',
        // ]);
        $data = $request->all();
    //    $data['chemin']= $request->chemin->store('images');
       Departement::create($data);
    //    dd($image_name);



        return redirect()->route('departements.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * ENDPOINT : GET departements/1
     * route('departements.show',1)
     */
    public function show($id)
    {
        $departement = Departement::find($id);
        $titre = "Consultation du departement :" . $departement->nom ;
        return view("departements.show", compact('departement', 'titre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * GET departements/1/edit
     * route('departements.edit',$id)
     */
    public function edit($id)
    {
        $departement = Departement::find($id);
        $titre = "Modification du departement :" . $departement->nom ;
        return view("departements.edit", compact('departement', 'titre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     * endPoint : PUT  departements/id
     * route('departements.update',$id)
     */
    public function update(Request $request, $id)
    {
        $departement = Departement::find($id);
        $departement->update($request->all());
        return redirect()->route('departements.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * DELETE : PERSONNEL/1
     * route('departements.destroy',$id)
     */
    public function destroy($id)
    {   $departement = Departement::find($id);
        $departement->delete();
        return redirect()->route('departements.index');
    }
}
