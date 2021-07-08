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

Route::get('/home', 'DashboardController')->name('home');

Route::resource('users', 'UserController');
Route::resource('articles', 'ArticleController');
Route::resource('labs', 'LabController');
Route::resource('sponsors', 'SponsorController');
Route::resource('tools', 'ToolController');
Route::resource('tutorials', 'TutorialController');
Route::resource('questions', 'QuestionController');
Route::resource('tests', 'TestController');
//storing images of trix editor
