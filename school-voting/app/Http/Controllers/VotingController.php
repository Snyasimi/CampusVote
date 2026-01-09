<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VotingRequest;
use App\Services\{CandidateService,VotingService};

class VotingController extends Controller
{

	protected $votingSevice,$candidateService;

	public function __construct(VotingService $votingService,CandidateService $candidateService)
	{
		$this->votingService = $votingService;
		$this->candidateService = $candidateService;
	}


	public function index()
	{
		$data = $this->candidateService->getContestingCandidates();

		return view('user-view.voting-page',[

			'data' => $data,
		]);
	
	}

	public function castVote(VotingRequest $request)
	{
		$votingData = $request->validated();
		$status = $this->candidateService->castVote($votingData);

		return view('user-view.');
	}
}
