<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Non_Perizinan extends Model
{
    use HasFactory;

    protected $table = 'non_perizinan';
    protected $fillable = [
        'nama_perizinan',
        'persyaratan'
    ];
    public $timestamps = false;
}
