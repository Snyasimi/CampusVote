<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\canidates>
 */
class CandidateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
	    //protected $model = \App\Models\candidates::class;
        return [
		'user_id' => \App\Models\User::factory(),
		'position' => fake()->randomElement(['Chairperson','Vice-Chair', 'Treasurer', 'Sports and welfare', 'Academic', 'Secretary' ]),
		'party' => fake()->randomElement(['Renegades','Big five','trotters']),
		'candidate_status' => fake()->randomElement(['approved','flagged','disqualified','review']),
		'profile_image_path' => fake()->randomElement(['candidateProfiles/1.png',
			'candidateProfiles/3.png',
			'candidateProfiles/8.png',
			'candidateProfiles/6.png',
			'candidateProfiles/5.png',
			'candidateProfiles/2.png',
			'candidateProfiles/11.png']),

		'background_image_path' => fake()->randomElement(['candidateProfiles/9.png',
			'candidateProfiles/4.png',
			'candidateProfiles/10.png',
			'candidateProfiles/7.png',
			'candidateProfiles/13.png',
			'candidateProfiles/12.png',
			'candidateProfiles/10.png']),

		'slogan' => fake()->sentence(),
		'votes' => fake()->numberBetween(1,200),
        ];
    }
}
