<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'bio',
        'difesa',
        'velocità',
        'hp',
        'updated_at',
        'created_at'
    ];
}
