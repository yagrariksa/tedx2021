<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EssayPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'essay_id', 'status', 'reason', 'img', 'method'
    ];

    public function essay()
    {
        return $this->belongsTo(Essay::class, 'essay_id', 'id');
    }
}
