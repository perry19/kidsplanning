<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keeper extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'surname',
        'dob',
        'email',
        'color',
        'user_id',
    ];

    public function kids()
    {
        return $this->belongsToMany(Kid::class);
    }
}
