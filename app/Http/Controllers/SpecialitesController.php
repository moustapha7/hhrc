<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Domaine;
use Illuminate\Support\Facades\Input;
use App\Specialite;

class SpecialitesController extends Controller
{

    public function __construct(){
      //  $this->middleware('auth');
    }
    
    public function index() 
    {
         if(Auth::check())
        {
            return view('specialites.specialite_liste',
            [
                'specialites' => Specialite::all()
            ]);
        }
        return view('auth.login');       
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
     {
         if(Auth::check())
        {
            return view('specialites.specialite_add',
            [
                'domaines'=>Domaine::all()
            ]);
        }
        return view('auth.login');       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
      {
         if(Auth::check())
        {
             $specialite = Specialite::where('id', $id)
                ->first();
            return view('specialites.specialite_update',
                [
                    'specialite' => $specialite ,
                    'domaines'=>Domaine::all()
                ]

            );
        }
        return view('auth.login');       
    }

    public function store(Request $request)
    {
        
        if(Auth::check())
        {
            $specialite = Specialite::create($request->all());

             return redirect()->route('specialites') ;
        }
        return view('auth.login');        

           
    }


     public function modif(Request $request)
    {
        if(Auth::check())
        {
            $id=$request->get('id');
            $specialite = Specialite::where("id",$id)->first();
            $specialite->libelle = $request->get('libelle');
            $specialite->description = $request->get('description');
            $specialite->domaines_id = $request->get('domaines_id');
            $specialite->save();
           
            return redirect()->route('specialites') ;
        }
        return view('auth.login');       
    }

     public function storeDom(Request $request)
    {
        if(Auth::check())
        {
            $domaine = Domaine::create($request->all());
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
            $specialite = new Specialite();
            $specialite->libelle = Input::get('libelle');
            $specialite->description = Input::get('description');
            
            $specialite->domaines_id = Input::get('domaine');
           $specialite->save();

            
             return redirect('specialites');
            // return view('specialites', ['specialites' => Specialite::all()] );
        }
        return view('auth.login');        
               
    }


     public function update()
     {
        if(Auth::check())
        {
            $specialite = Specialite::where('id', Input::get('id'))->first();
            $specialite->libelle = Input::get('libelle');
            $specialite->description = Input::get('description');
            
            $specialite->domaines_id = Input::get('domaine');
            $specialite->save();

             return redirect('specialites');
          //  return view('specialites', ['specialites' => Specialite::all()] );
         }
        return view('auth.login');       
    }

    public function delete($id) 
    {
        if(Auth::check())
        {
            $specialite = Specialite::where('id', $id)->first();
            $specialite->forceDelete();
            return redirect('specialites');
        }
        return view('auth.login');       
    }




}
