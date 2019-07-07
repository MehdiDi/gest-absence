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

//Enseignant Routes
Route::get('/enseignant/register', 'EnseignantController@register')->name('ensRegView');
Route::post('/enseignant/register', 'EnseignantController@registerUser')->name('ensReg');

Route::get('/', 'FiliereController@index');
Route::get('/home', 'FiliereController@index');
Route::get('/filieres/{idF}', 'FiliereController@show');
Route::get('/filieres/groups/{idG}', 'GroupController@index');

Route::get('/absences/new/{idF}/{idE}', 'AbsenceController@index');
Route::post('/absences/new/', 'AbsenceController@create')->name('new_absence');
Route::get('/absences/list/{idM}/{idE}', 'AbsenceController@show');
Route::get('absences/modules/{idF}/{idE}', 'AbsenceController@modules');

//Chef departement routes
Route::get('chef-dept/filieres', 'FiliereController@getFilieres');

Route::get('chef-dept/filieres/{idF}', 'GroupController@getGroups');
Route::post('chef-dept/filieres', 'GroupController@new')->name('new_group');

Route::get('chef-dept/etudiants/{idF}', 'EtudiantController@index');
Route::get('chef-dept/new-etudiant/{idF}', 'EtudiantController@new');
Route::get('chef-dept/filieres/{idF}/groups/{idG}', 'EtudiantController@chef_etudiants');
Route::post('chef-dept/new-etudiant', 'EtudiantController@store')->name('new_etudiant');
