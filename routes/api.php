<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/employes/getCountSexeParAn/', 'EmployeController@getCountSexeParAn');

Route::get('/employes/getbyCin/{cin}', 'EmployeController@getbyCin');
Route::get('/employes/getbyMatricule/{Matricule}', 'EmployeController@getbyMatricule');
Route::get('/employes/getCountSexe/', 'EmployeController@getCountSexe');
Route::get('/employes/getList/{startIndex}/{pageSize}/{sortBy}/{sortDir}', 'EmployeController@getAll');
Route::apiResource('employes', 'EmployeController');

Route::get('/ordremissions/getAll', 'OrdreMissionController@getAll');
Route::apiResource('ordremissions', 'OrdreMissionController');

Route::get('/formations/getAll', 'FormationController@getAll');
Route::apiResource('formations', 'FormationController');

Route::get('/logins/getList/{startIndex}/{pageSize}/{sortBy}/{sortDir}', 'LoginController@getAll');
Route::apiResource('logins', 'LoginController');

Route::get('/absences/getAll', 'AbsenceController@getAll');
Route::apiResource('absences', 'AbsenceController');

Route::get('/competences/getCountCompetence', 'CompetenceController@getCountCompetence');
Route::get('/competences/getList/{startIndex}/{pageSize}/{sortBy}/{sortDir}', 'CompetenceController@getAll');
Route::apiResource('competences', 'CompetenceController');

Route::get('/conges/getAll', 'CongeController@getAll');
Route::apiResource('conges', 'CongeController');

Route::get('/contrats/getAll', 'ContratController@getAll');
Route::apiResource('contrats', 'ContratController');

Route::get('/diplomes/getAll', 'DiplomeController@getAll');
Route::apiResource('diplomes', 'DiplomeController');

Route::get('/fichepaies/getList/{startIndex}/{pageSize}/{sortBy}/{sortDir}', 'FichePaieController@getAll');
Route::apiResource('fichepaies', 'FichePaieController');

Route::get('/indimnites/getList/{startIndex}/{pageSize}/{sortBy}/{sortDir}', 'IndimniteController@getAll');
Route::apiResource('indimnites', 'IndimniteController');

Route::get('/posts/getList/{startIndex}/{pageSize}/{sortBy}/{sortDir}', 'PostController@getAll');
Route::apiResource('posts', 'PostController');

Route::get('/retards/getAll', 'RetardController@getAll');
Route::apiResource('retards', 'RetardController');


/********** */


Route::get('/absences/countAbsByUser/{month}/{id}', 'AbsenceController@countAbsByUser');

Route::get('/retards/sumAbsByUser/{month}/{id}', 'RetardController@sumAbsByUser');

Route::get('/employeabsences/getList/{startIndex}/{pageSize}/{sortBy}/{sortDir}', 'EmployeAbsenceController@getAll');
Route::apiResource('employeabsences', 'EmployeAbsenceController');

Route::get('/employecompetences/getCompetence', 'EmployeCompetenceController@getCompetence');


Route::get('/employecompetences/getAll', 'EmployeCompetenceController@getAll');
Route::apiResource('employecompetences', 'EmployeCompetenceController');

Route::get('/employeconges/getList/{startIndex}/{pageSize}/{sortBy}/{sortDir}', 'EmployeCongeController@getAll');
Route::apiResource('employeconges', 'EmployeCongeController');

Route::get('/employecontrats/getContrat', 'EmployeContratController@getContrat');
Route::get('/employecontrats/getAll', 'EmployeContratController@getAll');
Route::apiResource('employecontrats', 'EmployeContratController');

Route::get('/employeformations/getAll', 'EmployeFormationController@getAll');
Route::apiResource('employeformations', 'EmployeFormationController');

Route::get('/employeindimnites/getAll', 'EmployeIndimniteController@getAll');
Route::apiResource('employeindimnites', 'EmployeIndimniteController');

Route::get('/employemissions/getList/{startIndex}/{pageSize}/{sortBy}/{sortDir}', 'EmployeMissionController@getAll');
Route::apiResource('employemissions', 'EmployeMissionController');

Route::get('/employeposts/getPostByIdemploye/{idemploye}', 'EmployePostController@getPostByIdemploye');

Route::get('/employeposts/getPost', 'EmployePostController@getPost');
Route::get('/employeposts/getAll', 'EmployePostController@getAll');
Route::apiResource('employeposts', 'EmployePostController');

Route::get('/employeretards/getList/{startIndex}/{pageSize}/{sortBy}/{sortDir}', 'EmployeRetardController@getAll');
Route::apiResource('employeretards', 'EmployeRetardController');

Route::get('/demandeconges/getAll', 'DemandeCongeController@getAll');
Route::apiResource('demandeconges', 'DemandeCongeController');

Route::post('/login', 'LoginController@login');

// Route::post('/employes', 'EmployeController@store');

