<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = \App\Models\Job::with('employer')->latest()->simplePaginate(5);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function create()
    {   
         return view('jobs.create');
    }

    public function show($id)
    {
         return view('jobs.show', ['job' => $job]);
    }

    public function store(Request $request)
    {   
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
    }

    public function edit(Job $job)
    {   
      return view('jobs.edit', ['job' => $job]);
    }
   
     
    public function update(Request $request, Job $job)
    {   
       request()->validate([
        'title' => 'required|max:255',
        'salary' => 'required|numeric',
        'description' => 'required',
    ]);
   
    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
        'description' => request('description'),
    ]);
   
    return redirect('/jobs/'. $job->id); 
    }

    public function destroy(Job $job)
    {   
        $job->delete();
        return redirect('/jobs'); 
    }   
}