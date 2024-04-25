<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama' => 'akmal',
                'email' => 'akmal@gmail.com',
                'password' => Hash::make('123'),
                'umur' => '20 tahun',
                'jenis_kelamin' => 'L',
                'tanggal_lahir' => '2021-3-7'
            ]

        ]);
    }
}
