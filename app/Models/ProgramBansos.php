<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;

#[Fillable([
    'name',
    'description',
    'total_fund',
    'quota_total',
    'quota_distributed',
    'percentage',
])]
#[Hidden([
    'created_at',
    'updated_at',
])]
class ProgramBansos extends Model
{
    protected $table = 'program_bansos';
}