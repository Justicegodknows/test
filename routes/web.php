<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobController;




Route::view('/', 'Home');

Route::view('/contact', 'contact');

Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create');
    Route::get('/jobs/{job}', 'show');
    Route::post('/jobs', 'store');
    Route::get('/jobs/{job}/edit', 'edit');
    Route::patch('/jobs/{job}', 'update');
    Route::delete('/jobs/{job}', 'destroy');
});
Route::patch('/jobs/{job}', [JobController::class, 'update']);  
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);    
    


