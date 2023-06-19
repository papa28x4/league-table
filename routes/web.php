<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('results', 'ResultController@index')->name('results.index');

Route::post('results', 'ResultController@store')->name('results.store');

Route::get('standings', 'StandingController@index')->name('standings.index');

Route::get('standings/{standing}/results', 'StandingController@show')->name('standings.show');

Route::get('teams', 'TeamController@index')->name('teams.index');

Route::get('teams/{team}', 'TeamController@show')->name('teams.show');
