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
    return view('index');
});

Route::get('/patients', 'PatientController@index');

Route::get('/doctors', 'DoctorsController@index');

Route::get('/patients/{patient}', 'PatientController@show');

Route::get('/doctors/{doctor}', 'DoctorsController@show');

/*
 * TODO add routes, controllers and migrations for Doctors and Records
 */
