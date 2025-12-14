<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lowongan;

class LowonganSeeder extends Seeder
{
    public function run(): void
    {
        Lowongan::insert([
            [
                'judul' => 'Magang Web Developer',
                'deskripsi' => 'Membantu pengembangan aplikasi web menggunakan Laravel.',
                'perusahaan' => 'Tech Solutions',
                'lokasi' => 'Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Magang UI/UX Designer',
                'deskripsi' => 'Mendesain tampilan aplikasi dan prototype.',
                'perusahaan' => 'Creative Studio',
                'lokasi' => 'Bandung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Magang Data Analyst',
                'deskripsi' => 'Mengolah dan menganalisis data perusahaan.',
                'perusahaan' => 'Data Insights',
                'lokasi' => 'Surabaya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
