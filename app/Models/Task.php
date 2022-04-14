<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'karir_id',
        'task_detail',
    ];

    public function karirs(){
        return $this->belongsTo(Karir::class, 'karir_id', 'id');
    }
}
