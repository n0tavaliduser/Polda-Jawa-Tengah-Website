<?php

namespace Database\Seeders;

use App\Models\Skck;
use Illuminate\Database\Seeder;

class SkckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'keperluan' => 'Melamar Pekerjaan',
            'identitas' => 'E-KTP',
            'nopassport' => 'test',
            'tingkatkewenangan' => 'test',
            'nomoridentitas' => '3201110909990006',
            'nomorkitas' => 'test',
            'fullname' => 'Stevano Titondea Prayoga Putra',
            'notelp' => '08124198231',
            'tanggallahir' => '09091999',
            'jeniskelamin' => 'Laki-laki',
            'agama' => 'Kristen',
            'pekerjaan' => 'Mahasiswa',
            'tempatlahir' => 'Semarang',
            'statusperkawinan' => 'Belum kawin',
            'warganegara' => 'Indonesia',
            'beratbadan' => '73',
            'tinggi' => '170',
            'bentukwajah' => 'Oval',
            'rambut' => 'Keriting',
            'kulit' => 'Hitam',
            'tandaistimewa' => 'tidak ada',
            'alamatktp' => 'Tamansari Bukit Damai',
            'rt' => '02',
            'rw' => '06',
            'provinsi' => 'Jawa Barat',
            'kecamatan' => 'Gunung Sindur',
            'kabupaten' => 'Bogor',
            'desa' => 'Padurenan',
            'domisili' => 'Semarang',
            'alamatsekarang' => 'Jl Patriot II',
            'rtsekarang' => '01',
            'rwsekarang' => '01',
            'provinsisekarang' => 'Jawa Tengah',
            'kecamatansekarang' => 'Semarang Utara',
            'kabupatensekarang' => 'Semarang',
            'desasekarang' => 'Purwosari',
            'status' => 'Pengajuan',
        ];

        Skck::create($data);
    }
}
