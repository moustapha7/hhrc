<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//Route des controllers roles
Route::group(['middleware' => ['web']], function ()
{
	Route::get("roles/create","RolesUserController@store");  

});

Route::get('/roles/create', 'RolesUserController@store')->name('roles');
















// Controller du CRUD

Route::resource('entreprises','EntreprisesController');
Route::resource('domaines','DomainesController');
Route::resource('candidats','CandidatsController');
Route::resource('specialites','SpecialitesController');
Route::resource('infopros','InfoprosController');
Route::resource('profilusers','ProfilusersController');
Route::resource('demandes','DemandesController');
Route::resource('affectations','AffectationsController');


Route::resource('produits','ProduitController');
Route::get('/produit/create', 'ProduitController@create')->name('produit_create');
Route::get('/produit/edit/{id}', 'ProduitController@edit')->name('produit_edit');
Route::post('/produit/add', 'ProduitController@add')->name('produit_add');
Route::post('/produit/update', 'ProduitController@update')->name('produit_update');
Route::get('/produit/delete/{id}', 'ProduitController@delete')->name('produit_delete');




//Route CRUD d' entreprise
Route::get('/entreprise/create', 'EntreprisesController@create')->name('entreprise_create');
Route::get('/entreprise/edit/{id}', 'EntreprisesController@edit')->name('entreprise_edit');
Route::post('/entreprise/add', 'EntreprisesController@add')->name('entreprise_add');
Route::post('/entreprise/update', 'EntreprisesController@update')->name('entreprise_update');
Route::get('/entreprise/delete/{id}', 'EntreprisesController@delete')->name('entreprise_delete');

Route::get('/entreprises/index', 'EntreprisesController@index')->name('entreprise_liste');



//Route CRUD de Specialite
Route::get('/specialite/create', 'SpecialitesController@create')->name('specialite_create');
Route::get('/specialite/edit/{id}', 'SpecialitesController@edit')->name('specialite_edit');
Route::post('/specialite/add', 'SpecialitesController@add')->name('specialite_add');
Route::post('/specialite/update', 'SpecialitesController@update')->name('specialite_update');
Route::get('/specialite/delete/{id}', 'SpecialitesController@delete')->name('specialite_delete');

Route::get('/specialites/index', 'SpecialitesController@index')->name('specialite_liste');


//Route CRUD de Demande
Route::get('/demande/create', 'DemandesController@create')->name('demande_create');
Route::get('/demande/edit/{id}', 'DemandesController@edit')->name('demande_edit');
Route::post('/demande/add', 'DemandesController@add')->name('demande_add');
Route::post('/demande/update', 'DemandesController@update')->name('demande_update');
Route::get('/demande/delete/{id}', 'DemandesController@delete')->name('demande_delete');

//Route::get('/demandes/index', 'DemandesController@index')->name('demande_liste');


//Route CRUD d' affectation
Route::get('/affectation/create', 'AffectationsController@create')->name('affectation_create');
Route::get('/affectation/edit/{id}', 'AffectationsController@edit')->name('affectation_edit');
Route::post('/affectation/add', 'AffectationsController@add')->name('affectation_add');
Route::post('/affectation/update', 'AffectationsController@update')->name('affectation_update');
Route::get('/affectation/delete/{id}', 'AffectationsController@delete')->name('affectation_delete');

Route::get('/affectations/index', 'affectationsController@index')->name('affectation_liste');


//Route CRUD d' infopro
Route::get('/infopro/create', 'InfoprosController@create')->name('infopro_create');
Route::get('/infopro/edit/{id}', 'InfoprosController@edit')->name('infopro_edit');
Route::post('/infopro/add', 'InfoprosController@add')->name('infopro_add');
Route::post('/infopro/update', 'InfoprosController@update')->name('infopro_update');
Route::get('/infopro/delete/{id}', 'InfoprosController@delete')->name('infopro_delete');

Route::get('/infopro/liste', 'InfoprosController@index')->name('infopro_liste');





Auth::routes();
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
