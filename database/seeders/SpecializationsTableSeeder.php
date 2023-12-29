<?php

namespace Database\Seeders;

use App\Models\Specialization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SpecializationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('specializations')->delete();
        $specializations = [
            ['Name_en'=> 'Arabic', 'Name'=> 'عربي'],
            ['Name_en'=> 'Sciences','Name'=> 'علوم'],
            ['Name_en'=> 'Computer','Name'=> 'حاسب الي'],
            ['Name_en'=> 'English', 'Name'=> 'انجليزي'],
        ];
        foreach ($specializations as $S) {
            Specialization::create($S);
        }
    }
}
