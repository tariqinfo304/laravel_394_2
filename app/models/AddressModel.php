<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddressModel extends Model
{
    
    protected $table="address_info";
    public $timestamps  = false;


    function user()
    {
    	return $this->belongsTo("App\Models\UserModel","user_id");
    }
}
