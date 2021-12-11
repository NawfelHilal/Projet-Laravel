<?php

use App\Models\Produits;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('home', ['produit' => Produits::paginate(10)]);
});*/

//Route::get('/',"App\\Http\\Controllers\\Shop\\MainController@index", ['produit' => Produits::paginate(5)])->name('homepage');
Auth::routes();
Route::get('/',"App\\Http\\Controllers\\Shop\\MainController@index")->name('homepage');

Route::get('/produit/{id}', "App\\Http\\Controllers\\Shop\\MainController@produit")->name('voir_produit');
Route::get('/produit/{id}/edit', "App\\Http\\Controllers\\Shop\\MainController@edit")->name('edit_produit');
Route::put('/produit/{id}/update', "App\\Http\\Controllers\\Shop\\MainController@update")->name('update_produit');
Route::delete('/produit/{id}/delete', "App\\Http\\Controllers\\Shop\\MainController@destroy")->name('delete_produit');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([], function (){
    Route::resource('post', "App\\Http\\Controllers\\Shop\\MainController" );
    //Route::get('{post}/edit',"App\\Http\\Controllers\\Shop\\MainController::edit");
   // Route::put('{post}/update', "App\Http\Controllers\Shop\MainController");
});
/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
