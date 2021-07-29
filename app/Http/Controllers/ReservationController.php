<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use  App\Models\{Reservation,Trajet};
//class Trajet extends Model


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Trajet=Trajet::all();
        return view('reservation.layout',[
         'Trajet'=>$Trajet]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reservation=Reservation::all();
        return view('admin.layout',[
         'reservation'=>$reservation
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Reservation::create([
            'prenom'=>$request->prenom,
            'nom'=>$request->nom,
            'datenais'=>$request->naissance,
            'villedepart'=>$request->a,
            'villearriver'=>$request->b,
            'datedepart'=>$request->c,
            'datearriver'=>$request->d,

        ]);
         $Trajet=Trajet::all();
        return view('reservation.layout',[
         'Trajet'=>$Trajet]);

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
