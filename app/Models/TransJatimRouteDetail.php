<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TransJatimRouteDetail extends Model
{
    //
    protected $table = 'trans_jatim_detail_routes';

    protected $hidden = [
        'id',
        'transjatim_route_id'
    ];

    public function transjatim():BelongsTo{
        return $this->belongsTo(TransJatim::class,'transjatim_route_id');
    }
}
