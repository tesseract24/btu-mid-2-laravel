<?php

namespace App\Http\Controllers;


use App\Product;
use App\comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::inRandomOrder()->get();

        $comments = comments::inRandomOrder()->get();



        return view('Front-end/index')->with(['products' => $products, 'comments' => $comments]);
    }




        public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $mightAlsoLike = Product::where('slug', "!=" ,$slug)->inRandomOrder()->take(4)->get();

        return view('Front-end/product')->with(['product' => $product, 'mightAlsoLike' => $mightAlsoLike]);
    }


    // public function search(Request $request){
    //     // Get the search value from the request
    //     $search = $request->get('search');

    //     // Search in the title and body columns from the posts table
    //     $posts = DB::table('posts')->where('name', 'LIKE', "%{$search}%")->get();

    //     // Return the search view with the resluts compacted
    //     return view('index', ['posts' => $posts]);
    // }



}