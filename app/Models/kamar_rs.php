<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kamar_rs extends Model
{
    protected $table = 'kamar_rs';

    public function rs() {
        return $this->belongsTo(rumah_sakit::class, 'rs_id');
    }
}
