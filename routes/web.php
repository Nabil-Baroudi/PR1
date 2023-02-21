<?php

use App\Http\Controllers\apiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::view('/', 'welcome');
Route::get('/index', [apiController::class, 'index']);

Route::view('/view', 'view');
Route::get('/get', [apiController::class, 'api']);
//in this next lines i was able to fetch a certian movie id and send it to the view by the name play trailer to show it's trailer passing the link to the controller.
Route::view('/viewTrailer,', 'viewTrailer');
Route::get('/viewTrailer/{id}', [apiController::class, 'trailer'])->name('playTrailer');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
