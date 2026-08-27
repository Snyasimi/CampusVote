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


	public function index(Request $req)
	{
		$data = $this->candidateService->getContestingCandidates();
		if($req->user->vote_status == true)
		{

			$totalCandidates = \App\Models\Candidate::count();
			$totalVoters     = \App\Models\User::where('vote_status', true)->count();
			$totalUsers      = \App\Models\User::count();

			$data = [
			    'Chairperson'      => $this->candidateService->getByPosition('Chairperson'),
			    'Vicechair'        => $this->candidateService->getByPosition('Vice-Chair'),
			    'Secretary'        => $this->candidateService->getByPosition('Secretary'),
			    'Sports and welfare' => $this->candidateService->getByPosition('Sports and Welfare'),
			    'Academic'         => $this->candidateService->getByPosition('Academic'),
			];

			return view('admin-view.home-page', compact('data', 'totalCandidates', 'totalVoters', 'totalUsers'));
		}

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

	public function confirmVote(Request $request){
			
		return view(candidate-view);
	}
}
