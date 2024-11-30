<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    protected $fillable = [
        'nama_customer', 'berat', 'tanggal_masuk', 'harga_total', 'status', 'tanggal_diambil', 'image'
    ];
}
