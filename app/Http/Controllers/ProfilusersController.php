<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profilusers;


class ProfilusersController extends Controller
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
            $profiluser = Profilusers::all();
            return view('profilusers.index',compact('profiluser'));
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
        return view('profilusers.create');

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
            'role'=>'required|string|max:255',
        
            ]);
        Profilusers::create($request->all());
        return redirect()->route('profilusers.index')->with('success','Profil bien  enrégistrée!!') ;

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
        $profiluser  =Profilusers::find($id);
        return view('profilusers.show',compact('profiluser'));

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
        $profiluser = Profilusers::find($id);
        return view('profilusers.edit',compact('profiluser'));

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
            'role'=>'required|string|max:255',
            
            
            ]);

        Profilusers::find($id)->update($request->all());
        return redirect()->route('profilusers.index')->with('success','Profil modifié avec success') ;
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
            Profilusers::find($id)->delete();
            return redirect()->route('profilusers.index')->with('success','Profil bien supprimée') ;

        }
        return view('auth.login'); 
    }
}
