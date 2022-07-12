<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'dob',
    ];

    public function keepers()
    {
        return $this->belongsToMany(Keeper::class);
    }
}
