<?php

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
Route::get('/', [\App\Http\Controllers\productController::class, 'index'])->name('index');
Route::middleware('auth')->group(function (){
    Route::view('upload-products','product.create')->name('upload-products');
    Route::post('store-products', [\App\Http\Controllers\productController::class, 'store'])->name('store-products');
    Route::get('delete/{product}',[\App\Http\Controllers\productController::class, 'delete'])->name('delete');
    Route::post('deleteAll', [\App\Http\Controllers\productController::class, 'deleteAll'])->name('delete-all');
    Route::view('/profile', 'profile')->name('profile');
    Route::post('/change-username', [\App\Http\Controllers\userController::class, 'changeUsername'])->name('change-username');
    Route::post('/change-password', [\App\Http\Controllers\userController::class, 'changePassword'])->name('change-password');
});
Auth::routes(['register'=>false, 'reset'=>false]);
