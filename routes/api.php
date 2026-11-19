<?php

use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/health', function () {
    try {
        DB::connection()->getPdo();
        return response()->json(['status' => 'ok', 'database' => 'connected']);
    } catch (\Throwable $e) {
        return response()->json(['status' => 'error', 'database' => 'disconnected'], 503);
    }
});

Route::apiResource('estudiantes', EstudianteController::class)
    ->only(['index', 'store', 'show']);
