<?php

use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;


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

Route::prefix('admin')->group(function(){
    // Route::prefix('posts')->name('posts.')->group(function(){
         Route::get('/create',[\App\Http\Controllers\Admin\PostController::class, 'create'])->name('create');
    //     Route::post('/store', [\App\Http\Controllers\Admin\PostController::class, 'store'])->name('store');
    // });

    Route::resource('posts', \App\Http\Controllers\Admin\PostController::class);

});
