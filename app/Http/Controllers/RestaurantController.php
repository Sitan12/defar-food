<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use App\Models\User;
use App\Models\Livreur;
use App\Models\Commande;
use Illuminate\Http\Request;
use App\Models\ProfileRestaurant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RestaurantController extends Controller
{
    
    public function index()
    {
        $plats = Plat::all();
        $commandes = Commande::has('user')->get();
        $livreurs = User::all();
        return view('restos.index',compact('plats','commandes','livreurs'));
    }
   
    public function create()
    {
        return view('restos.create');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function store(Request $request)
    {
        $restaurant = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'role' => 'restaurant',
            'is_admin' => 0,
            'password' => Hash::make($request['password']),
        ]);

         ProfileRestaurant::create([
            'user_id' => $restaurant->id,
    
        ]);

        return redirect('login');
    }
    
    public function show(Plat $plat)
    {
        return view('welcome',compact('plat'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function AjoutPlat(Request $request){
        $request->validate([
            'title' => 'required',
            'image' => 'mimes:png,jpg,jpeg,jfif',
            'prix' => 'required',
        ]);    

        $plats = new Plat();
        $plats->user_id = Auth::user()->id;
        $plats->title = $request->title;
        $plats->description = $request->description;
        $imageName = null;

        if(request()->hasFile('image')){
            $uploadedImage = $request->file('image');
            $imageName = time() . '.' . $uploadedImage->getClientOriginalExtension();
            $destinationPath = public_path('/photoPlat/');
            $uploadedImage->move($destinationPath, $imageName);
            $uploadedImage->imagePath = $destinationPath . $imageName;
        }

        $plats->image = $imageName;
        $plats->prix = $request->prix;
        $plats->save();

        notify()->success("Plat Ajouté avec succès");

        return $this->index();
    }

   


}
