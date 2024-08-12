<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    use HasApiTokens, HasFactory, HasUuids;

    protected $fillable = [
        'id',
        'name',
        'username',
        'phone',
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
    ];

    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';
}
