<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firma extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_firma',
        'phone',
        'alamat',
        'rating',
        'gambar',
    ];
}
