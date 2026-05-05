<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;

class SkriningTbc extends Model
{
    protected $table = 'skrining_tbc';

    protected $fillable = [
        'user_id',
        'cough_duration',
        'fever',
        'weight_loss',
        'night_sweat',
        'screening_result',
        'screening_date',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'fever' => 'boolean',
        'weight_loss' => 'boolean',
        'night_sweat' => 'boolean',
        'screening_date' => 'datetime',
    ];
}