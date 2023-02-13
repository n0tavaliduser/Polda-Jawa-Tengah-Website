<?php

namespace Database\Seeders;

use App\Models\Official;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfficialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Official::factory()->count(13)->sequence(
            [
                'image' => 'official1.png',
                'name' => 'Drs. Ahmad Luthfi, S.St.Mk., S.H.',
                'position' => 'Kapolda Jawa Tengah',
                'unit' => 'Polda Jawa Tengah'
            ],
            [
                'image' => 'official2.png',
                'name' => 'Abiyoso Seno Aji, S.I.K',
                'position' => 'Wakapolda Jawa Tengah',
                'unit' => 'Polda Jawa Tengah'
            ],
            [
                'image' => 'official3.png',
                'name' => 'Drs. Untung Suropati',
                'position' => 'Irwasda Polda Jawa Tengah',
                'unit' => 'Polda Jawa Tengah'
            ],
            [
                'image' => 'official4.png',
                'name' => 'Handoyo, S.I.K., M.Si.',
                'position' => 'Karo Rena Polda Jawa Tengah',
                'unit' => 'Polda Jawa Tengah'
            ],
            [
                'image' => 'official5.png',
                'name' => 'Basya Radyananda, S.I.K., M.H.',
                'position' => 'Karo Ops Polda Jawa Tengah',
                'unit' => 'Polda Jawa Tengah'
            ],
            [
                'image' => 'official6.png',
                'name' => 'Kombes Pol Yohanes Ragil Heru Susetyo, S.I.K',
                'position' => 'Karo SDM Polda Jawa Tengah',
                'unit' => 'Polda Jawa Tengah'
            ],
            [
                'image' => 'official7.png',
                'name' => 'Farid Bachtiar Efendi, S.I.K',
                'position' => 'Karolog Polda Jawa Tengah',
                'unit' => 'Polda Jawa Tengah'
            ],
            [
                'image' => 'official8.png',
                'name' => 'Lafri Prasetyono, S.I.K',
                'position' => 'Dir Binmas Polda Jawa Tengah',
                'unit' => 'Polda Jawa Tengah'
            ],
            [
                'image' => 'official9.png',
                'name' => 'Kukuh Kalis Susilo, S.I.K',
                'position' => 'Dir Intelkam Polda Jawa Tengah',
                'unit' => 'Polda Jawa Tengah'
            ],
            [
                'image' => 'official10.png',
                'name' => 'Kombes Pol Dwi Subagiyo, S.I.K',
                'position' => 'Dirreskrimsus Polda Jawa Tengah',
                'unit' => 'Polda Jawa Tengah'
            ],
            [
                'image' => 'official11.png',
                'name' => 'Djoko Susilo, S.I.K., S.H',
                'position' => 'Dir Samapta Polda Jawa Tengah',
                'unit' => 'Polda Jawa Tengah'
            ],
            [
                'image' => 'official12.png',
                'name' => 'Agus Suryonugroho, S.I.K., S.H., M.Hum.',
                'position' => 'Dir Lantas Polda Jawa Tengah',
                'unit' => 'Polda Jawa Tengah'
            ]
        )->create();
    }
}
