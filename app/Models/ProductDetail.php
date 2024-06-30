<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $fillable = [
        'product_id',
        'store_name',
        'rating_value',
        'rating_count',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    protected $table = 'product_details'; // Sesuaikan dengan nama tabel jika berbeda
    
    public function store()
    {
        return $this->belongsTo(Store::class, 'store_name', 'name');
    }
}
