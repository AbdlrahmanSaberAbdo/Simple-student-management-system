<?php

namespace Core\Learning\Database\seeders;

use Core\Learning\Models\Item;
use Core\Learning\Models\Student;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{

    public function run(): void
    {
        Item::Factory()->count(2)->create()->each(function (Item $item) {
            $course = $item->course;
            $student = Student::inRandomOrder()->first();
            $course->students()->attach($student->id, [
                'items' => json_encode([["item_id" => $item->id, "grade" => 0]]),
            ]);
        });
    }
}
