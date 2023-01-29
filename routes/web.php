<?php

use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'MainController@index')->name('welcome');

// USERS DASHBOARD ROUTE BEGIN
Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::get('/', 'DashboardController@index')->name('user.dashboard');
});
Route::post('/user', 'DashboardController@regRef')->name('reg.ref');
Route::get('/user_/{place}', 'DashboardController@userView')->name('user.view');

// REPORT VIEW ROUTE
Route::get('/depv_repoRt', 'DepvreportController@depvReport')->name('depv.report');
Route::get('/investp_repoRt', 'DepvreportController@investpReport')->name('investp.report');

