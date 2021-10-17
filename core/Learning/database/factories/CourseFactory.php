<?php

namespace Core\Learning\Database\Factories;

use Core\Learning\Models\Course as Model;
use Core\Learning\Models\Item;
use Core\Learning\Models\Program;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
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
            'name' => $this->faker->text(100),
            'code' => $this->faker->unique()->text(100),
            'description' => $this->faker->text(100),
            'program_id'  => Program::factory()->create()->id
        ];
    }
}
