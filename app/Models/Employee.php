<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'division_id',
        'position',
        'image'
    ];

    public $timestamps = false;

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
