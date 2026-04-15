<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rumah_sakit extends Model
{
    protected $table = 'rumah_sakit';

    public function kamar()
    {
        return $this->hasMany(kamar_rs::class, 'rs_id');
    }

    public function antrian() {
        return $this->hasMany(antrian_pasien::class, 'rs_id')
                    ->where('status', 'waiting'); // misal cuma antrian aktif
    }
}
