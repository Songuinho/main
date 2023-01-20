<?php

use illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Session\Session;
use App\Http\Controllers\FactureController;
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
    
    // Storage::put("resources/work.txt", "Salut le monde !");

    // Storage::move("resources/work.txt", "public/css/work.txt");

    return view('welcome')->with("hasImage", false);
});

Route::post('store', ["App\Http\Controllers\FactureController", "create"]);
Route::get('download/{facture}', ["App\Http\Controllers\FactureController", "download"])->name('download.file');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
