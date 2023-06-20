<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hari;

class HariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hari::create([
            'hari' => 'senin', 
         ]);
        Hari::create([
            'hari' => 'selasa', 
         ]);
        Hari::create([
            'hari' => 'rabu', 
         ]);
        Hari::create([
            'hari' => 'kamis', 
         ]);
        Hari::create([
            'hari' => 'jumat', 
         ]);
    }
}
