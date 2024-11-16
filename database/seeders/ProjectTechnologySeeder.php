<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // html-css-booleaner
        $project1 = Project::findOrFail(1);
        $project1->technologies()->sync([1, 2]);

        // htmlcss-discord
        $project2 = Project::findOrFail(2);
        $project2->technologies()->sync([1, 2]);

        // tml-css-spotifyweb
        $project3 = Project::findOrFail(3);
        $project3->technologies()->sync([1, 2]);

        // vue-boolzapp
        $project4 = Project::findOrFail(4);
        $project4->technologies()->sync([1, 2, 3, 4]);

        // vite-yu-gi-oh
        $project5 = Project::findOrFail(5);
        $project5->technologies()->sync([1, 2, 3, 4]);

        // vite-boolflix
        $project6 = Project::findOrFail(6);
        $project6->technologies()->sync([1, 2, 3, 4]);

        // php-hotel
        $project7 = Project::findOrFail(7);
        $project7->technologies()->sync([1, 2, 3, 5]);

        // laravel-dc-comics
        $project8 = Project::findOrFail(8);
        $project8->technologies()->sync([1, 2, 3, 5, 6]);

        // laravel-auth
        $project9 = Project::findOrFail(9);
        $project9->technologies()->sync([1, 2, 3, 5, 6]);

        // laravel-one-to-many
        $project10 = Project::findOrFail(10);
        $project10->technologies()->sync([1, 2, 3, 5, 6]);
    }
}
