<?php

namespace Database\Seeders;

use App\Models\Galleryvideo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GalleryvideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Galleryvideo::factory()->count(50)->create();
    }
}
