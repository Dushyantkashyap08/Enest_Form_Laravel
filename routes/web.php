<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudOperationsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GoogleController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/addproduct/{id}',[CrudOperationsController::class, 'addproduct']);

Route::post('/cart_add',[CrudOperationsController::class, 'cart_add'])->name('cart_add');

Route::get('buynow/{id}',[CrudOperationsController::class, 'buynow']);

Route::get('/home',[CrudOperationsController::class, 'home']);

Route::get('/contactus',[CrudOperationsController::class, 'contactus']);

Route::get('/',[CrudOperationsController::class, 'login']);


// signup table
Route::post('signup',[LoginController::class, 'signup'])->name('signup');

//Login page
Route::post('login-data',[LoginController::class, 'login_data']);

//logout route
Route::get('logout',[LoginController::class, 'logout'])->name('logout');

// Google URL
Route::get('google/login',[GoogleController::class,'provider'])->name('google.login');
Route::get('google/callback',[GoogleController::class,'callbackHandel'])->name('google.login.callback');
