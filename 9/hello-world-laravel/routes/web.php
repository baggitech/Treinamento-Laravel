<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     // return view('bemvindo');
//     return 'Ainda estou no router';
// });



Route::get('/', [SiteController::class, 'index']);
Route::get('/bemvido', [SiteController::class, 'bemvindo']);
Route::get('/ex01', [SiteController::class, 'exercicio01']);
Route::get('/ex02', [SiteController::class, 'exercicio02']);
Route::get('/ex03', [SiteController::class, 'exercicio03']);
Route::get('/ex04', [SiteController::class, 'exercicio04']);
Route::get('/ex05', [SiteController::class, 'exercicio05']);
Route::get('/ex06', [SiteController::class, 'exercicio06']);

