<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'poto',
        'name',
        'level',
        'email',
        'instansi',
        'peker_id',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function peker() {
        return $this->belongsTo(ModelPengajuanKerjasama::class, 'peker_id', 'id');
    }

    public function mitra() {
        return $this->belongsTo(ModelMitra::class, 'name', 'id');
    }

    public function peker_id() {
        return $this->hasMany(ModelPengajuanKerjasama::class, 'id', 'id');
    }

    public function pengajuan() {
        return $this->hasMany(User::class, 'instansi', 'id');
    }

    public function berita() {
        return $this->hasMany(User::class, 'user_id', 'id');
    }
}
