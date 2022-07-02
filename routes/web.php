<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
Route::get('/',[PostController::class,'accueille']);
Route::get('/tousbien',[PostController::class,'tousbien']);
Route::get('/recherche',[PostController::class,'recherche']);

Route::get('/inscription',[PostController::class,'inscription']);

Route::post('/inscription',[PostController::class,'inscri']);
Route::get('/connexion',[PostController::class,'connexion']);
Route::post('/connexion',[PostController::class,'connect']);
Route::post('/acceuil',[PostController::class,'recupere']);

Route::get('/admin',[PostController::class,'admin']);
Route::get('/layout',[PostController::class,'index']);

Route::get('/acceuil', [App\Http\Controllers\PostController::class, 'acc'])->name('acceuil');
Route::get('vente', [App\Http\Controllers\PostController::class, 'ven'])->name('ven');
//ajout d'un bien
Route::post('/vente', [App\Http\Controllers\GestionController::class, 'store_bien'])->name('store_bien');
Route::post('/location', [App\Http\Controllers\GestionController::class, 'store_loc'])->name('store_loc');
Route::post('/chambre', [App\Http\Controllers\GestionController::class, 'store_ch'])->name('store_ch');
Route::post('/affect', [App\Http\Controllers\GestionController::class, 'store_aff'])->name('store_aff');
Route::get('/inscription',[PostController::class,'inscription']);
//list des bien
Route::get('/list', [App\Http\Controllers\GestionController::class, 'index_bien'])->name('index_bien');
Route::get('/list_bien', [App\Http\Controllers\GestionController::class, 'index_bien2'])->name('index_bien2');
Route::get('/list_loc', [App\Http\Controllers\GestionController::class, 'index_loc'])->name('index_loc');
Route::get('/list_loc2', [App\Http\Controllers\GestionController::class, 'index_loc2'])->name('index_loc2');
Route::get('/list_ch', [App\Http\Controllers\GestionController::class, 'index_ch'])->name('index_ch');
Route::get('/list_aff', [App\Http\Controllers\GestionController::class, 'index_aff'])->name('index_aff');
Route::get('/list_insc', [App\Http\Controllers\GestionController::class, 'index_user'])->name('index_user');
//edition des biens
Route::get('/edit_bien/{id}','App\Http\Controllers\GestionController@edit_bien')->name('edit_bien');
Route::get('/edit_loc/{id}','App\Http\Controllers\GestionController@edit_loc')->name('edit_loc');
Route::get('/edit_ch/{id}','App\Http\Controllers\GestionController@edit_ch')->name('edit_ch');
Route::get('/edit_aff/{id}','App\Http\Controllers\GestionController@edit_aff')->name('edit_aff');
Route::get('/edit_user/{id}','App\Http\Controllers\GestionController@edit_user')->name('edit_user');

//mise à jour pour la suppression
Route::put('/update_loc/{id}','App\Http\Controllers\GestionController@update_loc')->name('update_loc');
Route::put('/update_bien/{id}','App\Http\Controllers\GestionController@update_bien')->name('update_bien');
Route::put('/update_aff/{id}','App\Http\Controllers\GestionController@update_aff')->name('update_aff');
Route::put('/update_user/{id}','App\Http\Controllers\GestionController@update_user')->name('update_user');

//supresssion des biens
Route::delete('/list_bien/{id}','App\Http\Controllers\GestionController@destroy_bien')->name('destroy_bien');
Route::delete('/list_loc/{id}','App\Http\Controllers\GestionController@destroy_loc')->name('destroy_loc');
Route::delete('/acceuil/{id}','App\Http\Controllers\GestionController@destroy_user')->name('destroy_user');

//ajouter un visite
Route::get('/list_visite', [App\Http\Controllers\GestionController::class, 'index_visite'])->name('index_visite');
Route::get('visite', [App\Http\Controllers\GestionController::class, 'create'])->name('create');
Route::get('location', [App\Http\Controllers\GestionController::class, 'create_ch'])->name('create_ch');
Route::get('chambre', [App\Http\Controllers\GestionController::class, 'create_loc'])->name('create_loc');
Route::get('affect', [App\Http\Controllers\GestionController::class, 'create_aff'])->name('create_aff');
Route::post('/visite', [App\Http\Controllers\GestionController::class, 'store_visite'])->name('store_visite');
Route::post('/chambre', [App\Http\Controllers\GestionController::class, 'store_ch'])->name('store_ch');
Route::get('/edit/{id}','App\Http\Controllers\GestionController@edit')->name('edit');
Route::put('/update_visite/{id}','App\Http\Controllers\GestionController@update')->name('update_visite');
Route::delete('/list_visite/{id}','App\Http\Controllers\GestionController@destroy_visite')->name('destroy_visite');
//afectation de bien
Route::get('/affect', [App\Http\Controllers\GestionController::class, 'affecter'])->name('affecter');
Route::get('/list_type', [App\Http\Controllers\GestionController::class, 'typebien'])->name('typebien');
//Le search barre
Route::get('/search', [App\Http\Controllers\GestionController::class, 'search'])->name('search');
Route::get('/cherch', [App\Http\Controllers\GestionController::class, 'cherch'])->name('cherch');
Route::get('/searc', [App\Http\Controllers\GestionController::class, 'searc'])->name('searc');
Route::get('/chercher', [App\Http\Controllers\GestionController::class, 'chercher'])->name('chercher');
Route::get('/nom', [App\Http\Controllers\GestionController::class, 'nom'])->name('nom');
Route::get('/quartier', [App\Http\Controllers\GestionController::class, 'quartier'])->name('quartier');
Route::get('/nego', [App\Http\Controllers\GestionController::class, 'nego'])->name('nego');
Route::get('/etat', [App\Http\Controllers\GestionController::class, 'etat'])->name('etat');
Route::get('/ty', [App\Http\Controllers\GestionController::class, 'ty'])->name('ty');
// Route::get('/search','GestionController@search');
//
Route::get('type', [App\Http\Controllers\GestionController::class, 'add'])->name('add');
Route::get('/list_type', [App\Http\Controllers\GestionController::class, 'index_type'])->name('index_type');
Route::post('type_bien/type', [App\Http\Controllers\GestionController::class, 'store_type'])->name('store_type');
Route::get('/edite/{id}','App\Http\Controllers\GestionController@edite')->name('edite');
Route::put('/update_type/{id}','App\Http\Controllers\GestionController@update_type')->name('update_type');
Route::delete('/list_type/{id}','App\Http\Controllers\GestionController@destroy_type')->name('destroy_type');
Route::delete('/list_ch/{id}','App\Http\Controllers\GestionController@destroy_ch')->name('destroy_ch');
Route::delete('/list_aff/{id}','App\Http\Controllers\GestionController@destroy_aff')->name('destroy_aff');
Route::get('/list_type', [App\Http\Controllers\GestionController::class, 'index_type'])->name('index_type');

//fonction de recherche
Route::get('papy', [App\Http\Controllers\GestionController::class, 'papy']);
Route::get('papa', function (){
    return view('papa');
});
