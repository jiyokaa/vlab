<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    //
    protected $table = 'labs'; //กำหนดชื่อตาราง

    protected $fillable = ['name','type','max_coms'];//Mass Assignment

    public function computers()
    {
        return $this->hasMany(Computer::class);
    }
}
