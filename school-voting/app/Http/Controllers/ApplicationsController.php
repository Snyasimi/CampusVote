<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of pending candidate applications.
     */
    public function index()
    {
        $applications = Candidate::with('user')
            ->where('candidate_status', 'review')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin-view.view-applications', compact('applications'));
    }

    /**
     * Approve or reject a candidate application.
     */
    public function update(Request $request, Candidate $application)
    {
        $request->validate([
            'action' => ['required', 'in:approved,flagged,disqualified'],
        ]);

        $application->update(['candidate_status' => $request->action]);

        $message = match($request->action) {
            'approved'     => 'Candidate approved successfully.',
            'flagged'      => 'Candidate flagged for review.',
            'disqualified' => 'Candidate disqualified.',
        };

        return back()->with('success', $message);
    }
}
