<?php

namespace Database\Seeders;

use App\Models\Cloth;
use Illuminate\Database\Seeder;

class ClothSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cloth::create([
            'typeID' => 1,
            'name' => 'Animal Shirt',
            'image' => 'animal.jpg',
            'price' => 103000,
            'color' => 'White, Mixed',
        ]);

        Cloth::create([
            'typeID' => 1,
            'name' => 'Blue Frame Shirt',
            'image' => 'blue_frame.jpg',
            'price' => 133000,
            'color' => 'White, Blue',
        ]);

        Cloth::create([
            'typeID' => 1,
            'name' => 'Dino Shirt',
            'image' => 'dino.jpg',
            'price' => 120000,
            'color' => 'White, Mixed',
        ]);

        Cloth::create([
            'typeID' => 1,
            'name' => 'Flower Shirt',
            'image' => 'flower.jpg',
            'price' => 320000,
            'color' => 'White, Green',
        ]);

        Cloth::create([
            'typeID' => 1,
            'name' => 'Halloween Shirt',
            'image' => 'halloween.jpg',
            'price' => 111000,
            'color' => 'Orange, Black',
        ]);

        Cloth::create([
            'typeID' => 1,
            'name' => 'Marshmallow Shirt',
            'image' => 'marshmallow.jpg',
            'price' => 212000,
            'color' => 'White',
        ]);

        Cloth::create([
            'typeID' => 1,
            'name' => 'Rainbow Shirt',
            'image' => 'rainbow.jpg',
            'price' => 310000,
            'color' => 'Blue, Pink, Yellow',
        ]);

        Cloth::create([
            'typeID' => 1,
            'name' => 'Tropical Shirt',
            'image' => 'tropical.jpg',
            'price' => 189000,
            'color' => 'White, Pink, Black',
        ]);

        Cloth::create([
            'typeID' => 2,
            'name' => 'Dino T - Shirt',
            'image' => 'dino.jpg',
            'price' => 99000,
            'color' => 'Gray, Green',
        ]);

        Cloth::create([
            'typeID' => 2,
            'name' => 'MLI T - Shirt',
            'image' => 'mli_tee.jpg',
            'price' => 199000,
            'color' => 'Black',
        ]);

        Cloth::create([
            'typeID' => 2,
            'name' => 'Precision T - Shirt',
            'image' => 'precision.jpg',
            'price' => 89000,
            'color' => 'Black',
        ]);

        Cloth::create([
            'typeID' => 2,
            'name' => 'Thunder T - Shirt',
            'image' => 'thunder_black.jpg',
            'price' => 99000,
            'color' => 'Black',
        ]);

        Cloth::create([
            'typeID' => 2,
            'name' => 'Tie Dye T - Shirt',
            'image' => 'tie_dye.jpg',
            'price' => 109000,
            'color' => 'Rainbow',
        ]);

        Cloth::create([
            'typeID' => 2,
            'name' => 'Washed T - Shirt',
            'image' => 'wash_black.jpg',
            'price' => 49000,
            'color' => 'Black',
        ]);

        Cloth::create([
            'typeID' => 2,
            'name' => 'Aesthetic T - Shirt',
            'image' => 'aesthetic.jpg',
            'price' => 99000,
            'color' => 'Yellow',
        ]);

        Cloth::create([
            'typeID' => 3,
            'name' => 'Bomber Jacket',
            'image' => 'bomber.jpg',
            'price' => 299000,
            'color' => 'Brown',
        ]);
        Cloth::create([
            'typeID' => 3,
            'name' => 'Cropped Jacket',
            'image' => 'crop.jpg',
            'price' => 199000,
            'color' => 'Brown',
        ]);
        
        Cloth::create([
            'typeID' => 3,
            'name' => 'Denim Jacket',
            'image' => 'denim.jpg',
            'price' => 499000,
            'color' => 'Black',
        ]);

        Cloth::create([
            'typeID' => 3,
            'name' => 'Flight Jacket',
            'image' => 'flight.jpg',
            'price' => 799000,
            'color' => 'Blue',
        ]);

        Cloth::create([
            'typeID' => 3,
            'name' => 'Fur Jacket',
            'image' => 'fur.jpg',
            'price' => 1599000,
            'color' => 'Black',
        ]);

        Cloth::create([
            'typeID' => 3,
            'name' => 'Linen Jacket',
            'image' => 'linen.jpg',
            'price' => 199000,
            'color' => 'White',
        ]);

        Cloth::create([
            'typeID' => 3,
            'name' => 'Twill Jacket',
            'image' => 'twill.jpg',
            'price' => 129000,
            'color' => 'Black',
        ]);

        Cloth::create([
            'typeID' => 3,
            'name' => 'Winter Jacket',
            'image' => 'winter.jpg',
            'price' => 999000,
            'color' => 'Black',
        ]);
    }
}
