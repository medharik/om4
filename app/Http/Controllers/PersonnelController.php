<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * endPoint : GET  /personnels, route('personnels.index)
     */
    public function index()
    {
        $personnels = Personnel::all();
        $titre = "Liste des personnels";
        return view("personnels/index", compact('personnels', 'titre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * endPoint : GET personnels/create
     * route('personnels.create')
     */
    public function create()
    {
        $titre = "Ajouter un personnel";

        return view("personnels/create", compact('titre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * endPoint : POST /personnels : url('/personnels'), route('personnels.store)
     *
     */
    public function store(Request $request)
    {
        Personnel::create($request->all());
        return redirect()->route('personnels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * ENDPOINT : GET personnels/1
     * route('personnels.show',1)
     */
    public function show($id)
    {
        $personnel = Personnel::find($id);
        $titre="Consultation du personnel :".$personnel->nom." ".$personnel->prenom;
        return view("personnels.show",compact('personnel','titre'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * GET personnels/1/edit
     * route('personnels.edit',$id)
     */
    public function edit($id)
    {
        $personnel = Personnel::find($id);
        $titre = "Modificationle personnel :".$personnel->nom." ".$personnel->prenom;
        return view("personnels.edit", compact('personnel','titre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     * endPoint : PUT  personnels/id
     * route('personnels.update',$id)
     */
    public function update(Request $request, $id)
    {
        //
        $personnel = Personnel::find($id);
        $personnel->update($request->all());
        return redirect()->route('personnels.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * DELETE : PERSONNEL/1
     * route('personnels.destroy',$id)
     */
    public function destroy($id)
    {
        $personnel = Personnel::find($id);
        $personnel->delete();
        return redirect()->route('personnels.index');
    }
}
