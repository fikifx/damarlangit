<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Filament\Resources\KatalogResource\Pages\ListKatalogId;

Route::get('/', [HomeController::class, 'index']);


Route::get('/hubungikami', function () {
    return view('hubungikami');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});



Route::get('/welcome', [HomeController::class, 'welcome'])->name('welcome');







