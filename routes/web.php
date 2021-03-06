<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/{anypath}', [HomeController::class, 'index'])->where('path','.*');

Route::post('/add-category', [CategoryController::class, 'store'])->name('add-category');
Route::get('remove-category/{slug}', [CategoryController::class, 'destroy']);
Route::get('show-category/{slug}', [CategoryController::class, 'show']);
Route::post('update-category/', [CategoryController::class, 'update']);

Route::get('/get-categories', [CategoryController::class, 'index']);