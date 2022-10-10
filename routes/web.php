<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardsNoticeController;
use App\Http\Controllers\NewsApiController;
use App\Http\Controllers\ConcursoController;
use App\Http\Controllers\NoticiaController;

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
    return redirect(route('noticias.index'));
});

#Route::get('/concursos', ConcursoController::class, 'index')->name('noticias.index');
#Route::get('concurso/{id}', ConcursoController::class, 'detailing')->name('noticias.detailing');

Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias.index');
Route::get('/noticias/salvar', [NoticiaController::class, 'store'])->name('noticias.store');
Route::get('/noticias/{id}/descricao', [NoticiaController::class, 'description'])->name('noticias.descricao');

Route::get('/infor-noticas', [NewsApiController::class, 'index']);
Route::get('/infor-noticas/fontes', [NewsApiController::class, 'fontesNoticias']);

Route::get('/concurso/criar', [ConcursoController::class, 'create'])->name('concurso.create');