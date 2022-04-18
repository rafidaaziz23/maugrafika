<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JasaThumb extends Model
{
    use HasFactory;

    protected $fillable = [
        'jasa_id',
        'thumb',
    ];

    public function jasa(){
        return $this->belongsTo(Jasa::class, 'jasa_id', 'id');
    }
}
