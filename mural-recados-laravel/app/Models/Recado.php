<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'cidade',
        'recado',
        'is_active'

    ];
}
