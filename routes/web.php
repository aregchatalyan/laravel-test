<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/register', function () {
    abort(404);
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', function () {
   Auth::logout();
   return redirect('/login');
})->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('companies', 'CompanyController');
    Route::resource('employees', 'EmployeeController');
});
