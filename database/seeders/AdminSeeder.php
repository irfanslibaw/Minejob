<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = [
            [
                'nama'=>'admin',
                'email'=> 'admin@gmail.com',
                'password'=>bcrypt('123'),

            ]
        ];

        foreach($admin as $key => $val){
            Admin::create($val);
        }
    }
}
