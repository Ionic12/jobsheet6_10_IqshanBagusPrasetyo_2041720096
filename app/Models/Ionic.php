<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ionic extends Model{
    public static function getNama(){
        return $nama="Iqshan Bagus Prasetyo";;
    }
    public static function getJob($code){
        if($code === 1){
            $job="College Student";
        }
        else{
            $job="Freelancer";
        }
        return $job;
    }
    public static function getNick(){
        return $nickname='Iqshan';
    }
    public static function getLast(){
        return $lastname='Bagus Prasetyo';
    }
    public static function getTtl(){
        return $ttl='29 Februari 2202';
    }
    public static function getNegara(){
        return $negara='Indonesia';
    }
    public static function getAgama(){
        return $agama='Islam';
    }
    public static function getAlamat(){
        return $alamat='Sudimoro Street';
    }
    public static function getTelp(){
        return $telp='0896303037xx';
    }
    public static function getEmail(){
        return $email='bagusiqshan81@gmail.com';
    }
}
