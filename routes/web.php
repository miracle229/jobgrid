<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategorieController;

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
//     return view('index');
// })->name('index');


Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/admin', [HomeController::class,'admin_index'])->name('admin_home');

Route::resource('categorie', CategorieController::class);

Route::resource('blog', BlogController::class);
