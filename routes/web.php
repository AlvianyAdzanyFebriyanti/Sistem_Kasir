<?php

use App\Http\Controllers\ListBarang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Content;
use App\Http\Controllers\Form;

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

Route::get('/',[Content::class,'index']);
Route::get('/form',[Form::class,'index']);

Route::post('/proses',[Form::class,'store']);


Route::get('/view',[ListBarang::class,'index']);
Route::get('/edit/{id}',[ListBarang::class,'edit']);
Route::post('/update/{id}',[ListBarang::class,'update']);
Route::get('/hapus/{id}',[ListBarang::class,'destroy']);
