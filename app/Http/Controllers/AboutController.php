<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    //
    public function aboutMe(){
        return view('aboutme',[
            'title' => 'About Me',
            'nama' => About::first()-> nama,
            'job' => About::first()-> job,
            'nickname' => About::first()-> nickname,
            'lastname' => About::first()-> lastname,
            'ttl' => About::first()-> ttl,
            'negara' => About::first()-> negara,
            'agama' => About::first()-> agama,
            'alamat' => About::first()-> alamat,
            'telp' => About::first()-> telp,
            'email' => About::first()-> email,
        ]);
    }
}
