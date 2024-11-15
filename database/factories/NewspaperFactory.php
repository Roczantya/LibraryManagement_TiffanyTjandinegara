<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Newspaper; 

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Newspaper>
 */
class NewspaperFactory extends Factory
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
           'Judul Surat Kabar' => $this->faker->sentence($wordCount), // Judul acak dengan 3 kata
            'Author' => $this->faker->name(),
            'Publisher' => $this->faker->randomElement(['Kompas', 'Tribun Timur', 'Fajar']),
            'Tanggal Terbit' => $this->faker->date(),
            'Dipajang' => $this->faker->boolean(), // True atau false secara acak
            'Disimpan' => $this->faker->optional()->date(), // Tanggal atau null
        ];
    }
}
