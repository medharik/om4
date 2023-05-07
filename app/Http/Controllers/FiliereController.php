<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //liste des filieres
        $filieres =  Filiere::all();
        return view("filieres/index", ["filieres" => $filieres]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("filieres/create");
    }

    /**
     * Store a newly created resource in storage database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Filiere::create($request->all());
        return redirect()->route("filiere.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $filiere = Filiere::find($id);
        return view("filieres.show", ["filiere" => $filiere]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filiere = Filiere::find($id);
        return view("filieres.edit", ["filiere" => $filiere]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $filiere = Filiere::find($id);
        $filiere->update($request->all());
        return redirect()->route("filiere.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filiere = Filiere::find($id);
        $filiere->delete();
        return redirect()->route("filiere.index");
    }
}
