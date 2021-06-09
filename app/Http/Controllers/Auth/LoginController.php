<?php

namespace App\Http\Controllers\Auth;

use App\Models\Plat;
use Illuminate\Http\Request;
use App\Models\ProfileRestaurant;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{

    use AuthenticatesUsers;

    
 public function login(Request $request){
  $input = $request->all();
  $this->validate($request,[
    'email' =>'required|email',
    'password' => 'required',
  ]);

  if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
  {
    if (auth()->user()->is_admin == 1){
      return view('isadmins.index');
    }else {
      $role = Auth::user()->role; 
        switch ($role) {
          case 'restaurant':
            return redirect('restaurant') ;
            break;
          case 'client':
            $restaurants =ProfileRestaurant::has('user')->get();
            return view('welcome',compact('restaurants'));
            break;
            case 'livreur':
              return redirect('livreur');
              break; 
          default:
            return '/home'; 
          break;
        }
    }
  } 
}
  
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}


