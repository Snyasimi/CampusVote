<?php

namespace App\Services;

use App\Models\{Votes, User, Candidate};
use Illuminate\Support\Facades\DB;

class VotingService{

	public function castVote(User $user, array $votingData): bool
	{
		if ($user->vote_status) {
			return false;
		}

		DB::transaction(function () use ($user, $votingData) {
			$positionMap = [
				'chairperson'        => 'Chairperson',
				'vice-chair'         => 'Vice-Chair',
				'secretary'          => 'Secretary',
				'sports-and-welfare' => 'Sports and Welfare',
				'academic'           => 'Academic',
			];

			foreach ($positionMap as $field => $positionLabel) {
				if (empty($votingData[$field])) {
					continue;
				}

				$candidateId = (int) $votingData[$field];

				// Prevent a candidate from voting for themselves
				$isOwnCandidate = Candidate::where('id', $candidateId)
					->where('user_id', $user->id)
					->exists();

				if ($isOwnCandidate) {
					continue;
				}

				Votes::create([
					'user_id'      => $user->id,
					'candidate_id' => $candidateId,
					'position'     => $positionLabel,
				]);

				Candidate::where('id', $candidateId)->increment('votes');
			}

			$user->update(['vote_status' => true]);
		});

		return true;
	}
}
