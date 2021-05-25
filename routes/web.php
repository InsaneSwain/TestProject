<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class,'index'])->name('home');
Route::get('/small_size', [IndexController::class,'index_2'])->name('home.2');

Route::get('/images/convert_to_small', [IndexController::class,'convert_to_small'])->name('convert.small');

Route::get('/image_1/delete', [IndexController::class,'image1_delete'])->name('image1.delete');
Route::get('/image_2/delete', [IndexController::class,'image2_delete'])->name('image2.delete');
Route::get('/image_3/delete', [IndexController::class,'image3_delete'])->name('image3.delete');
