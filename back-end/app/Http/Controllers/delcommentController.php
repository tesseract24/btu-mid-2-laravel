<?php

namespace App\Http\Controllers;

use App\comments;
use Illuminate\Http\Request;



class delcommentController extends Controller
{

    public function index()
    {
        $comments = comments::inRandomOrder()->get();

        return view('Front-end/delcomment')->with('comments', $comments);
    }




    public function destroy(Request $request)
    {
        comments::where('id',$request->input('id'))->delete();
        return redirect()->back();
    }




}
