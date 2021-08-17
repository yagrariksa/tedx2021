<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Essay extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname', 'email'
    ];

    public function payment()
    {
        return $this->hasMany(EssayPayment::class, 'uid', 'id');
    }
}
