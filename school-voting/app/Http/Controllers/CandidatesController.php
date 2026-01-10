<?php

namespace App\Http\Controllers;

use App\Models\candidates;
use Illuminate\Http\Request;
use App\Http\Requests\CandidateRegistrationRequest;
Use App\Services\CandidateService;

class CandidatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

	protected $candidateService;
	public function __construct(CandidateService $candidateService)
	{
		$this->candidateService = $candidateService;
	}
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('candidate-view.candidateApplicationForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CandidateRegistrationRequest $request)
    {
	    //
	    $candidateDetails = $request->validated();
	    $this->candidateService->registerCandidate($request->user(),$candidateDetails);
    }

    /**
     * Display the specified resource.
     */
    public function show(candidates $candidates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(candidates $candidates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, candidates $candidates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(candidates $candidates)
    {
        //
    }
}
