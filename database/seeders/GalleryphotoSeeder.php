<?php

namespace Database\Seeders;

use App\Models\Galleryphoto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GalleryphotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Galleryphoto::factory()->count(6)->sequence(
            [
                'gambar' => 'gp1.png',
                'title' => 'Kapolda Jateng',
                'description' => 'Polda Jateng Gandeng Perhutani Gelar Program Tanam Jagung untuk Dukung Ketahanan Pangan.'
            ],
            [
                'gambar' => 'gp2.jfif',
                'title' => 'Silaturahmi Kabareskrim',
                'description' => 'Silahturahmi Kabareskrim Polri di Kampung Samin, Desa Sambongrejo.'
            ],
            [
                'gambar' => 'gp3.jfif',
                'title' => 'Kapolri ajak muda mudi NU',
                'description' => 'Kapolri Ajak Muda-Mudi NU Tingkatkan Kualitas SDM Wujudkan Indonesia Emas.'
            ],
            [
                'gambar' => 'gp4.jpg',
                'title' => 'Perintah Kapolda',
                'description' => 'Kapolda Jateng: Kasus Perkosaan Anak di Brebes Ditangani Secara Profesional dan Proporsional.'
            ],
            [
                'gambar' => 'gp5.jpg',
                'title' => 'Kasus Brebes',
                'description' => 'Polda Jateng Selidiki Kasus Dugaan Pemerkosaan Anak di Bawah Umur di Brebes.'
            ],
            [
                'gambar' => 'gp6.jfif',
                'title' => 'Kapolri',
                'description' => 'Wakil Ketua Komisi III DPR Apresiasi Komitmen Kapolri yang Tindak Pelaku Pemerkosaan di Brebes.'
            ]
        )->create();
    }
}
