<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Info_IA_Controller;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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
    return view('Login');
});

Route::get('/home',[AdminController::class,'home']);

Route::post('/login',[LoginController::class,'login']);

Route::get('/formdomaineapplication',[AdminController::class,'formdomaineapplication']);

Route::post('/ajoutdomaineapplication',[AdminController::class,'ajoutdomaineapplication']);

Route::post('/modifierdomaineapplication',[AdminController::class,'modifierdomaineapplication']);

Route::get('/supprimerdomaineapplication/{id}',[AdminController::class,'supprimerdomaineapplication']);

Route::get('/listedomaineapplication',[AdminController::class,'listedomaineapplication']);

Route::get('/domaineapplication/{id}',[AdminController::class,'getdomaineapplication']);

Route::get('/formhomepage',[AdminController::class,'formhomepage']);

Route::post('/modifierhomepage',[AdminController::class,'modifierhomepage']);

Route::get('/homefront',[Info_IA_Controller::class,'index']);

Route::get('/front/domaineapplication/{url}',[Info_IA_Controller::class,'getdetaildomaineapplication']);




