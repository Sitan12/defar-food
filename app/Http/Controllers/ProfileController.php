<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\File;
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
use GuzzleHttp\Handler\Proxy;

class ProfileController extends Controller

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
        $profile = Profile::where('user_id' === $user_id );
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user, Request $request)
    {
       $data = request()->validate([
            'numero' => 'required',
            'adresse' => 'required',
            'photo' => 'mimes:png,jpg,jpeg,jfif',
<<<<<<< HEAD
        ]);    

        // if(request('photo'))
        // {
        //     $photoPath = request('photo')->store('photoProfile', 'public');
        //     $photo = Image::make(public_path("/storage/{$photoPath}"))->fit(800,800);
        //     dd($photoPath);
        //     $photo->save();
        //     // Auth()->user()->profile->update(array_merge($data, ['photo' => $photoPath]));
        // }

        $imageName = null;
        if(request()->hasFile('photo')){
            $uploadedImage = $request->file('photo');
            $imageName = time() . '.' . $uploadedImage->getClientOriginalExtension();
            $destinationPath = public_path('/photoProfile/');
            $uploadedImage->move($destinationPath, $imageName);
            $uploadedImage->imagePath = $destinationPath . $imageName;
            // dd($imageName);
           
            // $user->profile->photo = $imageName;
        }
        Auth()->user()->profile->update(array_merge($data, ['photo' => $imageName]));
        //  Auth()->user()->profile->update($data);
=======
            'longitude' =>  'required',
            'latitude' =>  'required',
        ]);    

        if ($request->hasFile('photo')){
            $image_path = public_path("/photoProfile/".$user->profile->photo);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $bannerImage = $request->file('photo');
            $imgName = $bannerImage->getClientOriginalName();
            $destinationPath = public_path('/photoProfile/');
            $bannerImage->move($destinationPath, $imgName);
          } else {
            $imgName = $user->profile->photo;
          }
          $user->profile->photo= $imgName;
        Auth()->user()->profile->update(array_merge($data, ['photo' => $imgName]));
        
      
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae

        
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        
        $user->update($data);
        
        return redirect()->route('profiles.show', $user);
       

    }

}
