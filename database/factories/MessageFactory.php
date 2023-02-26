<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Groupe;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $groupes = Groupe::pluck('id')->toArray();
        $users = User::pluck('id')->toArray();
        return [
            'contenu' => Str::random(100),
            'groupe_id' => $this->faker->randomElement($groupes),
            'user_id' =>$this->faker->randomElement($users),

        ];
    }
}
