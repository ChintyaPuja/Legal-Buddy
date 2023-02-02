<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengadilan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pengadilan',
        'phone',
        'alamat',
        'rating',
        'gambar',
    ];
}
