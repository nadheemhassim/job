<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function apply(Request $request, $id)
    {
        $request->validate([
            'candidate_name' => 'required|string',
            'candidate_email' => 'required|email',
            'cover_letter' => 'nullable|string',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $resumePath = null;
        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes');
        }

        $application = Application::create([
            'job_id' => $id,
            'candidate_name' => $request->candidate_name,
            'candidate_email' => $request->candidate_email,
            'cover_letter' => $request->cover_letter,
            'resume_path' => $resumePath,
        ]);

        return response()->json($application, 201);
    }

    public function list($id)
    {
        $applications = Application::where('job_id', $id)->get();

        return response()->json($applications);
    }
}
