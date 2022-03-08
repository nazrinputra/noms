<?php

use App\Http\Controllers\IncidentController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('incidents', [IncidentController::class, 'index'])->name('incidents.index');
    Route::get('incidents/create', [IncidentController::class, 'create'])->name('incidents.create');
    Route::post('incidents/store', [IncidentController::class, 'store'])->name('incidents.store');
    Route::get('incidents/{incident}', [IncidentController::class, 'show'])->name('incidents.show');
    Route::get('incidents/{incident}/edit', [IncidentController::class, 'edit'])->name('incidents.edit');
    Route::put('incidents/{incident}', [IncidentController::class, 'update'])->name('incidents.update');
});
