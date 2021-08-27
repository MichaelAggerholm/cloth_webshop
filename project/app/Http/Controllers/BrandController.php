<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function showBrands() {
        $brands = DB::table('brands')->get();
        return view('brands', ['brands'=>$brands]);
    }
}
