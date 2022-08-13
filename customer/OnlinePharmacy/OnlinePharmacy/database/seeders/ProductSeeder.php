<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Alendronate',
            'price' => 400,
            'description' => 'Tablet',
        
        ]);
        Product::create([
            'name' => 'Metformin',
            'price' => 50,
            'description' => 'Ointment',
        ]);
        Product::create([
            'name' => 'Omeprazole',
            'price' => 200,
            'description' => 'Tablet',
        ]);
        Product::create([
            'name' => 'Hydrocodone',
            'price' => 300,
            'description' => 'Respiratory Solution',
        ]);

        Product::create([
            'name' => 'Omidon',
            'price' => 30,
            'description' => 'Allergy Tablet',
        ]);
    }
}
