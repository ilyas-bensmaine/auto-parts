<?php

namespace Database\Factories;

use App\Models\Marque;
use Illuminate\Database\Eloquent\Factories\Factory;

class MarqueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Marque::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'   => $this->faker->name(),
            'noma'   => $this->faker->name(),
            'nationality_id'   => random_int(1,5)
        ];
    }
}
