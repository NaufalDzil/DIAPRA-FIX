<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kadis extends Model
{
    protected $fillable = [
        'nama',
        'pangkat',
        'NIP'
    ];
}
