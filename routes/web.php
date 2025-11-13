<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;




Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::with('employer')->latest()->simplepaginate(5)
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id);
   
    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function () {
    request()->validate([
        'title' => 'required|max:255',
        'salary' => 'required|numeric',
        'description' => 'required',
    ]);
    Job::create([
        'title' => request('title'),
        'employer_id' => 1, // Hardcoded for now
        'salary' => request('salary'),
        'description' => request('description'),
    ]);

    return redirect('/jobs');
});



Route::get('/contact', function () {
    return view('contact', ['contact' => 'Contact']);    
});

