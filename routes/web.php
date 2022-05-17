<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AdminController;

use App\Http\Controllers\RedirectkController;
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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',RedirectkController::class);
Route::get('/userDetails/{id}',[AdminController::class,'userDetails']);
Route::get('/showAllusers',[AdminController::class,'showAllusers']);
Route::get('/userDetails/{id}',[AdminController::class,'userDetails']);

//user

Route::get('/AdminUserDetails/{id}',[AdminController::class,'userDetails']);
Route::get('/showAllBooks',[BookController::class,'showAllBooks']);
Route::get('/userDetails/{id}',[HomeController::class,'userDetails']);




Route::get('/',[HomeController::class,'index']);