<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
=======
use App\Models\Commande;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
        //
=======
            View::composer('*' ,function($view){
                if(Auth::user())
                $view->with('com',Commande::where('user_id', Auth::user()->id)->get());
                else
                return redirect('login');
            });


       
      
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
    }
}
