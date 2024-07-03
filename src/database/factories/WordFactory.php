<?php

namespace Database\Factories;

use App\Models\Word;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Word>
 */
class WordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     *
     *
     * @return array<string, mixed>
     */
    protected $model = Word::class;

    public function definition()
    {
        return [
            'category_id'=>$this->faker->numberBetween(1, 2),
            'word' => $this->faker->realText(10),
            'meaning' => $this->faker->realText(10),
            'example_sentence' => $this->faker->realText(20),
        ];
    }
}
