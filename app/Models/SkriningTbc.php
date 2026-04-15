<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;

#[Fillable([
    'user_id',
    'cough_duration',
    'fever',
    'weight_loss',
    'night_sweat',
    'screening_result',
    'screening_date',
])]
#[Hidden([
    'created_at',
    'updated_at',
])]
class SkriningTbc extends Model
{
    protected $table = 'skrining_tbc';

    protected function casts(): array
    {
        return [
            'fever' => 'boolean',
            'weight_loss' => 'boolean',
            'night_sweat' => 'boolean',
            'screening_date' => 'datetime',
        ];
    }
}