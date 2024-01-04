<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(mt_rand(1, 5)),
            'penulis' => $this->faker->name(),
            'penerbit' => $this->faker->company(),
            'tahun_terbit' => $this->faker->date(),
            'genre' => $this->faker->sentence(mt_rand(1, 3)),
            'deskripsi' => collect($this->faker->paragraphs(mt_rand(1, 3)))
                ->map(fn ($p) => "<p>$p</p>")
                ->implode(''),
            'category_id' => mt_rand(1, 6)
        ];
    }
}
