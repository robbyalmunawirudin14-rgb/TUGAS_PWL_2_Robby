<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

       $data =[
            [
                'judul_buku' => $faker->sentence(3),
                'tahun_terbit' => $faker->year(),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('buku')->insert($data);
    }
}
