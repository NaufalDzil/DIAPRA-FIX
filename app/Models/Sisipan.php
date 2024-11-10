<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sisipan extends Model
{
    use HasFactory;

    protected $fillable = [
        'no',
        'nomor_surat',
        'alamat',
        'tanggal_surat',
        'perihal',
        'surat'
    ];
}
