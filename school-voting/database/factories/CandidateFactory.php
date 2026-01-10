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
		'Profile_image_path' => 'String of text',
		'slogan' => fake()->sentence(),
		'votes' => fake()->numberBetween(1,200),
        ];
    }
}
