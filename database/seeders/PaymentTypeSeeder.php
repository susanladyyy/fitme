<?php

namespace Database\Seeders;

use App\Models\PaymentType;
use Illuminate\Database\Seeder;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentType::create([
            'name' => 'BCA'
        ]);

        PaymentType::create([
            'name' => 'BNI'
        ]);

        PaymentType::create([
            'name' => 'Bank BRI'
        ]);

        PaymentType::create([
            'name' => 'Mandiri'
        ]);

        PaymentType::create([
            'name' => 'OVO'
        ]);

        PaymentType::create([
            'name' => 'GoPay'
        ]);
    }
}
