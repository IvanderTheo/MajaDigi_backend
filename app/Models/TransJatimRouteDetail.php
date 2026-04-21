<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TransJatimRouteDetail extends Model
{
    //
    protected $table = 'trans_jatim__detail__routes';

    public function transjatim():BelongsTo{
        return $this->belongsTo(TransJatim::class);
    }
}
