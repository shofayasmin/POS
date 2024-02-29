<?php

use App\Http\Controllers\BabyKidController;
use App\Http\Controllers\BeautyHealthController;
use App\Http\Controllers\FoodBaverageController;
use App\Http\Controllers\HomeCareController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SalesPageController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/homePage', function () {
    return ('Welcome To Point of Sales Application');
});

//Display porduct list(route prefix)
Route::prefix('category')->group(function () {
    Route::get('/food-baverage', [FoodBaverageController::class, 'foodBaverage']);
    Route::get('/beauty-health', [BeautyHealthController::class, 'beautyHealth']);
    Route::get('/home-care', [HomeCareController::class, 'homeCare']);
    Route::get('/baby-kid', [BabyKidController::class, 'babyKid']);
});

//Displaying food-baverage using View
Route::get('/foodBaverage2', function () {
    return view('blog.foodBaverage');
});

//Displaying beauty-health using View
Route::get('/beautyHealth2', function () {
    return view('blog.beautyHealth');
});

//Displaying home-care using View
Route::get('/homeCare2', function () {
    return view('blog.homeCare');
});

//Displaying baby-kid using View
Route::get('/babyKid2', function () {
    return view('blog.babyKid');
});


//Display user profiles(route parameter)
Route::get('/user/{id}/name/{name}', function ($id, $name){
    return 'User ke-'. $id." Nama : ".$name;
});
//Using controller
Route::get('/user-profile/{id}/{name}', [PageController::class,'userProfile']);

//Displaying a View from a Controller
Route::get('/user-profile2', [PageController::class,'userProfile2']);

//Sales Page using view 
Route::get('/sales-page', function () {
    return view('blog.salesPage');
});

//Sales Page using View from a Controller
Route::get('/sales-page', [SalesPageController::class,'salesPage']);


