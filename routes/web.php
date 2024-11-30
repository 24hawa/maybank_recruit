<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ApplicantDashboardController;


Route::get('/', function () {
    return view('welcome');
});

// Job listing page
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');

// Route to display the job application form for a specific job
Route::get('/jobs/{job}/apply', [JobController::class, 'applyForm'])->name('jobs.apply');

// Route to handle the form submission
Route::post('/jobs/{job}/apply', [JobController::class, 'apply'])->name('jobs.apply.submit');

// Applicant Dashboard Route
Route::get('/applicant/dashboard', [ApplicantDashboardController::class, 'index'])->name('applicant.dashboard');

Route::post('/applications/{application}/update-status', [JobController::class, 'updateStatus'])->name('application.updateStatus');

