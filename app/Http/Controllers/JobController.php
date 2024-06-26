<?php

namespace App\Http\Controllers;
use App\Models\Job;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);

        return view('jobs.index', ['jobs'=>$jobs]);
    }
    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job'=>$job]);
    }

    public function store()
    {
        //validation...
        request()->validate([
            'title' => ['required','min:3','string'],
            'salary' => ['required','min:3','numeric'],
        ]);

        //creating the job into the database
        Job::create([
            'title' => request('title'),
            'salary'=> request('salary'),
        ]);

        return redirect('/jobs');
    }

    public function edit(Job $job)
    {

        if(Auth::guest())
        {
            return redirect('/login');
        }

        Gate::authorize('edit-job', $job);

        return view('jobs.edit', ['job'=>$job]);
    }

    public function update(Job $job)
    {
         //Authorize the user


        //validation...
        request()->validate([
            'title' => ['required','min:3'],
            'salary' => 'required',
        ]);

        //Updating the job into the database
        $job->update([
            'title' => request('title'),
            'salary'=> request('salary'),
        ]);

        return redirect('/jobs/'. $job->id);
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect('/jobs');
    }


}
