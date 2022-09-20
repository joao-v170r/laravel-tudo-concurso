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

Route::get('/noticias', [CardsNoticeController::class, 'index']);
Route::get('/noticias/save', [CardsNoticeController::class, 'store']);

Route::get('/infor-noticas', [NewsApiController::class, 'index']);
Route::get('/infor-noticas/fontes', [NewsApiController::class, 'fontesNoticias']);