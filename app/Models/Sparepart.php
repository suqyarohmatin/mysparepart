<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    protected $fillable = [
        'kode_sparepart',
        'nama_sparepart',
        'merk',
        'stok',
        'harga',
        'deskripsi'
    ];
}
