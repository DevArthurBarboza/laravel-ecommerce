<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function getAll()
    {
        return Inertia::share('products', 
        fn(Request $request) => Product::all()
        );
    }

    public function getById(Product $product)
    {
        return Inertia::share('product', 
        fn(Request $request) => $product
        );
    }

    public function renderById(Product $product)
    {
        return Inertia::render('Product/View', [
            'product' => $product->only(
                'name',
                'price',
                'stock_qty',
                'active'
            )
        ]);
    }

    public function renderAll()
    {
        return Inertia::render('Product/List', [
            'products' => Product::all()
        ]);
    }
}
