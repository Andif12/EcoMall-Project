<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FlashSaleProduct;
use App\Models\Product;
class HomeController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function index()
    {
        return view('index');
    }

    public function ourVision()
    {
        return view('ourVision');
    }

    public function homeShop()
{
    $flashSaleProducts = FlashSaleProduct::all();

    foreach ($flashSaleProducts as $product) {
        $category = $product->category;

        $product->imagePath = 'mall/img/Produk/' . $product->category . '/' . $product->image;

    }
    $promoProduct = $flashSaleProducts->random();

    $recommendedProducts = Product::with('details')->take(8)->get();

    return view('homeShop', compact('flashSaleProducts', 'promoProduct','recommendedProducts'));
}


    public function login()
    {
        return view('login');
    }

    public function profile()
    {
        return view('profile');
    }

    public function address()
    {
        return view('address');
    }
    
    public function redirectToLogin()
    {
        return redirect()->route('login');
    }

    public function callLogin(Request $request)
    {
        $loginController = new \App\Http\Controllers\Auth\LoginController();
        return $loginController->login($request);
    }
    
}
