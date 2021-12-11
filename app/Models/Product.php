<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price'];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function getPriceAttribute()
    {
        return $this->attributes['price'] / 100; // 1990 = 19.9
    }

    public function setPriceAttribute($attr)
    {
        return $this->attributes['price'] = $attr * 100; // 119.90 = 1990
    }


}
