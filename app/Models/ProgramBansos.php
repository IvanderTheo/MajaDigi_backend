<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function bansosKabupaten(): HasMany {
        return $this->hasMany(BansosKabupaten::class, 'program_id','id');
    }
}