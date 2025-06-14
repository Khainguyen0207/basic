<?php

namespace App\Models;

use App\Enums\CustomerStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = [
        'id',
        'name',
        'password',
        'email',
        'cash',
        'status',
        'birthday',
        'phone',
        'email_verified_at',
        'remember_token',
        'is_verified',
        'last_login_at',
        'gender',
        'address',
        'is_partner',
    ];

    protected $casts = [
        'birthday' => 'datetime',
        'cash' => 'integer',
        'status' => CustomerStatusEnum::class,
        'password' => 'hashed',
    ];

    protected $hidden = ['password'];
}
