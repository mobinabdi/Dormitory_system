<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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
Route::get('/', [IndexController::class,'login']);
Route::post('add',[IndexController::class,'add']);
Route::get('/panel',[IndexController::class,'panel']);
Route::get('/search',[IndexController::class,'search']);
//Route::group([  'middleware' => 'Dorm'], function()

    //All the routes that belongs to the group goes here
Route::get('/index/{id}', [IndexController::class,'index'])->name('index');
Route::post('/receive',[IndexController::class ,'receive']);

//Route::middleware(['auth','ragister'])->group(function (){
//    Route::get('index',[IndexController::class,'indext']);
//});

