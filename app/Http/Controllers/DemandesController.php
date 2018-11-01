<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Demande;
use App\Entreprise;
use App\Specialite;
use App\Affectation;

class DemandesController extends Controller
{
   

    public function __construct(){
      //  $this->middleware('auth');
    }

     public function index() 
    {
        if(Auth::check())
        {
            return view('demandes.demande_liste',
            [
                'demandes' => Demande::all()
            ]);
         }

        return view('auth.login');     
    }

    public function create() 
    {
         if(Auth::check())
        {
            return view('demandes.demande_add',
            [
               
                'entreprises'=>Entreprise::all(),
                'specialites'=>Specialite::all()
            ]);
         }

        return view('auth.login');     
    }

    public function edit($id)

    {
        if(Auth::check())
        {
            $demande = Demande::where('id', $id)->first();
            return view('demandes.demande_update',
                [
                    'demande' => $demande,
                    'entreprises' => Entreprise::all(),
                    'specialites' => Specialite::all()
                ]

            );
         }

        return view('auth.login');     
    }

    public function store(Request $request)
    {
         if(Auth::check())
        {
            $demande = Demande::create($request->all());

             return redirect()->route('demandes') ;
         }

        return view('auth.login');      

       
    }

    public function modif(Request $request)
    {
         if(Auth::check())
        {
            $id=$request->get('id');
            $demande =Demande::where("id",$id)->first();
            $demande->entreprises_id = $request->get('entreprises_id');
            $demande->niveauFormation = $request->get('niveauFormation');
            $demande->nbreAnneeExperience = $request->get('nbreAnneeExperience');
            $demande->dureeContrat = $request->get('dureeContrat');
            $demande->dateLimite = $request->get('dateLimite');
            $demande->specialites_id = $request->get('specialites_id');
            $demande->libelleSpecialite = $request->get('libelleSpecialite');
            $demande->save();
           
            return redirect()->route('demandes') ;
         }

        return view('auth.login');     
    }



     public function storeEntr(Request $request)
    {
         if(Auth::check())
        {
             $entreprise = Entreprise::create($request->all());
          }

        return view('auth.login');     

    }


    public function storeSpecia(Request $request)
    {
         if(Auth::check())
        {
            $specialite = Specialite::create($request->all());
         }

        return view('auth.login');     

    }



    public function findEntreprises(Request $request)
     {
         if(Auth::check())
        {
                $nomEntreprise=$request->get('nomEntreprise');
                $entreprise =Entreprise::where("nomEntreprise",$nomEntreprise)->first();
         }

        return view('auth.login');         
     
    }

    public function findSpecialite(Request $request)
     {
         if(Auth::check())
        {
            $libelle=$request->get('libelle');
            $specialite =Specialite::where("libelle",$libelle)->first();
          }

        return view('auth.login');    
     
    }


     public function add() 
     {
         if(Auth::check())
        {
            $demande = new Demande();

             $demande->entreprises_id = Input::get('entreprise');
             $demande->niveauFormation = Input::get('niveauFormation');
            $demande->nbreAnneeExperience = Input::get('nbreAnneeExperience');
            $demande->dureeContrat = Input::get('dureeContrat');
            $demande->dateLimite = Input::get('dateLimite');

            $demande->specialites_id = Input::get('specialite');
            $demande->libelleSpecialite= Input::get('libelleSpecialite');
            $demande->save();

            
             return redirect('demandes');
            // return view('specialites', ['specialites' => Specialite::all()] );
          }

        return view('auth.login');     
           
    }

    public function update()
     {
         if(Auth::check())
        {
            $demande = Demande::where('id', Input::get('id'))->first();

            $demande->entreprises_id = Input::get('entreprise');
             $demande->niveauFormation = Input::get('niveauFormation');
            $demande->nbreAnneeExperience = Input::get('nbreAnneeExperience');
            $demande->dureeContrat = Input::get('dureeContrat');
            $demande->dateLimite = Input::get('dateLimite');

            $demande->specialites_id = Input::get('specialite');
             $demande->libelleSpecialite= Input::get('libelleSpecialite');
            $demande->save();

            
             return redirect('demandes');
        }

        return view('auth.login');      

    }

     public function delete($id) 
     {
         if(Auth::check())
        {
            $demande = Demande::where('id', $id)->first();
            $demande->forceDelete();
            return redirect('demandes');
        }

        return view('auth.login');     
    }

}
