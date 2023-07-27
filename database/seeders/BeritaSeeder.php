<?php

namespace Database\Seeders;

use Database\Factories\BeritaFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Faktory Seeder Berita
        BeritaFactory::new()->count(10)->create();
    }
}
