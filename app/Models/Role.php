<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'role_nama',
        'role_is_active',
    ];

    // protected $table = [
    //     'roles'
    // ];

    // protected $primarykey = [
    //     'id'
    // ];

    public function users(){
        return $this->hasMany(User::class, 'user_role_id');
    }
}
