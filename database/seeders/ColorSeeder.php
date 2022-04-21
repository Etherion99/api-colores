<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    public function run()
    {
        $names = ['cerulean', 'fuchsia rose', 'true red', 'aqua sky', 'tigerlily', 'blue turquoise', 'sand dollar', 'chili pepper', 'blue iris', 'mimosa'];
        $colors = ['#98B2D1', '#C74375', '#BF1932', '#7BC4C4', '#E2583E', '#53B0AE', '#DECDBE', '#9B1B30', '#5A5B9F', '#F0C05A'];

        for($i=0; $i<10; $i++){
            DB::table('colors')->insert([
                'name' => $names[$i],
                'color' => $colors[$i]
            ]);
        }
    }
}
