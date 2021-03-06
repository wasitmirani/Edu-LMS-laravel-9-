<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/portal/dashboard');
});


Route::get('/login',[AuthController::class,'login'])->name('login');

Route::get('/portal/dashboard', function () {
    return view('backend.index');
})->where('any', '[\/\w\.-]*');



require __DIR__.'/auth.php';
