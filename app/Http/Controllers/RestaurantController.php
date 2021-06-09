<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\ProfileRestaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
=======
use App\Models\Plat;
use App\Models\User;
use App\Models\Livreur;
use App\Models\Commande;
use Illuminate\Http\Request;
use App\Models\ProfileRestaurant;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae

class RestaurantController extends Controller
{
    
    public function index()
    {
<<<<<<< HEAD
        return view('restos.index');
    }
   
=======
        $plats = Plat::all();
        $commandes = Commande::has('user')->get();
        $livreurs = User::all();
        return view('restos.index',compact('plats','commandes','livreurs'));
    }
   
    public function affichPlats($user){

        $restaurants = ProfileRestaurant::has('user')->get();
        //dd($restaurants);
        $plats = Plat::where('user_id',$user)->get();
        //dd($user);
        return view('plats.plat',compact('plats'));

    }
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
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
<<<<<<< HEAD
=======
            'longitude' =>  ['required'],
            'latitude' =>  ['required'],
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
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
<<<<<<< HEAD
    
        ]);

        return $this->index();
    }
    
    public function show($id)
    {
        //
=======
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
        ]);

        return redirect('login');
    }
    
    public function show()
    {
       
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
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
<<<<<<< HEAD
=======

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

   


>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
}
