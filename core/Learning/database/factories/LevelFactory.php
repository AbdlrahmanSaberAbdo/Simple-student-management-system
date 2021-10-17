<?php

namespace Core\Learning\Database\Factories;

use Core\Learning\Models\Level as Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class LevelFactory extends Factory
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
            'name' => $this->faker->randomElement(['level1','level2','level3','level4']),
            'description' => $this->faker->text(100),
        ];
    }
}
