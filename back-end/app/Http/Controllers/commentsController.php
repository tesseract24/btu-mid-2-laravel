<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class commentsController extends Controller
{

    public function store(Request $req)
    {
        $fullname = $req->input('fullname');
        $comment = $req->input('comment');

        $data = array('fullname' => $fullname, 'comment' => $comment);
        DB::table('comments')->insert($data);


        return redirect() -> back();
    }
}
