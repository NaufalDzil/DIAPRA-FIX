<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;

    protected $table = 'suratmasuks';

    protected $fillable =[
            'tanggal_terima',
            'alamat',
            'tanggal_surat',
            'nomor_surat',
            'perihal',
            'surat',
    ];

    public function disposisi()
    {
        return $this->hasOne(Disposisi::class, 'no', 'nomor_surat');
    }
}
