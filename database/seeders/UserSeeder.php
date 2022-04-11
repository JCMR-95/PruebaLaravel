<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run()
    {
        $data = [

            [
                'name' => 'Juan Perez',
                'email' => 'juan@perez.com',
                'password' => Hash::make('juanperez123'),
                'role' => 'Administrador',
            ],[
                'name' => 'Alejandra Olmos',
                'email' => 'alejandra@olmos.com',
                'password' => Hash::make('alejandraolmos123'),
                'role' => 'Administrador',
            ],[
                'name' => 'Alex Rodriguez',
                'email' => 'alex@rodriguez.com',
                'password' => Hash::make('alexrodriguez123'),
                'role' => 'Usuario Normal',
            ]

        ];

        DB::table('users')->insert($data);
    }
}
