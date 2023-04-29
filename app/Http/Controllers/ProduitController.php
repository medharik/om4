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

   public function tous()
   {
   $produits= Produit::paginate(10);//ORM : ELOQUENT
   return view ("liste_produit",['produits'=>$produits]);

   }

}
