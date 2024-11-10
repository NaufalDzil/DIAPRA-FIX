<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class St extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'nama',
        'maksud',
        'tujuan',
        'lamanya',
        'tanggal_berangkat',
        'tanggal_kembali',
        'ket',
        'surat'
    ];
}
