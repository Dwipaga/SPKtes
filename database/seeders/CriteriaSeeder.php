<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriteriaSeeder extends Seeder
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
                'id_kriteria' => 1,
                'kriteria' => 'C1',
                'bobot' => 4,
            ],
            [
                'id_kriteria' => 2,
                'kriteria' => 'C2',
                'bobot' => 5,
            ],
            [
                'id_kriteria' => 3,
                'kriteria' => 'C3',
                'bobot' => 3,
            ],
            [
                'id_kriteria' => 4,
                'kriteria' => 'C4',
                'bobot' => 3,
            ],
            [
                'id_kriteria' => 5,
                'kriteria' => 'C5',
                'bobot' => 4,
            ],
        ];
    
        DB::table('kriteria')->insert($data);
    }
}
