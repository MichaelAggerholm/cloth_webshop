<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showProducts() {
        $products = DB::table('products')
            ->leftJoin('categories', 'products.categoryId', '=', 'categories.category_id')
            ->rightJoin('brands', 'products.brandId', '=', 'brands.brand_id')
            ->get();
        return view('products', ['products'=>$products]);
    }
}
