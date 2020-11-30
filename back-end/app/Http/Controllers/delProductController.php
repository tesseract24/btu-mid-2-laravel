<?php

namespace App\Http\Controllers;


use App\Product;
use App\Models\Products;

use Illuminate\Http\Request;

class delProductController extends Controller
{

    public function index()
    {
        $products = Product::inRandomOrder()->get();

        return view('Front-end/delproduct')->with('products', $products);
    }




    public function destroy(Request $request)
    {
        Product::where('id',$request->input('id'))->delete();
        return redirect()->back();
    }
}



