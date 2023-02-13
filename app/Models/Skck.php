<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skck extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'keperluan',
        'identitas',
        'nopassport',
        'tingkatkewenangan',
        'nomoridentitas',
        'nomorkitas',
        'fullname',
        'notelp',
        'tanggallahir',
        'jeniskelamin',
        'agama',
        'pekerjaan',
        'tempatlahir',
        'statusperkawinan',
        'warganegara',
        'beratbadan',
        'tinggi',
        'bentukwajah',
        'rambut',
        'kulit',
        'tandaistimewa',
        'alamatktp',
        'rt',
        'rw',
        'provinsi',
        'kecamatan',
        'kabupaten',
        'desa',
        'domisili',
        'alamatsekarang',
        'rtsekarang',
        'rwsekarang',
        'provinsisekarang',
        'kecamatansekarang',
        'kabupatensekarang',
        'desasekarang',
        'status'
    ];
}
