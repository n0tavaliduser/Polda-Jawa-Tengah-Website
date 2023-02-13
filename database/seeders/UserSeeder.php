<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(5)->sequence(
        [
            'name' => 'Polda Jateng | Multimedia',
            'email' => 'admin@polda.com',
            'role' => 'multimediamanager'
        ],
        [
            'name' => 'Stevano Titondea P P',
            'email' => '11831',
            'role' => 'masyarakat'
        ],
        [
            'name' => 'Polda Jawa Tengah | Skck Manager',
            'email' => 'admin@skck.com',
            'role' => 'skckmanager'
        ],
        [
            'name' => 'Polda Jawa Tengah | SDM',
            'email' => 'admin@sdm.com',
            'role' => 'sdm'
        ],
        [
            'name' => 'Andre Taulani',
            'email' => '11832',
            'role' => 'masyarakat'
        ]
        )->create();
    }
}
