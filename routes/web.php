<?php

use App\Models\Plat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RestaurantController;
use App\Models\ProfileRestaurant;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(User $user){
    
    $restaurants = ProfileRestaurant::has('user')->get();
    return view('welcome',compact('restaurants','user'));
});
Route::get('/apropos', function(){
        return view('apropos');
})->name('apropos');
Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profiles/{user}', 'App\Http\Controllers\ProfileController@show')->name('profiles.show');
Route::get('/profiles/{user}/edit',  'App\Http\Controllers\ProfileController@edit')->name('profiles.edit');
Route::put('/profiles/{user}',  'App\Http\Controllers\ProfileController@update')->name('profiles.update');

Route::get('/restaurant/profile/{user}', 'App\Http\Controllers\ProfileRestaurantController@show')->name('restaurant.profile');
Route::get('/restaurant/{user}/editProfile',  'App\Http\Controllers\ProfileRestaurantController@edit')->name('restaurant.EditProfile');
Route::patch('/restaurant/{user}',  'App\Http\Controllers\ProfileRestaurantController@update')->name('restaurant.updateProfile');

// Plats
Route::post('/restaurant/plat/', 'App\Http\Controllers\RestaurantController@AjoutPlat')->name('plat.add');
Route::get('/restaurant/plat/{user}', 'App\Http\Controllers\RestaurantController@affichPlats')->name('plat.liste');
Route::resource('restaurant', 'App\Http\Controllers\RestaurantController');

//Commande
Route::resource('commande', 'App\Http\Controllers\CommandeController');
Route::get('/panier/update', "App\Http\Controllers\CommandeController@updateQte");
Route::get('/panier/paiement', "App\Http\Controllers\CommandeController@pagePaiement");

//panier
Route::get('/panier','App\Http\Controllers\CommandeController@panier')->name('panier');
Route::delete('/panier/commande/{id}','App\Http\Controllers\CommandeController@deleteCommande')->name('panier.delete');

Route::post('/panier/ajouter','App\Http\Controllers\CartController@store')->name('cart.store');

Route::get('/livreur/profile/{user}', 'App\Http\Controllers\ProfileLivreurController@show')->name('livreur.profile');
Route::get('/livreur/{user}/edit',  'App\Http\Controllers\ProfileLivreurController@edit')->name('livreur.EditProfile');
Route::patch('/livreur/{user}',  'App\Http\Controllers\ProfileLivreurController@update')->name('livreur.updateProfile');
Route::resource('livreur', 'App\Http\Controllers\LivreurController');


Route::resource('clients', 'App\Http\Controllers\ClientController');
// Route::get('/apropos','App\Http\Controllers\HomeController@apropos')->name('apropos');




Route::resource('isadmins', 'App\Http\Controllers\IsAdminController')->middleware('App\Http\Middleware\IsAdmin');









