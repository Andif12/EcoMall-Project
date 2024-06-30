<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlashSaleProduct extends Model
{
    use HasFactory;

    protected $table = 'flash_sale_products';

    protected $fillable = [
        'name', 
        'description', 
        'price', 
        'discount_price', 
        'image', 
        'category', // Pastikan field 'category' ditambahkan di sini
    ];

    // Jika kolom 'image' menggunakan URL dari storage
    public function getImageUrlAttribute()
    {
        return asset($this->image);
    }
    

    public function getDiscountPercentageAttribute()
{
    return ($this->discount_price / $this->price) * 100;
}
    
}
