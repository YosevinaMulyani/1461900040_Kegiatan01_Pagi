<?php

use App\Http\Controllers\HomeController;
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
    return "Hello Word";
});
Route::get('/home', [HomeController::class, 'index']);
Route::get('/home/artikel', [HomeController::class, 'artikel']);
Route::get('/home/kontak', [HomeController::class, 'kontak']);

