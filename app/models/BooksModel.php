<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BooksModel extends Model
{
    protected $table="book";
    public $timestamps=false;


    function students_list()
    {
    	return $this->belongsToMany("App\Models\StudentModel","std_book","book_id","student_id");
    }
}
