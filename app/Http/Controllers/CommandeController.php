<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use App\Models\User;
use App\Models\Commande;
use Illuminate\Http\Request;
use App\Models\ProfileRestaurant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Notifications\CommandeAffectedToLivreur;

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
        
       
        $commande = new Commande();
        $commande->user_id = Auth::user()->id;
        $commande->plat_id = $request->plat_id;
        $commande->restaurant_id = $request->restaurant_id;
        $commande->livreur_id=null;
        $commande->quantite = 1;

        $commande->save();
        notify()->success("Commande effectuée <span class='badge badge-dark'> #$commande->user_id </span>!!!");
        return back();

    }

    public function panier(){

        $commandes = Commande::where('user_id', Auth::user()->id)->get();
        return view('panier.index',compact('commandes'));
    }

    public function pagePaiement(){
        return view('panier.paiement');
    }

    public function updateQte(Request $request){

        $rowId = $request->rowId;
        $commandes = Commande::find($rowId);
        $commandes->quantite = $request->newQte;

        $commandes->update();
        echo 'Mise a jour de la quantite';
        // update

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
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

   

    public function deleteCommande($id){
        $commande = Commande::find($id);
       if($commande!=null){
           $commande->delete(); 
       }

       notify()->success('La commande a été supprimé!!!');
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
       
    }
}
