<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;

class CommentController extends Controller
{
    //
    public function index(){
        return view('comment',[
            'title' => comment::first()->title,
        ]);
    }
}
