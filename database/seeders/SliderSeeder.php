<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slider = [
            [
                'judul' => 'Slider 1',
                'gambar' => 'slider1.jpg',
                'keterangan' => 'Keterangan slider 1',
            ],
            [
                'judul' => 'Slider 2',
                'gambar' => 'slider2.jpg',
                'keterangan' => 'Keterangan slider 2',
            ],
            [
                'judul' => 'Slider 3',
                'gambar' => 'slider3.jpg',
                'keterangan' => 'Keterangan slider 3',
            ],
        ];
        foreach ($slider as $s) {
            \App\Models\Slider::insert($s);
        }
    }
}
