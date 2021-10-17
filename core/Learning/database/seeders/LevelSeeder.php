<?php

namespace Core\Learning\Database\seeders;


use Core\Learning\Models\Level;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{

    public function run(): void
    {
        Level::Factory()->count(5)->create();
    }
}
