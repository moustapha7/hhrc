<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Domaine;
use App\Demande;

class DomainesController extends Controller
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
            $domaine = Domaine::all();
            return view('domaines.index',compact('domaine'));
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
        return view('domaines.create');

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
            'libelle'=>'required|string|max:255',
            'description'=>'required',
            
            ]);
        Domaine::create($request->all());
        return redirect()->route('domaines.index')->with('success','Domaine bien  enrégistrée!!') ;

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
        $domaine  =Domaine::find($id);
        return view('domaines.show',compact('domaine'));

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
        $domaine = Domaine::find($id);
        return view('domaines.edit',compact('domaine'));

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
            'libelle'=>'required|string|max:255',
            'description'=>'required',
            
            ]);

        Domaine::find($id)->update($request->all());
        return redirect()->route('domaines.index')->with('success','Domaines modifié avec success') ;

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
            Domaine::find($id)->delete();
            return redirect()->route('domaines.index')->with('success','Domaines bien supprimée') ;

        }
        return view('auth.login'); 
    }
    
}
