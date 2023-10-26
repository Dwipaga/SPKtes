<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlternatifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'id_alternatif' => 1,
                'alternatif' => 'A1',
            ],
            [
                'id_alternatif' => 2,
                'alternatif' => 'A2',
            ],
            [
                'id_alternatif' => 3,
                'alternatif' => 'A3',
            ],
            [
                'id_alternatif' => 4,
                'alternatif' => 'A4',
            ],
            [
                'id_alternatif' => 5,
                'alternatif' => 'A5',
            ],
        ];
    
        DB::table('alternatif')->insert($data);
    }
}
