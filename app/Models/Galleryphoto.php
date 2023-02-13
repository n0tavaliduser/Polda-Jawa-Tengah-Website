<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galleryphoto extends Model
{
    use HasFactory;
    protected $fillable = [
        'gambar',
        'title',
        'description'
    ];
}
