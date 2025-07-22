<?php
use App\Http\Controllers\JobController;
use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;

Route::get('/jobs', [JobController::class, 'index']);  // List jobs (pagination)
Route::post('/jobs', [JobController::class, 'store']); // Create job (employer only)
Route::put('/jobs/{id}', [JobController::class, 'update']);
Route::delete('/jobs/{id}', [JobController::class, 'destroy']);

Route::post('/jobs/{id}/apply', [ApplicationController::class, 'apply']); // Candidate apply to job
Route::get('/jobs/{id}/applications', [ApplicationController::class, 'list']); // Employer view applications
