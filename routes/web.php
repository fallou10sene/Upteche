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


Route::get('/', 'HomeController@index');
Route::post('connexion', 'HomeController@connexion');

Route::get('inscription', 'HomeController@inscription');
Route::post('enregistre', 'HomeController@enregistre');


Route::delete('supprimer{admin}', 'SupprimerController@supprimeradmin')->name('supprimeradmin');
Route::delete('detacherprof{prof}', 'SupprimerController@detacherprof')->name('detacherprof');
Route::delete('enleveretu{etu}', 'SupprimerController@enleveretu')->name('enleveretu');



Route::get('ajouteremploidutemps', 'EmploisController@ajouteremplois');
/*ajouter emplois du temps */
Route::post('emploisl1com', 'EmploisController@emploisl1com');
Route::post('emploisl1info', 'EmploisController@emploisl1info');
Route::post('emploisl1multi', 'EmploisController@emploisl1multi');

Route::post('emploisl2com', 'EmploisController@emploisl2com');
Route::post('emploisl2info', 'EmploisController@emploisl2info');
Route::post('emploisl2multi', 'EmploisController@emploisl2multi');

Route::post('emploisl3com', 'EmploisController@emploisl3com');
Route::post('emploisl3info', 'EmploisController@emploisl3info');
Route::post('emploisl3multi', 'EmploisController@emploisl3multi');

Route::post('emploism1com', 'EmploisController@emploism1com');
Route::post('emploism1info', 'EmploisController@emploism1info');
Route::post('emploism1multi', 'EmploisController@emploism1multi');

Route::post('emploism2com', 'EmploisController@emploism2com');
Route::post('emploism2info', 'EmploisController@emploism2info');
Route::post('emploism2multi', 'EmploisController@emploism2multi');
/*Fin ajouter emplois du temps */
/*Afficher emplois du temps */
Route::get('afficherl1com', 'EmploisController@afficherl1com');
Route::get('afficherl2com', 'EmploisController@afficherl2com');
Route::get('afficherl3com', 'EmploisController@afficherl3com');
Route::get('afficherm1com', 'EmploisController@afficherm1com');
Route::get('afficherm2com', 'EmploisController@afficherm2com');
/*Route::get('afficherl1info', 'EmploisController@afficherl1info');
Route::get('afficherl1multi', 'EmploisController@afficherl1multi');*/














Route::get('listedesteachers', 'EmploisController@listeteachers')->name('listedesteachers');
Route::get('listedesstudents', 'EmploisController@listestudents')->name('listedesstudents');
Route::get('listedesadministrator', 'EmploisController@listeadmin')->name('listedesadministrator');






Route::get('administrator/inscription', 'AdministratorController@inscription')
			->name('inscription')->middleware('App\Http\middleware\Auth');
Route::post('administrator/store', 'AdministratorController@store');



Route::get('deconnexion', 'HomeController@deconnexion');


Route::get('profiladmin{admin}', 'EmploisController@profiladmin')->name('profiladmin');
Route::get('profilprof{prof}', 'EmploisController@profilprof')->name('profilprof');
Route::get('profiletu{etu}', 'EmploisController@profiletu')->name('profiletu');




