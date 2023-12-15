<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TaskController;
use GuzzleHttp\Promise\Create;

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

Route::get('/table',[TaskController::class, 'index'])->name('table');
Route::get('/task',[TaskController::class, 'create'])->name('task');
Route::get('/category',[TaskController::class, 'create'])->name('category');
Route::post('/table',[TaskController::class, 'store'])->name('table');
