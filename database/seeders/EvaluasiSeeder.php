<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvaluasiSeeder extends Seeder
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
                'id_kriteria' => 1,
                'value' => 5,
            ],
            [
                'id_alternatif' => 1,
                'id_kriteria' => 2,
                'value' => 7,
            ],
            [
                'id_alternatif' => 1,
                'id_kriteria' => 3,
                'value' => 10,
            ],
            [
                'id_alternatif' => 1,
                'id_kriteria' => 4,
                'value' => 15,
            ],
            [
                'id_alternatif' => 1,
                'id_kriteria' => 5,
                'value' => 5,
            ],
            [
                'id_alternatif' => 2,
                'id_kriteria' => 1,
                'value' => 3,
            ],
            [
                'id_alternatif' => 2,
                'id_kriteria' => 2,
                'value' => 7,
            ],
            [
                'id_alternatif' => 2,
                'id_kriteria' => 3,
                'value' => 11,
            ],
            [
                'id_alternatif' => 2,
                'id_kriteria' => 4,
                'value' => 12,
            ],
            [
                'id_alternatif' => 2,
                'id_kriteria' => 5,
                'value' => 4,
            ],
            [
                'id_alternatif' => 3,
                'id_kriteria' => 1,
                'value' => 6,
            ],
            [
                'id_alternatif' => 3,
                'id_kriteria' => 2,
                'value' => 4,
            ],
            [
                'id_alternatif' => 3,
                'id_kriteria' => 3,
                'value' => 9,
            ],
            [
                'id_alternatif' => 3,
                'id_kriteria' => 4,
                'value' => 8,
            ],
            [
                'id_alternatif' => 3,
                'id_kriteria' => 5,
                'value' => 6,
            ],
            [
                'id_alternatif' => 4,
                'id_kriteria' => 1,
                'value' => 8,
            ],
            [
                'id_alternatif' => 4,
                'id_kriteria' => 2,
                'value' => 5,
            ],
            [
                'id_alternatif' => 4,
                'id_kriteria' => 3,
                'value' => 6,
            ],
            [
                'id_alternatif' => 4,
                'id_kriteria' => 4,
                'value' => 5,
            ],
            [
                'id_alternatif' => 4,
                'id_kriteria' => 5,
                'value' => 2,
            ],
            [
                'id_alternatif' => 5,
                'id_kriteria' => 1,
                'value' => 1,
            ],
            [
                'id_alternatif' => 5,
                'id_kriteria' => 2,
                'value' => 8,
            ],
            [
                'id_alternatif' => 5,
                'id_kriteria' => 3,
                'value' => 3,
            ],
            [
                'id_alternatif' => 5,
                'id_kriteria' => 4,
                'value' => 5,
            ],
            [
                'id_alternatif' => 5,
                'id_kriteria' => 5,
                'value' => 3,
            ],
        ];
        DB::table('evaluasi')->insert($data);
    }
}