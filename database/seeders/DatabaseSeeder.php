<?php

namespace Database\Seeders;

use Core\Learning\Database\seeders\CourseSeeder;
use Core\Learning\Database\seeders\ItemSeeder;
use Core\Learning\Database\seeders\LevelSeeder;
use Core\Learning\Database\seeders\ProgramSeeder;
use Core\Learning\Database\seeders\StudentSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LevelSeeder::class);
        $this->call(ProgramSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(ItemSeeder::class);
    }
}
