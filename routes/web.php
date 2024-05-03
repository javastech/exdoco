<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('export_01', [App\Http\Controllers\ExportController::class, 'export_01']);
Route::get('export_02', [App\Http\Controllers\ExportController::class, 'export_02']);