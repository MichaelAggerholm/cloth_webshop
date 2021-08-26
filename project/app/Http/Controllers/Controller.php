<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function showProducts() {
        $products = DB::table('products')
            ->leftJoin('categories', 'products.categoryId', '=', 'categories.category_id')
            ->rightJoin('brands', 'products.brandId', '=', 'brands.brand_id')
            ->get();
        return view('products', ['products'=>$products]);
    }
}
