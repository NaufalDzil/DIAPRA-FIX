<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nodin extends Model
{
    use HasFactory;

    protected $fillable=[
        'tanggal_penomoran',
        'alamat',
        'tanggal_surat',
        'perihal',
        'surat'
    ];
}
