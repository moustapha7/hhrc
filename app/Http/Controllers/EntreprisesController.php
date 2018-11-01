<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Entreprise;


class EntreprisesController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check())
        {
            $entreprise = Entreprise::all();
            return view('entreprises.index',compact('entreprise'));
         }
        return view('auth.login'); 
    }

   
    public function create()
    {
       if(Auth::check())
        {
        return view('entreprises.create');

        }
        return view('auth.login'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check())
        {
        $this->validate($request,[
            'nomEntreprise'=>'required|string|max:255',
            'adresseEntreprise'=>'required',
            'emailEntreprise'=>'required',
            'telEntreprise'=>'required',
             'password'=>'required',
            
            ]);
        Entreprise::create($request->all());
        return redirect()->route('entreprises.index')->with('success','Entreprise créée avec success') ;

        }
        return view('auth.login'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $idEntreprise
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::check())
        {
        $entreprise  = Entreprise::find($id);
        return view('entreprises.show',compact('entreprise'));

        }
        return view('auth.login'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $idEntreprise
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         if(Auth::check())
        {
        $entreprise = Entreprise::find($id);
        return view('entreprises.edit',compact('entreprise'));

        }
        return view('auth.login'); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idEntreprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::check())
        {
         $this->validate($request,[
            'nomEntreprise'=>'required|string|max:255',
            'adresseEntreprise'=>'required',
            'emailEntreprise'=>'required',
            'telEntreprise'=>'required',
             'password'=>'required',
            ]);
        Entreprise::find($id)->update($request->all());
        return redirect()->route('entreprises.index')->with('success','Entreprise modifiée avec success') ;

        }
        return view('auth.login'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $idEntreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         if(Auth::check())
        {
            Entreprise::find($id)->delete();
            return redirect()->route('entreprises.index')->with('success','Entreprise bien supprimée') ;

        }
        return view('auth.login'); 
    }

}
