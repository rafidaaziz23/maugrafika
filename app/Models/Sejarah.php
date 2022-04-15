<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model
{
    use HasFactory;
    protected $fillable = [
        'sejarah_judul',
        'sejarah_detail',
        'sejarah_image'
    ];
}
