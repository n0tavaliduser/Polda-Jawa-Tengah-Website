<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::factory()->count(5)->sequence(
            [
                'title' => 'Polda Jateng Gandeng Perhutani Gelar Program Tanam Jagung untuk Dukung Ketahanan Pangan',
                'slug' => 'polda-jateng-gandeng-perhutani-gelar-program-tanam-jagung-untuk-dukung-ketahanan-pangan',
                'description' => 'Semarang. Satgas Pangan Polda Jateng bekerja sama dengan Divisi Regional Perhutani Jateng menggelar tanam jagung di Desa Candirejo, Kecamatan Pringapus, Kabupaten Semarang, Selasa (24/1/23). Lahan seluas 15,6 hektar itu merupakan lahan bekas tebangan. Kapolda Jateng Irjen. Pol. Drs. Ahmad Luthfi, S.St.Mk., S.H., mengatakan kegiatan ini untuk mendukung program ketahanan pangan secara nasional. Pada teknisnya, lahan itu bisa dimanfaatkan untuk 3 bulan ke depan dengan sistem tumpangsari.',
                'author' => 'Tribratanews.polri.go.id',
                'image' => 'news1.png'
            ],
            [
                'title' => 'Silahturahmi Kabareskrim Polri di Kampung Samin, Desa Sambongrejo',
                'slug' => 'silaturahmi-kabareskrim-polri-di-kampung-samin-desa-sambongrejo',
                'description' => 'Bakti sosial Kabareskrim Polri, Komjen. Pol. Drs. Agus Andrianto, S.H., M.H., bersama rombongan di kabupaten Blora Jawa Tengah.Dalam kunjungannya Akpol lulusan 1989 ini beserta rombongan yang didampingi oleh Forkopimda Blora dan Forkopincam Sambong juga menyerahkan bantuan sosial berupa paket sembako sebanyak 550 paket. Tak hanya itu, Kabareskrim juga menyempatkan diri untuk berkeliling jalan kaki di kampung samin ini.Mantan Kapolda Sumut ini beserta rombongan tiba di Pendopo Sedulur Sikep Desa Sambongrejo disambut oleh kesenian Drum Blek dan Kesenian Lesung dari warga Sedulur Sikep Samin Desa Sambongrejo Kecamatan Sambong. Kemudian rombongan berkeliling di lokasi peternakan Sapi dan Kambing, Kolam lele, Home Stay, dan Kebun Buah di Kampung Samin Sedulur Sikep Desa Sambongrejo.',
                'author' => 'PID Bid TIK Polda Jateng',
                'image' => 'news2.png'
            ],
            [
                'title' => 'Kapolda Jateng: Kasus Perkosaan Anak di Brebes Ditangani Secara Profesional dan Proporsional',
                'slug' => 'kapolda-jateng-kasus-perkosaan-anak-di-brebes-ditangani-secara-profesional-dan-proporsional',
                'description' => '<p>Keenam pelaku pemerkosaan anak di Brebes akan ditindak sesuai dengan ketentuan yang berlaku. Dipastikan para pelaku akan diproses hukum secara professional dan proporsional. Hal tersebut disampaikan Kapolda Jateng Irjen. Pol. Drs. Ahmad Luthfi, S.H., S.St.M.K, usai peresmian markas komando (mako) Polres Sukoharjo.</p>',
                'author' => 'PID Bid TIK Polda Jateng',
                'image' => 'news3.png'
            ],
            [
                'title' => 'Polda Jateng Selidiki Kasus Dugaan Pemerkosaan Anak di Bawah Umur di Brebes',
                'slug' => 'polda-jateng-selidiki-kasus-dugaan-pemerkosaan-anak-di-bawah-umur-di-brebes',
                'description' => '<p>Kepolisian Daerah Jawa Tengah sedang menyelidiki kasus dugaan pemerkosaan anak usia 15 tahun yang dilakukan oleh ke enam orang pelaku kejahatan di Kab. Brebes, Jateng.</p>',
                'author' => 'PID Bid TIK Polda Jateng',
                'image' => 'news4.png'
            ],
            [
                'title' => 'Wakil Ketua Komisi III DPR Apresiasi Komitmen Kapolri yang Tindak Pelaku Pemerkosaan di Brebes',
                'slug' => 'wakil-ketua-komisi-iii-dpr-apresiasi-komitmen-kapolri-yang-tindak-pelaku-pemerkosaan-di-brebes',
                'description' => '<p>Wakil Ketua Komisi III DPR RI Ahmad Sahroni mengapresiasi komitmen Kapolri Jenderal Pol. Listyo Sigit Prabowo dan seluruh jajaran yang telah menindak para pelaku dugaan pemerkosaan anak di Kabupaten Brebes, Jawa Tengah.</p>',
                'author' => 'PID Bid TIK Polda Jateng',
                'image' => 'news5.jfif'
            ]
        )->create();
    }
}
