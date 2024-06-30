<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CategoryController extends Controller
{
    public function show($category)
    {
        // Ambil produk berdasarkan kategori
        $products = Product::where('category_id', $category)->get();

        return view('category', compact('products', 'category'));
    }
}
