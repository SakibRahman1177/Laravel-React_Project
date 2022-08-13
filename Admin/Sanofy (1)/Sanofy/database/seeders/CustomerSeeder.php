<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Customer::factory()->create([
            'name' => 'Customer1',
            'phone' => '01234',
            'email' => 'customer@email.com',
            'password' => '1234',
        ]);
        \App\Models\Customer::factory()->create([
            'name' => 'Customer2',
            'phone' => '0124',
            'email' => 'customer@email.com',
            'password' => '1234',
        ]);
        \App\Models\Customer::factory()->create([
            'name' => 'Customer3',
            'phone' => '0128',
            'email' => 'customer@email.com',
            'password' => '1234',
        ]);
        \App\Models\Customer::factory()->create([
            'name' => 'Customer4',
            'phone' => '0133',
            'email' => 'customer@email.com',
            'password' => '1234',
        ]);
        \App\Models\Customer::factory()->create([
            'name' => 'Customer5',
            'phone' => '0153',
            'email' => 'customer@email.com',
            'password' => '1234',
        ]);
        \App\Models\Customer::factory()->create([
            'name' => 'Customer6',
            'phone' => '0113',
            'email' => 'customer@email.com',
            'password' => '1234',
        ]);
        \App\Models\Customer::factory()->create([
            'name' => 'Customer7',
            'phone' => '0163',
            'email' => 'customer@email.com',
            'password' => '1234',
        ]);
        \App\Models\Customer::factory()->create([
            'name' => 'Customer8',
            'phone' => '012345',
            'email' => 'customer@email.com',
            'password' => '1234',
        ]);
        \App\Models\Customer::factory()->create([
            'name' => 'Customer9',
            'phone' => '012378',
            'email' => 'customer@email.com',
            'password' => '1234',
        ]);
        \App\Models\Customer::factory()->create([
            'name' => 'Customer10',
            'phone' => '012369',
            'email' => 'customer@email.com',
            'password' => '1234',
        ]);
    }
}
