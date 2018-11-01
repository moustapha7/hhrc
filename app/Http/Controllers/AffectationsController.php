<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Affectation;
use App\Candidat;
use App\Demande;
use Illuminate\Support\Facades\Input;
class AffectationsController extends Controller
{

     public function __construct(){
      //  $this->middleware('auth');
    }

     public function index() 
    {
         if(Auth::check())
        {

            return view('affectations.affectation_liste',
            [
                'affectations' => Affectation::all()
            ]);
        }
        return view('auth.login');     
    }

    public function create()
     {
         if(Auth::check())
        {
            return view('affectations.affectation_add',
            [
               
                'candidats'=>Candidat::all(),
                'demandes'=>Demande::all()
            ]);
        }
        return view('auth.login');     
    }


    public function edit($id)

     {
         if(Auth::check())
        {

            $affectation = Affectation::where('id', $id)->first();
            return view('affectations.affectation_update',
                [
                    'affectation' => $affectation,               
                    'candidats'=>Candidat::all(),
                    'demandes'=>Demande::all()
                ]

            );
         }
        return view('auth.login');    
    }

     public function store(Request $request)
    {
         if(Auth::check())
        {

            $affectation = Affectation::create($request->all());

             return redirect()->route('affectations') ;


        }
        return view('auth.login');   
    }


     public function modif(Request $request)
    {
         if(Auth::check())
        {

        $id=$request->get('id');
        $affectation =Affectation::where("id",$id)->first();
        $affectation->candidats_id = $request->get('candidats_id');
        $affectation->demandes_id = $request->get('demandes_id');
        $affectation->dateAffectation = $request->get('dateAffectation');
        $affectation->libelle = $request->get('libelle');      
        $affectation->save();
       
        return redirect()->route('affectations') ;
         }

        return view('auth.login');   
    }


     public function storeCand(Request $request)
    {
         if(Auth::check())
        {

        $candidat = Candidat::create($request->all());
         }

        return view('auth.login');   

    }



    public function storeDemande(Request $request)
    {
         if(Auth::check())
        {
        $demande = Demande::create($request->all());
         }

        return view('auth.login');  

    }

    public function findCandidat(Request $request)
     {

        if(Auth::check())
        {

            $nom=$request->get('nom');
            $candidat =Candidat::where("nom",$nom)->first();
         }

        return view('auth.login');  
    }


    public function findDemande(Request $request) 

    {    if(Auth::check())
        {

            $libelle=$request->get('libelle');
            $demande =Demande::where("libelle",$libelle)->first();
         }

        return view('auth.login');      
     
    }


     public function add()
      {
        if(Auth::check())
        {


                $affectation = new Affectation();

                $affectation->candidats_id = Input::get('candidat');
                $affectation->demandes_id = Input::get('demande');
                $affectation->dateAffectation = Input::get('dateAffectation');
                $affectation->libelle= Input::get('libelle');
               
                $affectation->save();

                
                 return redirect('affectations');
                // return view('specialites', ['specialites' => Specialite::all()] );
         }

        return view('auth.login');     
           
    }

    public function update()
     {
        if(Auth::check())
        {


            $affectation = Affectation::where('id', Input::get('id'))->first();

           $affectation->candidats_id = Input::get('candidat');
            $affectation->demandes_id = Input::get('demande');
            $affectation->dateAffectation = Input::get('dateAffectation');
            $affectation->libelle= Input::get('libelle');

            $affectation->save();

             return redirect('affectations');
         }

        return view('auth.login');       
    }

     public function delete($id) 
     {
         if(Auth::check())
        {

        $affectation = Affectation::where('id', $id)->first();
        $affectation->forceDelete();
        return redirect('affectations');

        }

        return view('auth.login'); 
    }


}
