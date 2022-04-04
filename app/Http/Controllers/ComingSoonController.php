<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comingsoon;

class ComingSoonController extends Controller
{
    //
    public function index(){
        return view('comingsoon',[
            'title' => comingsoon::first()->title,
        ]);
    }
}
