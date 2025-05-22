<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = JobApplication::all();
        // return view('applications.index', compact('applications'));
        return view('applications.index', ['applications'=>$applications]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('applications.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name'=> 'required|string',
            'role'=> 'required|string',
            'status'=> 'required|in:applied,interview,offer,rejected',
            'applied_date'=> 'required|date',
            'interview_date'=> 'nullable|date',
            'notes'=> 'nullable|string',
        ]);

        JobApplication::create($validated);
        return redirect()->route('applications.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobApplication $application)
    {
        return view('applications.edit', ['application'=>$application]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobApplication $application)
    {
        $validated = $request->validate([
            'company_name'=> 'required|string',
            'role'=> 'required|string',
            'status'=> 'required|in:applied,interview,offer,rejected',
            'applied_date'=> 'required|date',
            'interview_date'=> 'nullable|date',
            'notes'=> 'nullable|string',
        ]);

        $application->update($validated);
        return redirect()->route('applications.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobApplication $appliation)
    {
        $application->delete();
        return redirect()->route('applications.index');
    }
}
