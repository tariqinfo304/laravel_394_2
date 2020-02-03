<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\UserModel;
use App\Models\StudentModel;
use App\Models\SimModel;
use App\Models\BooksModel;
use App\Models\AddressModel;


use DB;


use App\Models\CustomerModel;

class ORMAdvanceController extends Controller
{
    
	
	function orm()
	{
		//$this->one_to_one();
		//$this->one_to_many();

		//$this->many_to_many();


		//$this->eager_loading();



		//detail about Model Object

		/*
		$c = new CustomerModel();

		$c->save();
			*/

		echo CustomerModel::find(1)->name;

	}



    function one_to_one()
    {
    	echo "<pre>";
    	
    	//Direct Relationship	
    	
        
    	$user = new UserModel();
    	$user = $user->find(1)->address;

    	/*
    	//inverse Relationship
    	$address = new AddressModel();
    	$user = $address->find("1")->user;
		*/

    	dd($user);
    }

    function one_to_many()
    {
    	
    	//direct 
    	
    	/*
        
    	$obj = new UserModel();
    	$obj = $obj->find(1)->sim_list;
    	dd($obj);
    	*/

        
    	/*
        
    	//inverse
        
    	$obj = new SimModel();
    	$obj = $obj->find(1)->user_info;
        dd($obj);

        */
             	
    }

    function many_to_many()
    {
    	echo "<pre>";

    	//direct//
    	
        
    	$obj = new StudentModel();
    	$books = $obj->find(1)->books_list;


    	dd($books);

    	

    	//die();

        

        
    	/*
    	//inverse//

    	$book = new BooksModel();
    	$std_list= $book->find(1)->students_list;


    	dd($std_list);
    	*/
        
    }


    function eager_loading()
    {	


    	//DB::enableQueryLog();

    	//$user = UserModel::with("address")->find(1);


    	//dd($user);

    	//$user->address;

    	//dd(DB::getQueryLog());

    	//dd($user);
    	
    	DB::enableQueryLog(); 

    	/*
    	//lazy loaded daat example//
    	
    	$post_list = UserModel::all();
    	foreach ($post_list as $row) {
    		$row->address;
    	}
    	*/

    	/*
    	//Eager Loaded daat example
    	//get all record before use
    	$user = UserModel::with("address","sim_list")->get();
		foreach ($user as $obj) {
		    $obj->address;
		}
		*/
		


    	dd(DB::getQueryLog());
    }
}
