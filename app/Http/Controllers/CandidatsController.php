<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Candidat;


class CandidatsController extends Controller
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
            $candidat = Candidat::all();
            return view('candidats.index',compact('candidat'));
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
        return view('candidats.create');

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
            'nom'=>'required|string|max:255',
            'prenom'=>'required',
            'adresse'=>'required',
            'numTel'=>'required',
            'email'=>'required',
            'password'=>'required',
            
            ]);
        Candidat::create($request->all());
        return redirect()->route('candidats.index')->with('success','Votre inscription a bien été enrégistrée!!') ;

        }
        return view('auth.login'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::check())
        {
        $candidat  =Candidat::find($id);
        return view('candidats.show',compact('candidat'));

        }
        return view('auth.login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::check())
        {
        $candidat = Candidat::find($id);
        return view('candidats.edit',compact('candidat'));

        }
        return view('auth.login');
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
        if(Auth::check())
        {
        $this->validate($request,[
            'nom'=>'required|string|max:255',
            'prenom'=>'required',
            'adresse'=>'required',
            'numTel'=>'required',
            'email'=>'required',
            'password'=>'required',
            
            ]);
        Candidat::find($id)->update($request->all());
        return redirect()->route('candidats.index')->with('success','Candidats modifié avec success') ;

        }
        return view('auth.login'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::check())
        {
            Candidat::find($id)->delete();
            return redirect()->route('candidats.index')->with('success','Candidats bien supprimée') ;

        }
        return view('auth.login'); 
    }
}
