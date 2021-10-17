<?php

namespace Core\Learning\Database\Factories;

use Core\Learning\Models\Level;
use Core\Learning\Models\Program as Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramFactory extends Factory
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
            'description' => $this->faker->text(100),
            'level_id'    => Level::factory()->create()->id
        ];
    }
}
