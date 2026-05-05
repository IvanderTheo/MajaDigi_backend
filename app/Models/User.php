<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Concerns\HasUuids; // Tambahkan ini
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Laravel\Sanctum\HasApiTokens; // token login
use Filament\Panel; //access admin

#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasUuids, HasApiTokens; // Tambahkan HasUuids di sini, tambahan token

    // Beritahu Laravel bahwa Primary Key kita adalah String (UUID)
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'address',
        'latitude',
        'longitude',
        'birth_date',
        'role',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'birth_date' => 'date', // Tambahkan cast untuk tanggal lahir
            'latitude' => 'decimal:7',
            'longitude' => 'decimal:7',
        ];
    }
    public function canAccessPanel(Panel $panel): bool //access admin
    {
        return $this->role === 'admin';
    }
}