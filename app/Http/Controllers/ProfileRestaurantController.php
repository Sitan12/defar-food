<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\ProfileRestaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
=======
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ProfileRestaurant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae

class ProfileRestaurantController extends Controller
{
    public $users;

    public function __construct()
    {
        $this->users = User::getAllUsers();
        $this->middleware('auth');
    } 

    public function show(User $user)
    {
        $user_id = Auth::user()->id;
        $profiles = ProfileRestaurant::has('user')->get();
        // $profiler = ProfileRestaurant::where('user_id' === $user_id );
        return view('restos.profile', compact('user', 'profiles'));
    }

    public function edit(User $user)
    {
        $profiles = ProfileRestaurant::has('user')->get();
        return view('restos.EditProfile', compact('user', 'profiles'));
    }

<<<<<<< HEAD
    public function update(User $user)
    {
=======
    public function update(User $user, Request $request)
    {
        
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
       $data = request()->validate([
            'adresse' => '',
            'telephone' => '',
            'socialnetwork' => '',
            'categorie' => '',
<<<<<<< HEAD
        ]);    
        
         Auth()->user()->profileRestaurant->update($data);
         
=======
            'description' => '',
        ]);  

        if ($request->hasFile('photo')){
            $image_path = public_path("/photoProfile/".$user->profileRestaurant->photo);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $bannerImage = $request->file('photo');
            $imgName = $bannerImage->getClientOriginalName();
            $destinationPath = public_path('/photoProfile/');
            $bannerImage->move($destinationPath, $imgName);
          } else {
            $imgName = $user->profileRestaurant->photo;
          }
          $user->profileRestaurant->photo= $imgName;
        Auth()->user()->profileRestaurant->update(array_merge($data, ['photo' => $imgName]));
      
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
        // update for user
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $user->update($data);

        return $this->show($user);

    }
}
