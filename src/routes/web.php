<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [TestController::class, 'index']);
Route::post('/confirm', [TestController::class, 'confirm']);
Route::post('/contacts', [TestController::class, 'store']);

Route::get('/thanks', function () {
        return view('thanks');
    })->name('thanks');

Route::get('/confirm', function () {
        return redirect('/');
    });


Route::get('/', [AuthController::class, 'index']);

