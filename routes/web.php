<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('home',[CategoryController::class,"home"]);
Route::get('/show',[CategoryController::class,"show"])->name('show');
Route::resource('category',CategoryController::class)->except("edit","show","update");


Route::get('home',[ClientController::class,"home"]);
Route::post('updates',[CategoryController::class,"updates"]);
Route::get('time_update/{id}',[CategoryController::class,"time_update"]);
Route::resource('client',ClientController::class)->except("edit","show","update");
Route::get('bridal',[CategoryController::class,"bridal"]);
Route::get('dashboard',[CategoryController::class,"dashboard"])->name("dashboard");
Route::get('offer',[CategoryController::class,"offer"]);
Route::get('contact',[CategoryController::class,"contact"]);
Route::match(["post","get"],"/register",[CategoryController::class,"register"])->name("register");
Route::match(["post","get"],"/login",[CategoryController::class,"login"])->name('login');
Route::get('/manage_client',[CategoryController::class,"client_manage"])->name("manage_client");
//middleware work
Route::group(["middleware"=>"loginCheck"],function(){
Route::get('logout',[CategoryController::class,"logout"])->name("logout");
Route::get('done/{id}',[CategoryController::class,"done"]);
Route::get('pending/{id}',[CategoryController::class,"pending"]);
Route::get('remove/{id}',[CategoryController::class,"remove"]);



});






