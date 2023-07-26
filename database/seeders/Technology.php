<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Technology extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = Technology :: factory() -> count(10) -> create();

        foreach ($technologies as $technology) {

            $projects = Project :: inRandomOrder() -> limit(rand(1, 5)) -> get();

            $technologies -> users() -> attach($users);
        }
    }
}
