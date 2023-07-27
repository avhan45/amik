<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pendidikan = [
            [
                'kd_pendidikan' => 'TI',
                'jurusan' => 'Teknik Informatika',
                'gambar' => 'ti.jpg',
            ],
            [
                'kd_pendidikan' => 'SI',
                'jurusan' => 'Sistem Informasi',
                'gambar' => 'si.jpg',
            ],
            [
                'kd_pendidikan' => 'MI',
                'jurusan' => 'Manajemen Informatika',
                'gambar' => 'mi.jpg',
            ]
            ];
        foreach ($pendidikan as $pend) {
            \App\Models\Pendidikan::insert($pend);
        }

    }
}
