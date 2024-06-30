<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name', 'avatar', 'last_online', 'ratings', 'followers', 'joined', 'response_rate',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function productDetails()
    {
        return $this->hasMany(ProductDetail::class, 'store_name', 'name');
    }
}
