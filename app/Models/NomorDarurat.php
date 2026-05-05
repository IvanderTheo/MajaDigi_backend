<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;

#[Fillable([
    'nama_layanan',
    'nomor_telepon',
    'deskripsi',
])]
#[Hidden([
    'created_at',
    'updated_at',
])]
class NomorDarurat extends Model
{
    protected $table = 'nomor_darurat';
}