<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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

// Homepage route

Route::get('/', [BlogController::class,'index']);

// All blogs route - fix the uri later
Route::get('/blog', [BlogController::class,'list'])->name('blogs.list');


Route::get('/admin', function () {
    return view('create');
});
