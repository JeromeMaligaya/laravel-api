<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            "HTML",
            "CSS",
            "JS",
            "Vue",
            "PHP",
            "Laravel"
        ];

        foreach ($technologies as $singleTechnology) {
            $technlogy = new Technology();
            $technlogy->name = $singleTechnology;
            $technlogy->save();
        }
    }
}
