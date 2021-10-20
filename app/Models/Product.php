<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];

 	protected $table = 'products';

    public const IS_ACTIVE=1;

    public function scopeActive($query,$status)
    {
        return $query->where('status',$status);
    }

}
