<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DBAdvanceController extends Controller
{
    function adv_db()
    {
    	
    	/*
    	//simple fetching//
    	$res = DB::table("users")
    			->select('id','name')
    			->where("id",1)
    			->get();
    	
    	print_r($res);
		*/

    	/*
    	//One-To-One

    	$res = DB::table("users")
    			->join("address_info","users.id","=","address_info.user_id")
    			//->Leftjoin("user_address","users.id","=","user_address.user_id")
    			//->select("users.name","address_info.city")
    			//->select("users.name","address_info.*")
    			->get();
		
		dd($res);

		*/
    			
    	/*                  
    	//One-To-Many
    	$res = DB::table("users")
    			 ->join("user_sim","users.id","=","user_sim.user_id")
    			 ->select("users.name","user_sim.mobile_no")
    			 ->where("users.id",2)
    			 ->get();
		
		

		dd($res);
    	
    	*/

    	
    	//Many-To-Many
    	$res = DB::table("book")
    			->join("std_book","book.id","=","std_book.book_id")
    			->join("students","students.id","=","std_book.student_id");
    			//->select("students.name","book.name")
    			//->select("book.name as book_name","students.name as std_name")
    			//->get();

    	$book_name="book.name as book_name";
    	
    	$res = $res->groupBy("students.name");

    	$res = $res->addSelect($book_name);
    	$res = $res->addSelect("students.name as std_name");

    	$res = $res->get();


    	dd($res);
    	
    }	
}
