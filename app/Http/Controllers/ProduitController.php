<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ProduitController extends Controller
{
    public function __construct(){
      //  $this->middleware('auth');
    }

    public function index() 
    {
        return view('produits.produit_liste',
        [
            'produits' => Produit::all()
        ]);
    }

    public function create() {
        return view('produits.produit_add',
        [
            'categories'=>Categorie::all()
        ]);
    }

    public function edit($id) {
        $produit = Produit::where('id', $id)
            ->first();
        return view('produits.produit_update',
            [
                'produit' => $produit ,
                'categories'=>Categorie::all()
            ]

        );
    }
    public function store(Request $request)
    {
        $produit = Produit::create($request->all());

         return redirect()->route('produits.produit_liste') ;

       // return response()->json($produit, 201);
    }
    
    public function modif(Request $request)
    {
        $id=$request->get('id');
        $produit = Produit::where("id",$id)->first();
        $produit->name = $request->get('name');
        $produit->description = $request->get('description');
        $produit->prix = $request->get('prix');
        $produit->quantite = $request->get('quantite');
        $produit->categorie_id = $request->get('categorie_id');
        $produit->save();
        //return response()->json($produit, 201);
        return redirect()->route('produits.produit_liste') ;
    }

    public function storeCat(Request $request)
    {
        $categorie = Categorie::create($request->all());

       // return response()->json($categorie, 201);
    }
    public function findProduit(Request $request) {
        $name=$request->get('name');
        $produit = Produit::where("name",$name)->first();
       //return response()->json($produit,201);
    }
    public function add() {
        $produit = new Produit();
        $produit->name = Input::get('name');
        $produit->description = Input::get('description');
        $produit->prix = Input::get('prix');
        $produit->quantite = Input::get('quantite');
        $produit->code = Input::get('code');
        $produit->categorie_id = Input::get('categorie');
        $produit->save();

        /*return view('produit_liste',
            ['produits' => Produit::all()]
        );*/
       // return response()->json([
         //   'produits' => Produit::all()->last()

             return view('produits.produit_liste', ['produits' => Produit::all()] );
            //return redirect()->route('produits.produit_liste') ;
      //  ]);
    }

    public function update()
     {
        $produit = Produit::where('id', Input::get('id'))->first();
        $produit->name = Input::get('name');
        $produit->description = Input::get('description');
        $produit->prix = Input::get('prix');
        $produit->quantite = Input::get('quantite');
        $produit->code = Input::get('code');
        $produit->categorie_id = Input::get('categorie');
        $produit->save();

        return view('produits.produit_liste', ['produits' => Produit::all()] );
    }

    public function delete($id) {
        $produit = Produit::where('id', $id)->first();
        $produit->forceDelete();
        return redirect('produits');
    }


}
