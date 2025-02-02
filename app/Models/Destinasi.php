<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    use HasFactory;

    protected $table = 'destinasis';

    protected $fillable = [
        'img',
        'negara',
        'desc',
        'foto',
        'slug'
    ];
}
