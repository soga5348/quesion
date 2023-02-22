<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\FirstMiddleware;
use App\Http\Controllers\AuthorController;


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
Route::get('/home', [AuthorController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/home', [AuthorController::class, 'get2']);
Route::post('/home', [AuthorController::class, 'post2']);
Route::get('/register', [AuthorController::class, 'get']);
Route::post('/register', [AuthorController::class, 'post']);//変更



