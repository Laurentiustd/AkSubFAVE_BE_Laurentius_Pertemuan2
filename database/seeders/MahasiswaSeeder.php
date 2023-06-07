<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\mahasiswa;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id ID');
        for($i = 0; $i<3; $i++){
            mahasiswa::create([
                'nim' => $faker->numberBetween($min = 1000, $max = 9000),
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'foto'=>$faker->imageUrl($width = 640, $height = 480),
                'birthdate'=>$faker->date($format = 'Y-m-d'),
                'fakultas_id'=>$faker->numberBetween($min = 1, $max = 2)
            ]);
        };
    }
}
