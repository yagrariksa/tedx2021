<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;

    protected $fillable = [
        'domisili', 'instagram', 'drive', 
        'uid', 'interview', 'lolos'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'uid', 'id');
    }
}
