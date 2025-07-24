<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Inertia\Inertia;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function get(){
        return Inertia::share('categories', 
            fn(Request $request) => Category::all() 
        );
    }

    public function getById($id)
    {
        return Inertia::share('category', 
        fn(Request $request) => Category::find($id) 
        );
    }

    public function renderById($id)
    {
        return Inertia::render('Category/View');
    }

    public function renderAll()
    {
        return Inertia::render('Category/List');
    }
}
