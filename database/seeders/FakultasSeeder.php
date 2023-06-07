<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\fakultas;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $namas = ['School Of Information System', 'School Of Computer Science'];
        foreach($namas as $nama){
           $Fakultas = fakultas::create([
                'namaFakultas' => $nama 
            ]);
        }
    }
}
