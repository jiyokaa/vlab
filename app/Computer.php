<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    //
    protected $table = 'computers'; //กำหนดชื่อตาราง

    protected $fillable = ['name','ip','link','lab_id'];//Mass Assignment

    public function lab(){

        return $this->belongTo(Lab::class,'lab_id');
    }
}
