<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Misi extends Model
{
    use HasFactory;
    protected $fillable = [
        'misi_number',
        'misi_detail'
    ];
}
