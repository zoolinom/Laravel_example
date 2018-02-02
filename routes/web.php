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

/*
 * TODO Add doctors and records to database
 * TODO Add to view records when click on patient
 * TODO Add buttons for adding/changing/deleting of patients, doctors, records
 * TODO Add authentication
 * TODO Add factory for database seeding
 * TODO Add About page
 * TODO Add some tests
 */

Route::get('/', function () {
    return view('index');
});

Route::get('/patients', 'PatientController@index');

Route::get('/doctors', 'DoctorsController@index');

Route::get('/records', 'RecordsController@index');

Route::get('/patients/create', 'PatientController@create');

Route::get('/doctors/create', 'DoctorsController@create');

Route::get('/records/create', 'RecordsController@create');

Route::get('/patients/{patient}', 'PatientController@show');

Route::get('/doctors/{doctor}', 'DoctorsController@show');

Route::get('/records/{record}', 'RecordsController@show');

Route::post('/patients', 'PatientController@store');

Route::post('/doctors', 'DoctorsController@store');

Route::post('/records', 'RecordsController@store');
