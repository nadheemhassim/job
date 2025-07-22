<?php
namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return Job::latest()->paginate(5);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $validated['employer_id'] = 1; // static employer ID
        return Job::create($validated);
    }

    public function destroy($id)
    {
        return Job::findOrFail($id)->delete();
    }
}
