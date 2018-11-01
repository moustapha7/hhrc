<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Infopro;
use App\Candidat;

class InfoprosController extends Controller
{


     public function __construct(){
      //  $this->middleware('auth');
    }

     public function index() 
    {
         if(Auth::check())
        {
            return view('infopros.infopro_liste',
            [
                'infopros' => Infopro::all()
            ]);
        }
        return view('auth.login');     
    }

    public function create()
     {
         if(Auth::check())
        {
            return view('infopros.infopro_add',
            [
               
                'candidats'=>Candidat::all(),
                'specialites'=>Specialite::all()
            ]);

        }
        return view('auth.login');     
    }

    public function edit($id)
     {
         if(Auth::check())
        {
            $infopro = Infopro::where('id', $id)->first();
            return view('infopros.infopro_update',
                [
                    'infopro' => $infopro,
                    'candidats' => Candidat::all(),
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
            $infopro = Infopro::create($request->all());

             return redirect()->route('infopros') ;
        }
        return view('auth.login');      

       
    }


    public function modif(Request $request)
    {
         if(Auth::check())
        {
            $id=$request->get('id');
            $infopro =Infopro::where("id",$id)->first();
            $infopro->candidats_id = $request->get('candidats_id');
            $infopro->niveauFormation = $request->get('niveauFormation');
            $infopro->nbreAnneeExperience = $request->get('nbreAnneeExperience');
            $infopro->lettreMotive = $request->get('lettreMotive');
            $infopro->disponibilite = $request->get('disponibilite');
            $infopro->cv = $request->get('cv');
            $infopro->specialites_id = $request->get('specialites_id');
            $infopro->save();
           
            return redirect()->route('infopros') ;
         }
        return view('auth.login');    
    }


     public function storeCandi(Request $request)
    {
         if(Auth::check())
        {
            $candidat = Candidat::create($request->all());

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


    public function findCandidats(Request $request) 
    {    if(Auth::check())
        {
            $nom=$request->get('nom');
            $candidat =Candidat::where("nom",$nom)->first();
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
            $infopro = new Infopro();

             $infopro->candidats_id = Input::get('candidat');
              $infopro->niveauFormation = Input::get('niveauFormation');
             $infopro->nbreAnneeExperience = Input::get('nbreAnneeExperience');
             $infopro->lettreMotive = Input::get('lettreMotive');
             $infopro->disponibilite = Input::get('disponibilite');
              $infopro->cv = Input::get('cv');
             $infopro->specialites_id = Input::get('specialite');
            $infopro->save();

            
             return redirect('infopros');
            // return view('specialites', ['specialites' => Specialite::all()] );
        }
        return view('auth.login');      
               
    }

    public function update()
     {
         if(Auth::check())
        {
             $infopro = Infopro::where('id', Input::get('id'))->first();

             $infopro->candidats_id = Input::get('candidat');
              $infopro->niveauFormation = Input::get('niveauFormation');
             $infopro->nbreAnneeExperience = Input::get('nbreAnneeExperience');
             $infopro->lettreMotive = Input::get('lettreMotive');
             $infopro->disponibilite = Input::get('disponibilite');
              $infopro->cv = Input::get('cv');
             $infopro->specialites_id = Input::get('specialite');
            $infopro->save();

            
             return redirect('infopros');
        }
        return view('auth.login');      

    }

     public function delete($id) 
     {
         if(Auth::check())
        {
           $infopro = Infopro::where('id', $id)->first();
           $infopro->forceDelete();
            return redirect('infopros');
        }
        return view('auth.login');     
    }


}
