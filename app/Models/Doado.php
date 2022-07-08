<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doado extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name_pet',
        'specie',
        'subspecie',
        'color',
        'size',
        'user_id'
    ];
}
