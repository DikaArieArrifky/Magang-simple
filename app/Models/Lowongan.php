<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;
    protected $table = 'lowongans';
    protected $fillable = [
        'judul',
        'deskripsi',
        'perusahaan',
        'lokasi',
    ];

    public function pendaftar()
    {
        return $this->hasMany(Pendaftar::class, 'lowongan_id');
    }
}
