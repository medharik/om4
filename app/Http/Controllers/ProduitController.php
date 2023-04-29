<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function nouveau()
    {
     
        return view("create");
    }
    public function enregistrer(Request $request)
    {
       Produit::create($request->all());

    }

    public function liste()
    {
        return view("index");
    }

}
