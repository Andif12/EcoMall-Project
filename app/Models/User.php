<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Atribut yang dapat diisi secara massal.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'birth_place',
        'birth_date',
        'gender',
        'email',
        'phone',
        'password',
        'profile_picture',
    ];

    /**
     * Atribut yang disembunyikan pada serialisasi.
     *
     * @var array<int, string>
     */
    public function address()
    {
        return $this->hasOne(Address::class);
    }
    
    protected $attributes = [
        'profile_picture' => 'mall/img/Pengguna/avatar.JPG',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Ambil atribut yang harus di-cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    
}
