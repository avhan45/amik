<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = [
            'nama_situs' => 'AMIK GLOBAL',
            'lengkap' => 'Akademi Manajemen Informatika & Komputer Global Kendari',
            'logo' => 'logo.png',
        ];
        Setting::insert($setting);
    }
}
