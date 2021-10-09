<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('/a', function () {
    return view('welcome');
});

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/view',[PagesController::class,'list'])->name('view');
Route::get('/create',[PagesController::class,'create'])->name('iinsert');
Route::post('/create',[PagesController::class,'insert'])->name('iinsert');
Route::get('/edit/{id}',[PagesController::class,'edit']);
Route::post('/edit',[PagesController::class,'editSubmit'])->name('eedit');