<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'token', 'logout', 'name'
    ];

    protected $primaryKey = 'token';
    protected $keyType = 'string';
    public $incrementing = false;
}
