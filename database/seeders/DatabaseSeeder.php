<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            HomeSeeder::class,
            GalleryphotoSeeder::class,
            GalleryvideoSeeder::class,
            NewsSeeder::class,
            UserSeeder::class,
            OfficialSeeder::class,
            ContactSeeder::class,
        ]);
    }
}
