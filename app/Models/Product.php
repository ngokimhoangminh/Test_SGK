<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Categories;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'products';

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function scopeActive($query, $status)
    {
        return $query->where('status', $status);
    }

    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }

    public function getNamePriceAttribute()
    {
        return "{$this->name} - {$this->price}đ";
    }

    public function getPriceAttribute($value)
    {
        return number_format($value, 0, ',', '.');
    }

    public function getDiscountAttribute($value)
    {
        return number_format($value, 0, ',', '.');
    }

    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = str_replace('.', '', $value);
    }

    public function setDiscountAttribute($value)
    {
        $this->attributes['discount'] = str_replace('.', '', $value);
    }
}