<?php

namespace Database\Seeders;

use App\Models\ClothSize;
use Illuminate\Database\Seeder;

class ClothSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClothSize::create([
            'sizeName' => 'S'
        ]);

        ClothSize::create([
            'sizeName' => 'M'
        ]);

        ClothSize::create([
            'sizeName' => 'L'
        ]);

        ClothSize::create([
            'sizeName' => 'XL'
        ]);
    }
}
