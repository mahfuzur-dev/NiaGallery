<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class CustomerLogin extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $guard = 'customerlogin';
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_photo',
        'email_verified_at'
    ];
    protected $guarded = ['id'];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
