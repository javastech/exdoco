<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('export_01', [App\Http\Controllers\ExportController::class, 'export_01']);
Route::get('export_02', [App\Http\Controllers\ExportController::class, 'export_02']);
Route::get('export_03', [App\Http\Controllers\ExportController::class, 'export_03']);
Route::get('surat1', [App\Http\Controllers\ExportController::class, 'surat1']);

Route::get('cover_lsp', [App\Http\Controllers\LspController::class, 'lsp1'] );
Route::get('lsp_2', [App\Http\Controllers\LspController::class, 'lsp2'] );
Route::get('lsp_3', [App\Http\Controllers\LspController::class, 'lsp3'] );
Route::get('lsp_4', [App\Http\Controllers\LspController::class, 'lsp4'] );
Route::get('lsp_5', [App\Http\Controllers\LspController::class, 'lsp5'] );
Route::get('lsp_6', [App\Http\Controllers\LspController::class, 'lsp6'] );
Route::get('lsp_7', [App\Http\Controllers\LspController::class, 'lsp7'] );
Route::get('lsp_8', [App\Http\Controllers\LspController::class, 'lsp8'] );
Route::get('lsp_9', [App\Http\Controllers\LspController::class, 'lsp9'] );
Route::get('lsp_10', [App\Http\Controllers\LspController::class, 'lsp10'] );
Route::get('lsp_11', [App\Http\Controllers\LspController::class, 'lsp11'] );
Route::get('lsp_12', [App\Http\Controllers\LspController::class, 'lsp12'] );
Route::get('lsp_13', [App\Http\Controllers\LspController::class, 'lsp13'] );
Route::get('lsp_14', [App\Http\Controllers\LspController::class, 'lsp14'] );
Route::get('lsp_15', [App\Http\Controllers\LspController::class, 'lsp15'] );
Route::get('lsp_16', [App\Http\Controllers\LspController::class, 'lsp16'] );
Route::get('lsp_17', [App\Http\Controllers\LspController::class, 'lsp17'] );
Route::get('lsp_18', [App\Http\Controllers\LspController::class, 'lsp18'] );
Route::get('lsp_19', [App\Http\Controllers\LspController::class, 'lsp19'] );
Route::get('lsp_20', [App\Http\Controllers\LspController::class, 'lsp20'] );

Route::get('surat_diterima', [App\Http\Controllers\ExportController::class, 'pbx_surat_diterima']);
Route::get('surat_aktif_siswa_idn', [App\Http\Controllers\ExportController::class, 'pbx_surat_aktif_siswa_idn']);
Route::get('surat_aktif_siswa_eng', [App\Http\Controllers\ExportController::class, 'pbx_surat_aktif_siswa_eng']);
Route::get('surat_pindah', [App\Http\Controllers\ExportController::class, 'pbx_surat_pindah']);
Route::get('surat_permohonan_pindah', [App\Http\Controllers\ExportController::class, 'pbx_surat_permohonan_pindah']);