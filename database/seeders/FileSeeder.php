<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            [
                'idUser' => '1',
                'nameUser' => 'Juan Perez',
                'file' => 'PlayaPerez.jpg',
            ],[
                'idUser' => '1',
                'nameUser' => 'Juan Perez',
                'file' => 'BosquePerez.jpg',
            ],[
                'idUser' => '2',
                'nameUser' => 'Alejandra Olmos',
                'file' => 'PlayaOlmos.jpg',
            ],[
                'idUser' => '2',
                'nameUser' => 'Alejandra Olmos',
                'file' => 'BosqueOlmos.jpg',
            ],[
                'idUser' => '2',
                'nameUser' => 'Alejandra Olmos',
                'file' => 'PruebaOlmos.docx',
            ],[
                'idUser' => '3',
                'nameUser' => 'Alex Rodriguez',
                'file' => 'PlayaRodriguez.jpg',
            ],[
                'idUser' => '3',
                'nameUser' => 'Alex Rodriguez',
                'file' => 'BosqueRodriguez.jpg',
            ],[
                'idUser' => '3',
                'nameUser' => 'Alex Rodriguez',
                'file' => 'PruebaRodriguez.pdf',
            ]

        ];

        DB::table('files')->insert($data);
    }
}
