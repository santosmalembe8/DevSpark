<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SparkController;
use App\Http\Controllers\ChatBotController;
//Routa principal
Route::get('/home',[SiteController::class,'index'])->name('index');
Route::get('/sobre-nos',[SiteController::class,'sobre'])->name('sobre');
Route::get('/Spark',[SiteController::class,'spark'])->name('spark');
Route::post('/sparkbot', [ChatbotController::class, 'handle']);
Route::get('/thanks',[SiteController::class, 'thanks']);

Route::get('/keywords',[SiteController::class,'keyword'])->name('keyword');
Route::post('/keywords/store-bulk', [SiteController::class, 'storeBulk']);