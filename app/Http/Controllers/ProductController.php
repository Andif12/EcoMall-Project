<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function show($id){
        $product = Product::find($id);
    $relatedProducts = Product::where('category_id', $product->category_id)->limit(5)->get();

    return view('partials.lihatProduk', compact('product', 'relatedProducts'));
    }
    public function produk()
    {
        $products = Product::with(['category', 'details'])->get();
        
        return view('products.index', compact('products'));
    }
    // public function show($id)
    // {
    // $product = Product::with('details', 'category')->findOrFail($id);
    // $relatedProducts = Product::where('category_id', $product->category_id)
    //                           ->where('id', '!=', $id)
    //                           ->get();

    // return view('partials.lihatProduk', compact('product', 'relatedProducts'));
    // }

    public function recommendedProducts()
    {
        $user = Auth::user();

        $recommendedProducts = Product::where('user_id', $user->id)
                                       ->with(['category', 'details'])
                                       ->get();

        return view('your-view-file', compact('recommendedProducts'));
    }
}
