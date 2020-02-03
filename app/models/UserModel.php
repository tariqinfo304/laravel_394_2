<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//for soft delete
use Illuminate\Database\Eloquent\SoftDeletes;

class UserModel extends Model
{

	//use SoftDeletes;

    protected $table="users";
    public $timestamps  = false;

    function address()
    {
    	return $this->hasOne("App\Models\AddressModel","user_id","id");
    }
    

    function sim_list()
    {
    	return $this->hasMany("App\Models\SimModel","user_id");
    }
}
