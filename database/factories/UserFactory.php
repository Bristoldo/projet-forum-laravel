<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Groupe;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $groupes = Groupe::pluck('id')->toArray();

        return [
            'nom_user' => fake()->firstName(),
            'prenom_user' =>fake()->lastName(),
            'photo_profile' => Str::random(20),
            'status_user' => $this->faker->randomElement(['enline','non_enligne']),
            'email_user' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'groupe_id' => $this->faker->randomElement($groupes),
        ];

    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
