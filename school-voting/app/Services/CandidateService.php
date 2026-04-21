<?php

namespace App\Services;

use App\Models\{Candidate,User};


class CandidateService 
{

	public function getResultsSummary()
	{
		//What if we hit the DB once, we get candidates who have votes > than the number of voters * 5 / 2 
		//$threshold = User::where('role','student')



		//return $data;
	}

	protected function getAcceptedCandidatesByPosition($position)
	{
		$candidates =  Candidate::with('user')->where('position',$position)->get();
	
		return $candidates;

	}


	public function getByPosition(string $position)
	{

		
		$candidates = Candidate::with('user')->where('position',$position)->orderBy('votes','desc')->get();

		return $candidates;
		//TODO REPAIR THE RETURN VALUES
		
		/*
		if(position == "")
		{
			return 
		}

		 */
	}

	public function getContestingCandidates()
	{
		//TODO Refactor this lol, one call then sepatare the data

		$candidates = [
	
			'chairPerson' => $this->getAcceptedCandidatesByPosition('Chairperson'),
			'viceChair' => $this->getAcceptedCandidatesByPosition('Vice-Chair'),
			'secretary' => $this->getAcceptedCandidatesByPosition('Secretary'),
			'SportsAndWelfare' => $this->getAcceptedCandidatesByPosition('Sports and Welfare'),
			'academic' => $this->getAcceptedCandidatesByPosition('Academic'),
		];

		return $candidates;
	}

	public function registerCandidate($user, array $candidateDetails)
	{

		$candidateProfilePicture = $candidateDetails['profile_image_path']->store('candidateProfiles','public');
		$candidateBackgroundPicture = $candidateDetails['background_image_path']->store('candidateBackground','public');

		$candidateDetails['user_id'] = $user->id;
		$candidateDetails['profile_image_path'] = $candidateProfilePicture;
		$candidate['background_image_path'] = $candidateBackgroundPicture;	
		$candidate = Candidate::create($candidateDetails);


		return $candidate;


	}


}


