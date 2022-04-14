<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karir extends Model
{
    use HasFactory;

    protected $fillable = [
        'karir_position',
        'karir_detail',
        'karir_type',
    ];

    public function reqruitments(){
        return $this->hasMany(Reqruitment::class, 'karir_id');
    }

    public function tasks(){
        return $this->hasMany(Tasks::class, 'karir_id');
    }
}
