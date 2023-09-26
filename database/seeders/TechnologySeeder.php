<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies=[
            'Laravel',
            'React',
            'C++',
            'CSS',
            'HTML',
            'VueJs',

        ];
        Schema::withoutForeignKeyConstraints(function () {
            
            Technology::truncate();
        });

        foreach($technologies as $technology) {
            Technology::create([
                'title'=>$technology
            ]);
        }
    }
}
