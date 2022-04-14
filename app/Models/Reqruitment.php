<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reqruitment extends Model
{
    use HasFactory;

    protected $fillable = [
        'karir_id',
        'reqruitment_detail',
    ];

    public function karirs(){
        return $this->belongsTo(Karir::class, 'karir_id', 'id');
    }
}
