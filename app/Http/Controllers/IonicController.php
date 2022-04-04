<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ionic;

class IonicController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function urwelcome(){
        $data=array(
            "title" => "Home"
        );
        return view('urwelcome',$data);
    }
    public function aboutMe(){
        $data=array(
            'title' => 'About Me',
            'nama' => Ionic::getNama(),
            'nickname' => Ionic::getNick(),
            'longname' => Ionic::getLast(),
            'job' => Ionic::getJob(2),
            'ttl' => Ionic::getTtl(),
            'negara' => Ionic::getNegara(),
            'agama' => Ionic::getAgama(),
            'alamat' => Ionic::getAlamat(),
            'telp' => Ionic::getTelp(),
            'email' => Ionic::getEmail()
        );
        return view('aboutme',$data);
    }
    public function comingsoon(){
        $data=array(
            'title' => 'Coming Soon'
        );
        return view('comingsoon',$data);
    }
    public function comment(){
        $data=array(
            'title' => 'Comment'
        );
        return view('comment',$data);
    }
}
