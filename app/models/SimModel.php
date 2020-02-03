<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SimModel extends Model
{
    protected $table="user_sim";
    public $timestamps=false;



    function user_info()
    {
    	return $this->belongsTo("App\Models\UserModel","user_id");
    }
}
