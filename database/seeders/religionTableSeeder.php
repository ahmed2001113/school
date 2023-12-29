<?php

namespace Database\Seeders;

use App\Models\Religion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class religionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('religions')->delete();

        $religions = [

            [
                'Name_en'=> 'Muslim',
                'Name'=> 'مسلم'
            ],
            [
                'Name_en'=> 'Christian',
                'Name'=> 'مسيحي'
            ],
            [
                'Name_en'=> 'Other',
                'Name'=> 'غيرذلك'
            ],

        ];

        foreach ($religions as $R) {
            Religion::create($R);
        }
    }
    }

