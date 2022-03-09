<?php

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AssetController;
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
    Route::resource('reports', ReportController::class)->except('destroy');
});

Route::middleware('auth')->group(function () {
    Route::resource('incidents', IncidentController::class)->except('destroy');
});

Route::middleware('auth')->group(function () {
    Route::resource('customers', CustomerController::class)->except('destroy');
});

Route::middleware('auth')->group(function () {
    Route::resource('assets', AssetController::class)->except('destroy');
});

Route::middleware('auth')->group(function () {
    Route::resource('notes', NoteController::class)->only(['store', 'destroy']);
});

Route::middleware('auth')->group(function () {
    Route::resource('users', UserController::class)->except(['edit', 'destroy', 'show']);
});

require __DIR__ . '/auth.php';
