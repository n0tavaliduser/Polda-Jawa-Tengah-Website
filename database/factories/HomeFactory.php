<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Home>
 */
class HomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => '1',
            'herotext' => 'Polda Jawa Tengah',
            'moto' => 'melayani masyarakat dengan tulus dan ikhlas',
            'heroimage' => 'carousel1.jpg',
            'leftcardimage' => 'borobudur.svg',
            'leftcardtitle' => 'Borobudur',
            'leftcardtext' => 'diartikan sebagai keagungan peninggalan sejarah, pun pula dimaksudkan akan hikmat kekuatan pembuatnya terdahul, sehingga dapat terwujud suatu bangunan yang megah dan kuat untuk pula diwarisi semangat juang tabah dan ulet.',
            'centercardimage' => 'logopolda.svg',
            'centercardtitle' => 'Polda Jawa Tengah',
            'centercardtext' => 'Jawa Tengah adalah provinsi yang terletak di bagian tengah Pulau Jawa. Ibu kotanya adalah Semarang, berbatasan dengan Provinsi Jawa Barat di sebelah barat, Daerah Istimewa Yogyakarta di sebelah selatan, Jawa Timur di sebelah timur, dan Laut Jawa di sebelah utara.',
            'rightcardimage' => 'jateng.svg',
            'rightcardtitle' => 'Peta Jawa Tengah',
            'rightcardtext' => 'Jawa Tengah adalah provinsi yang terletak di bagian tengah Pulau Jawa. Ibu kotanya adalah Semarang, berbatasan dengan Provinsi Jawa Barat di sebelah barat, Daerah Istimewa Yogyakarta di sebelah selatan, Jawa Timur di sebelah timur, dan Laut Jawa di sebelah utara.',
            'mail' => 'bidti_jateng@polri.go.id',
            'address' => 'Jl. Pahlawan No.1, Mugassari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50142',
        ];
    }
}
