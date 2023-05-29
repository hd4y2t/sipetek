<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perizinan extends Model
{
    use HasFactory;

    protected $table = 'perizinan';
    protected $fillable = [
        'nama_perizinan',
        'persyaratan'
    ];
    // datetime false
    public $timestamps = false;
}
