<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuaris extends Model
{
    use HasFactory;
    protected $fillable = [
	'username',
	'password',
	'nom',
	'cognom',
	'email',
	'mobil',
	'admin'
    ];
}
