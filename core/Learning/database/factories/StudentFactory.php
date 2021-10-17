<?php

namespace Core\Learning\Database\Factories;

use Core\Learning\Models\Course;
use Core\Learning\Models\Level;
use Core\Learning\Models\Program;
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
        $level = Level::factory()->create();
        $program = Program::create([
            'name'        => 'program',
            'description' => 'description',
            'level_id'    => $level->id
        ]);
        Course::create([
            'name'        => 'program',
            'code'        => $this->faker->unique()->text(100),
            'description' => 'description',
            'program_id'  => $program->id
        ]);

        return [
            'full_name' => $this->faker->unique()->text(100),
            'birthdate' => $this->faker->date(),
            'email' => $this->faker->unique()->safeEmail(),
            'identifier' => $this->faker->unique()->text(100),
            'level_id' => $level->id,
        ];
    }
}
