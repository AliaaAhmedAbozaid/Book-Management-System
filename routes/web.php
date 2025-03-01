<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\BookController;


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
//Route::get(uri: '/test',action: [TestController::class ,'testAction']);
Route::get('/test',[TestController::class ,'testAction']);

Route::get('/books/create',[BookController::class ,'create']);
Route::post('/books/store',[BookController::class ,'store']);

Route::get('/', function () {
    return view('welcome');
});
