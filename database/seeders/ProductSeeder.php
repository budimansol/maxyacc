<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i<=50; $i++){
            \DB::table('products')->insert([
                'product_name' => $faker->sentence(6, true),
                'product_code' => $faker->word,
                'price' => $faker->randomFloat(2, 100000, 1000000), // Tambahkan batas atas
                'created_at' => $faker->date(),
                'updated_at' => $faker->date(),
            ]);
        }
    }
}
