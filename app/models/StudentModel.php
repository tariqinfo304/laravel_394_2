<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    protected $table="students";
    public $timestamps = false;


    function books_list()
    {
    	return $this->belongsToMany("App\Models\BooksModel","std_book","student_id","book_id");
    }
}
