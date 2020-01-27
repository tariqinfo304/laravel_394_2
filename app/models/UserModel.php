<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//for soft delete
use Illuminate\Database\Eloquent\SoftDeletes;

class UserModel extends Model
{

	use SoftDeletes;

    protected $table="users";
    public $timestamps  = false;
}
