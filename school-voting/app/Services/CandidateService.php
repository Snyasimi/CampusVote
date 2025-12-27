<?php

namespace App\Services;

use App\Models\Candidate;


class CandidateService 
{


	public function getByPosition(string $position)
	{

		
		$candidates = Candidate::with('user')->where('position',$position)->get();

		return $candidates;
		//TODO REPAIR THE RETURN VALUES
		
		/*
		if(position == "")
		{
			return 
		}

		 */
	}

}


