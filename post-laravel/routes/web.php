<?php

use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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


/* Route::any('/todos', function(){

    return "Chamdo por todos";
}); */



/* Route::match(['get','put'], '/todos', function(){

    return "Chamado por get";
}); */


/*
Route::view('/view', 'welcome2'); */


/* Route::get('/edit/{id}', function($id){
    return "O id é $id";
}); */


/* Route::get('/show/{id?}', function($id = 1){
    return "O id é $id";
}); */


/* Route::get('/show/{id?}', function($id = 1){
    return "O id é $id";
})->where(['id' => '[0-9]+']); */


/* Route::get('/show/{id?}', function($id = 1){
    return "O id é $id";
})->where(['id' => '[0-9]+'])->name('mostrar'); */

/* Route::prefix('/posts')->name('posts.')->group(function(){

Route::get('/exemplo', [HelloWorldController::class,'index']  )->name('exemplo');


    Route::get('/', function () {
        return view('welcome');
    })->name('principal');

    Route::get('/show/{id?}', function($id = 1){
        return "O id é $id";
    })->where(['id' => '[0-9]+'])->name('mostrar');
}); */

Route::get('/', HelloWorldController::class)->name('principal');

Route::resource('/user', UserController::class);

Route::resource('/post', PostController::class);