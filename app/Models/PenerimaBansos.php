<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PenerimaBansos extends Model
{
    //
    protected $table = 'penerima_bansos';

    protected $hidden = [
        'user_id',
        'program_kabupaten_id'
    ];

    //foreign id bansos kabupaten
    public function bansosKabupaten(): BelongsTo {
        return $this->belongsTo(BansosKabupaten::class, 'bansos_kabupaten_id');
    }

    //foreign id bansos user
    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }
}
