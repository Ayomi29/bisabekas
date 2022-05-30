<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'thumbnail', 'name', 'description', 'price', 'status', 'berat'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
