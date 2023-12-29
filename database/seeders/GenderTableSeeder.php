<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genders')->delete();
        $genders = [    [
            'Name_en'=> 'Female',
            'Name'=> 'انثي'
        ],[ 'Name_en'=> 'male',
        'Name'=> 'ذكر']];

        foreach ($genders as $gender) {
            Gender::create($gender);
        }
    }
    
}
