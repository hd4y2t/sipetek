<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $table = 'mobil_jenazah';
    protected $fillable = [
        'nomor',
        'kontak'
    ];
    public $timestamps = false;
}
