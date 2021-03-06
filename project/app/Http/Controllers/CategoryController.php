<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function showCategories() {
        $categories = DB::table('categories')->get();
        return view('/navbar', ['categories'=>$categories]);
    }
}
