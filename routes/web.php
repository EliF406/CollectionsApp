<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactController;

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


Route::middleware(['first', 'second'])->group(function () {

    Auth::routes();

    Route::resource('contacts', ContactController::class);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});

require __DIR__.'/auth.php';