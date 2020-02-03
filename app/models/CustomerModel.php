<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    
    protected $table="customer";
    protected $primaryKey = "cid";

    public $timestamps= false;



   function getNameAttribute($value)
   {
   		return ucfirst($value);
   }

   function setNameAttribute($value)
   {
   		$this->attributes["name"] = ucfirst($value);
   }


    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'name' => "tariq",
        "is_good" => 1
    ];
}
