<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profile = new Profile();

        $data = [
            ['judul' => 'Visi',
            'isi' => '<p>Menjadi perusahaan yang terdepan di bidang teknologi informasi dan komunikasi yang berpengalaman dan berkualitas.</p>'],
            ['judul' => 'Misi',
            'isi' => '<p>Menjadi perusahaan yang terdepan di bidang teknologi informasi dan komunikasi yang berpengalaman dan berkualitas.</p>'],
            ['judul' => 'Sejarah',
            'isi' => '<p>Menjadi perusahaan yang terdepan di bidang teknologi informasi dan komunikasi yang berpengalaman dan berkualitas.</p>'],
        ];
        foreach ($data as $key => $value) {
            $profile->insert($value);
        }
    }
}
