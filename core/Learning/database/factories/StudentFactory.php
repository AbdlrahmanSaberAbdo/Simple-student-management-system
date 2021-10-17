<?php

namespace Core\Learning\Database\Factories;

use Core\Learning\Models\Level;
use Core\Learning\Models\Student as Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->unique()->text(100),
            'birthdate' => $this->faker->date(),
            'email' => $this->faker->unique()->safeEmail(),
            'identifier' => $this->faker->unique()->text(100),
            'level_id' => Level::inRandomOrder()->first()->id,
        ];
    }
}
