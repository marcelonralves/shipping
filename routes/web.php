<?php

use App\Http\Controllers\DashboardViewController;
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



Route::get('/', [DashboardViewController::class, 'home'])->name('pagina.inicial');
Route::post('/correios/', [DashboardViewController::class, 'correios'])->name('correios');
