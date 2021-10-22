<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    protected $table = 'role';

    const IS_ADMIN=1;
    const IS_MANAGER=2;
    const IS_CUSTOMER=3;

    public function user()
 	{
 		return $this->hasMany(User::class,'role_id','id');
 	}
}
