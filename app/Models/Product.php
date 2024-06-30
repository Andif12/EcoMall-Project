<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'stock_quantity', 'category_id', 'image'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function details()
    {
        return $this->hasOne(ProductDetail::class, 'product_id');
    }

    public function getImagePathAttribute()
    {
        if ($this->category && $this->image) {
            return 'mall/img/Produk/' . $this->category->name . '/' . $this->image;
        }
        return null;
    }
}
