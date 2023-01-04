<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class AddressModel extends Model
{
    protected $table = "address";
    public $timestamps = false;

    public static function getAddress(){
        return DB::table("address")->where("email", "sharmarajat687@gmail.com")->get();
    } 
}