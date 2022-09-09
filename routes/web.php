<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardsNoticeController;
use App\Http\Controllers\NewsApiController;

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

Route::get('/Noticias', [CardsNoticeController::class, 'index']);
Route::get('/Noticias/Save', [CardsNoticeController::class, 'store']);


Route::get('/Noticas', [NewsApiController::class, 'index']);
Route::get('/Noticas/Fontes', [NewsApiController::class, 'fontesNoticias']);