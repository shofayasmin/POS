<?php

use App\Http\Controllers\BabyKidController;
use App\Http\Controllers\BeautyHealthController;
use App\Http\Controllers\FoodBaverageController;
use App\Http\Controllers\HomeCareController;
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
    return view('welcome');
});

Route::get('/homePage', function () {
    return ('Welcome To Point of Sales Application');
});

Route::prefix('category')->group(function () {
    Route::get('/food-baverage', [FoodBaverageController::class, 'foodBaverage']);
    Route::get('/beauty-health', [BeautyHealthController::class, 'beautyHealth']);
    Route::get('/home-care', [HomeCareController::class, 'homeCare']);
    Route::get('/baby-kid', [BabyKidController::class, 'babyKid']);
});
