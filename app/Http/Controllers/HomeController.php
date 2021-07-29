<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Reservation;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        return view('acceuil.layout');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $reservation=Reservation::all();
        return view('admin.layout',[
         'reservation'=>$reservation
        ]);
    }
}
