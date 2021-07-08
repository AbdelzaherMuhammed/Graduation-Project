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

Route::prefix('dashboard')->group(function () {
    Auth::routes([
        'register' => false
    ]);
});

Route::namespace('Front')->name('front.')->middleware('auth')->group(function () {

    Route::get('/', 'HomeController@index');

});

Route::get('logout', 'Auth\LoginController@logout')->name('patient.logout');
Route::get('/patient/login', 'Auth\LoginController@showPatientLoginForm')->name('login');
Route::post('/patient/login', 'Auth\LoginController@patientLogin')->name('patient.login');
Route::get('/patient/register', 'Auth\RegisterController@showPatientRegisterForm')->name('patient.register.show');
Route::post('/patient/register', 'Auth\RegisterController@createPatient')->name('patient.register');