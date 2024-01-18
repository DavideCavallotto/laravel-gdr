<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $guarded = [
        'password'
    ];

    public function type() {

        return $this->belongsTo(Type::class);
    }

    public function items() {

        return $this->belongsToMany(Item::class);
    }
}
