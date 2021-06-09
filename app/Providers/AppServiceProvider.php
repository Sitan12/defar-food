<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Commande;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

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
            View::composer('*' ,function($view){
                if(Auth::user())
                $view->with('com',Commande::where('user_id', Auth::user()->id)->get());
                else
                return redirect('login');
            });


       
      
    }
}
