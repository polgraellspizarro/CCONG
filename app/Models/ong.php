<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ong extends Model
{
    use HasFactory;
    protected $fillable = [
	'cif',
	'nom',
	'adreca',
	'poblacio',
	'comarca',
	'tipus'
    ];
}
