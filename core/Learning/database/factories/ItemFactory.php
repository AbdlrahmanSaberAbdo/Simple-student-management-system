<?php

namespace Core\Learning\Database\Factories;

use Core\Learning\Models\Course;
use Core\Learning\Models\Item as Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
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
            'grade' => $this->faker->randomNumber(),
            'course_id' => Course::inRandomOrder()->first()->id,
        ];
    }
}
