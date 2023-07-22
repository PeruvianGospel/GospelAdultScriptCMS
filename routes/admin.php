<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|  Routes Dashboard
|--------------------------------------------------------------------------
|
*/


//DASHBOARD URLs 
Route::get('/', [App\Http\Controllers\dashController::class, 'index'])->name('home');
Route::get('/videos', [App\Http\Controllers\dashController::class, 'videos'])->name('videos');
Route::get('/video/publicar', [App\Http\Controllers\dashController::class, 'publicar_video'])->name('publicar');
Route::get('/pornstars', [App\Http\Controllers\dashController::class, 'stars'])->name('stars');
Route::get('/categorias', [App\Http\Controllers\dashController::class, 'categorias'])->name('categorias');
Route::get('/config/general', [App\Http\Controllers\dashController::class, 'config'])->name('config');
Route::get('/config/publicidad', [App\Http\Controllers\dashController::class, 'ads_config'])->name('publicidad');
Route::get('/config/SEO', [App\Http\Controllers\dashController::class, 'seo'])->name('seo');




