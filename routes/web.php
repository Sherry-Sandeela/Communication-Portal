<?php

use Dom\Document;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\DocumentController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard/properties', [PropertyController::class, 'index'])
        ->name('properties.property');

    Route::get('/dashboard/documents', [DocumentController::class, 'index'])
        ->name('documents.index');
});
