<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $fillable = [
        'herotext',
        'moto',
        'heroimage',
        'leftcardimage',
        'leftcardtitle',
        'leftcardtext',
        'centercardimage',
        'centercardtitle',
        'centercardtext',
        'rightcardimage',
        'rightcardtitle',
        'rightcardtext',
        'mail',
        'address',
    ];
}
