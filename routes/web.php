<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Auth::routes();

Route::get('/VIDEO',function(){
    return "hola";
});







//DASHBOARD URLs 
Route::get('/admin', [App\Http\Controllers\dashController::class, 'index'])->name('home');
Route::get('/admin/videos', [App\Http\Controllers\dashController::class, 'videos'])->name('videos');
Route::get('/admin/pornstars', [App\Http\Controllers\dashController::class, 'stars'])->name('stars');
Route::get('/admin/categorias', [App\Http\Controllers\dashController::class, 'categorias'])->name('categorias');
Route::get('/admin/config/general', [App\Http\Controllers\dashController::class, 'config'])->name('config');
Route::get('/admin/config/publicidad', [App\Http\Controllers\dashController::class, 'ads_config'])->name('publicidad');
Route::get('/admin/config/SEO', [App\Http\Controllers\dashController::class, 'seo'])->name('seo');




