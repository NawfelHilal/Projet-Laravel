<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Produits;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){



        $produits= Produits::simplePaginate(9);
        //dd($produits);


        return view('Shop.index', compact('produits'));
    }

    public function produit(Request $request) {
       //dd($request->id);
        // "page produit";

        // SELECT * FROM produits Where id = ?;
        $produit= Produits::find($request->id);
        return view('shop.produit', compact('produit'));
    }

    public function create()
    {
        return view('Shop.post_create');
    }

    public function show()
    {

    }
    public function store()
    {
        $produit = new Produits();
        $produit->nom = request('nom');
        $produit->description = request('description');
        $produit->prix = request('prix');
        $produit->photo_principale = request('photo_principale');
        $produit->photo_secondaire = request('photo_secondaire');
        $produit->save();
        return view('Shop.ajout_succes');

    }

    public function edit(Request $request)
    {
        $produit= Produits::find($request->id);
        return view('Shop.post_edit', compact('produit'));
    }

    public function update(Request $request, Produits $produits)
    {
        $produits->update($request->all());

        return redirect($produits->update());
    }

    public function destroy(Produits $produits)
    {
        $produits->delete();
        return redirect('/');
    }
}
