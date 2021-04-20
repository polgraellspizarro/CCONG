<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socis extends Model
{
    use HasFactory;
    protected $fillable = [
        'nif',
        'nom',
        'cognom',
        'adreca',
        'poblacio',
        'comarca',
        'fixe',
        'mobil',
        'email',
        'mesQuot',
        'nomOng'
    ];
}
