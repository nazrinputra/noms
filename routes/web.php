<?php

use App\Http\Controllers\AssetController;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IncidentController;

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

URL::forceScheme('https');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('reports', ReportController::class)->except('delete');
});

Route::middleware('auth')->group(function () {
    Route::resource('incidents', IncidentController::class)->except('delete');
});

Route::middleware('auth')->group(function () {
    Route::resource('customers', CustomerController::class)->except('delete');
});

Route::middleware('auth')->group(function () {
    Route::resource('assets', AssetController::class)->except('delete');
});

require __DIR__ . '/auth.php';
