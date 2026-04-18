<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id,ID');

       $data =[
            [
                'nama_produk' => $faker->sentence(3),
                'harga' => $faker->numberBetween(10000, 100000),
                'supplier_id'=> 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('produk')->insert($data);
    }
}
