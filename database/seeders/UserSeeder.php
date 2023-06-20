<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ramon Hidayat',
            'nis' => '12209364',
            'rayon' => 'Cisarua 1',
            'namapj' => 'Dede Mulyana',
            'ruang' => '245-145',
            'role' => 'user',
            'hari' => 'senin',
            'piket' => '245',
            'password' => bcrypt(12209364),
         ]);
        User::create([
            'name' => 'samsul',
            'nis' => '12209365',
            'rayon' => 'Cisarua 1',
            'namapj' => 'Dede Mulyana',
            'ruang' => '245-145',
            'role' => 'user',
            'hari' => 'senin',
            'piket' => '245',
            'password' => bcrypt(12209364),
         ]);
        User::create([
            'name' => 'ardila',
            'nis' => '12209366',
            'rayon' => 'Cisarua 1',
            'namapj' => 'Dede Mulyana',
            'ruang' => '245-145',
            'role' => 'user',
            'hari' => 'senin',
            'piket' => '245',
            'password' => bcrypt(12209364),
         ]);
         User::create([
            'name' => 'admin',
            'nis' => '12209444',
            'role' => 'admin',
            'password' => bcrypt(12209444),
         ]);
    }
}
