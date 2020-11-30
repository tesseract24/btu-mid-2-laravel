<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class addProductController extends Controller
{

    public function store(Request $req)
    {
        $name = $req->input('name');
        $slug = $req->input('slug');
        $details = $req->input('details');
        $price = $req->input('price');
        $description = $req->input('description');



        if ($file = $req -> file('file')){
            $filename = $file->getClientOriginalName();
        }


        $data = array('name' => $name, 'image' => $filename, 'slug' => $slug, 'details' => $details, 'price' => $price, 'description' => $description);
        DB::table('products')->insert($data);


        return redirect() -> back();
    }

}
