<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use  App\Models\{Voiture,Trajet,Chauffeur};
use App\Http\Controllers\VoitureController;
class ChauffeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Trajet=Trajet::all();
        $voiture=Voiture::all();
        return view('admin.layout',[
         'Trajet'=>$Trajet,
         'voiture'=>$voiture
        
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Chauffeur::create([
            'numpermis'=>$request->a,
            'nom'=>$request->b,
            'prenom'=>$request->c,
            'age'=>$request->d,
            'tel'=>$request->e,
            'busAffecte'=>$request->f,
            'ville'=>$request->g,

        ]);
        $Trajet=Trajet::all();
        $voiture=Voiture::all();
        return view('chauffeur.layout',[
         'Trajet'=>$Trajet,
         'voiture'=>$voiture
        
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
