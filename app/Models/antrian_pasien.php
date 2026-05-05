<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class antrian_pasien extends Model
{
    protected $table = 'antrian_pasien';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'rs_id',
        'queue_number',
        'service_type',
        'queue_date',
        'status',
    ];

    public function rs() {
        return $this->belongsTo(rumah_sakit::class, 'rs_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
