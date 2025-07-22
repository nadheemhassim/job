<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ApplicationController;

Route::get('/jobs', [JobController::class, 'index']);
Route::post('/jobs', [JobController::class, 'store']);
Route::delete('/jobs/{id}', [JobController::class, 'destroy']);

Route::post('/applications', [ApplicationController::class, 'store']);
Route::get('/applications/{jobId}', [ApplicationController::class, 'showByJob']);


