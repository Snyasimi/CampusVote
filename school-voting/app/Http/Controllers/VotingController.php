<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\VotingRequest;
use App\Services\{CandidateService,VotingService};

class VotingController extends Controller
{

	protected $votingService, $candidateService;

	public function __construct(VotingService $votingService, CandidateService $candidateService)
	{
		$this->votingService = $votingService;
		$this->candidateService = $candidateService;
	}


	public function index()
	{
		$user = Auth::user();

		if ($user && $user->vote_status) {
			return redirect()->route('user.index')->with('info', 'You have already cast your vote.');
		}

		$data = $this->candidateService->getContestingCandidates();

		return view('user-view.voting-page', [
			'data' => $data,
		]);
	
	}

	public function store(VotingRequest $request)
	{
		$user = Auth::user();

		if ($user->vote_status) {
			return redirect()->route('user.index')->with('info', 'You have already cast your vote.');
		}

		$votingData = $request->validated();
		$status = $this->votingService->castVote($user, $votingData);

		if ($status) {
			return redirect()->route('user.index')->with('success', 'Your vote has been cast successfully!');
		}

		return redirect()->route('user.index')->with('info', 'You have already cast your vote.');
	}
}
