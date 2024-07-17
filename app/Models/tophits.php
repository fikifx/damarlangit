<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tophits extends Model
{
    protected $fillable = [
        'judul_tophits',
        'url_tophits',
    ];
}
