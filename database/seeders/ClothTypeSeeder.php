<?php

namespace Database\Seeders;

use App\Models\ClothType;
use Illuminate\Database\Seeder;

class ClothTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClothType::create([
            'typeName' => 'Shirt'
        ]);

        ClothType::create([
            'typeName' => 'T - Shirt'
        ]);

        ClothType::create([
            'typeName' => 'Jacket'
        ]);
    }
}
