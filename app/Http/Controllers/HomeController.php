<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home;

class HomeController extends Controller
{
    //
    public function index(){
        return view('urwelcome',[
            'title' => home::first()->title,
        ]);
    }
}
