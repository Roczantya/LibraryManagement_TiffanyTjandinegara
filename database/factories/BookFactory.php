<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book; 

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Book::class;

  

    public function definition(): array
    {  
        $jenisBuku =  ['Physical Book', 'E-Book'];
         $selectedJenisBuku = $this->faker->randomElement($jenisBuku);

        $minWords = 1;  // Jumlah kata minimum
        $maxWords = 8;  // Jumlah kata maksimum
        $wordCount = rand($minWords, $maxWords);  // Angka acak antara $minWords dan $maxWords
            return [
            'Judul Buku' => $this->faker->unique()->sentence($wordCount),
            'Author' => $this->faker->name(),
            'Jenis Buku' => $selectedJenisBuku,
            'Access_code' => $selectedJenisBuku === 'E-Book' ? $this->faker->regexify('[A-Z0-9]{10}') : null,
            'Tahun Terbit' => $this->faker->year,

            ];
    }
}
