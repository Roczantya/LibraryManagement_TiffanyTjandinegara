<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Journal; 

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Journa>
 */
class JournalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $minWords = 1;  // Jumlah kata minimum
        $maxWords = 8;  // Jumlah kata maksimum
        $wordCount = rand($minWords, $maxWords); 
        return [
            'Judul Journal' => $this->faker->unique()->sentence($wordCount),
            'Author' => $this->faker->name(),
            'Tahun Terbit' => $this->faker->year,
            'Access_Granted' =>  $this->faker->boolean(),
        ];
    }
}
