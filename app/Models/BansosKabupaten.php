<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BansosKabupaten extends Model
{
    //
    protected $table = 'bansos_kabupaten';


    //foreign id program bansos
    public function program(): BelongsTo {
        return $this->belongsTo(ProgramBansos::class, 'program_id');
    }

    //conection penerima bansos
    public function penerimaBansos(): HasMany {
        return $this->hasMany(PenerimaBansos::class, 'bansos_kabupaten_id','id');
    }
}
