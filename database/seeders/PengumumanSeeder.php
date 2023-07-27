<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengumuman = [
            [
                'judul' => 'Pengumuman 1',
                'isi' => 'Isi Pengumuman 1',
                'gambar' => 'pengumuman1.jpg',
            ],
            [
                'judul' => 'Pengumuman 2',
                'isi' => 'Isi Pengumuman 2',
                'gambar' => 'pengumuman2.jpg',
            ],
            [
                'judul' => 'Pengumuman 3',
                'isi' => 'Isi Pengumuman 3',
                'gambar' => 'pengumuman3.jpg',
            ],
        ];
        foreach ($pengumuman as $p) {
            \App\Models\Pengumuman::insert($p);
        }
    }
}
