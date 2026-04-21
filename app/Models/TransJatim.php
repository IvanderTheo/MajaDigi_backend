<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TransJatim extends Model
{
    //
    protected $table = 'transjatim_route';

    public function route_details():HasMany {
        return $this->hasMany(TransJatimRouteDetail::class,'transjatim_route_id','id');
    }
}
