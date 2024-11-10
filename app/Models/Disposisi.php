<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    use HasFactory;

    protected $fillable = [
        'no',
        'tujuan',
        'disposisi'
    ];


    public function suratMasuk()
    {
        return $this->belongsTo(SuratMasuk::class, 'no', 'nomor_surat');
    }
}
