<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use App\Models\Commande;
use App\Models\User;
use App\Notifications\CommandeAffectedToLivreur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plats= Plat::all();
       
        return view('welcome', compact('plats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plats = Plat::all();
       
        $commande = new Commande();
        $commande->user_id = Auth::user()->id;
        $commande->plat_id = $request->plat_id;
        $commande->restaurant_id = $request->restaurant_id;
        $commande->livreur_id=null;

        $commande->save();
        notify()->success("Commande effectuée <span class='badge badge-dark'> #$commande->user_id </span>!!!");
        return back();

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plat $plats)
    {
        return view('welcome',compact('plats'));
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commande $commande)
    {
        
        $commande->livreur_id = $request->livreur_id;
        $commande->update();

        notify()->success("Atturibution du livreur avec succés");

        $commande->notify(new CommandeAffectedToLivreur($commande));

        return back();
       
        
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
