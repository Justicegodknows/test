<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

class Job {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$100,000',
            ],
            [
                'id' => 2,
                'title' => 'Manager',
                'salary' => '$80,000',
            ],
            [
                'id' => 3,
                'title' => 'Software Engineer',
                'salary' => '$60,000',
            ],
        ];
    }
}

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () use ($jobs) {
    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) use ($jobs) {  
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    return view('job', ['job' => $job]);
});
    

    

Route::get('/contact', function () {
    return view('contact', ['contact' => 'Contact']);    
});

