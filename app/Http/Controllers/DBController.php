<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class DBController extends Controller
{
    function db_index()
    {
    	echo "<pre>";
    	//select//
    	
    	/*
    	$obj = new stdClass();
    	$obj->name="wewe";
    	print_r($obj);
    	*/
    	
    	/*
    	$users_list = DB::select("SELECT * FROM users");
    	
    	//print_r($users_list);


    	//dd($users_list[0]);

    	foreach ($users_list as $row) {
    		//print_r($row);
    		echo $row->father_name."   =>   "  . $row->name . "<br/>" ;
    	}
    	*/
    	
   		 	
    	/*
    	The select method will always return an array of results. Each result within the array will be a PHP stdClass object, allowing you to access the values of the results
    	*/
    	//////////////////////////
    	//Using Named Bindings
    	/////////////////////////
    	
    	
    	//$sql = "select * from Users where id=1 and gender='male'";
    	//$users_list = DB::select($sql);
    	//dd($users_list);
    	
    	
 		//$users_list = DB::select("select * from Users where id=:id_value AND 		gender=:gen",["gen"=>"male",'id_value' => 1]);


 		//$users_list = DB::select("select * from Users where id=:id_value OR gender=:gen",["gen"=>"female",'id_value' => 1]);

    	//dd($users_list);
		

		////////////////////////
		//// Running An Insert Statement //
		////////////////////////////
    	
    /*	
$return_value = DB::insert('INSERT INTO Users (name,father_name,gender) VALUES (?, ?, ? )', 
			['evs jonaid','evs',"male"]);
		var_dump($return_value );
		
*/
		
/*		
$return_value = DB::insert('INSERT INTO Users (name,gender) VALUES (:name_value, :gen )', 
	['gen' => 'male', 'name_value' => 'evs_amdin']);
		var_dump($return_value );
	*/	

		///////////////////////
		/////Running An Update Statement
		/////////////////////////
		
		/*
		$affected = DB::update('UPDATE users SET name = "evs_updated",gender="female" 
			WHERE id = :id', ['id'=>3]);
		
		var_dump($affected) ;
		//return 1 => updated
		// 0 => not updated 
		
		*/


		///////////////////////////
		/////////Running A Delete Statement
		////////////////////////////
		/*
		$deleted = DB::delete('DELETE FROM users WHERE id =:id',["id" => 3]);
		var_dump($deleted);
		//return 1 => updated
		// 0 => not updated 
		*/

		//////////////////
		//Running A General Statement
		/////////////////

		//DB::statement('drop table book');
		//DB::statement('truncate table book');



		////////////////////////////
		//Listening For Query Events
		///////////////////////////
		// //it will run on very query for loging and debugging purpose
		//check AppServiceProbider Boot method



		///////////////////
		//Database Transactions
		///////////////////
		
		/*
		DB::transaction(function () {
		    DB::update('update users set name="evs updated" where id =:id',["id" => 1]);
		    DB::delete('delete from users where id=:id',["id" => 2]);
		});
		*/
		

		///////////////////
		//Manually Using Transactions
		////////////////////
		/*
		If you would like to begin a transaction manually and have complete control over rollbacks and commits, you may use the beginTransaction method on the DB facade:

		DB::beginTransaction();

		You can rollback the transaction via the rollBack method:

		DB::rollBack();

		Lastly, you can commit a transaction via the commit method:

		DB::commit();

		*/

		/*
		DB::beginTransaction();

		$deleted = DB::delete('DELETE FROM users WHERE id =:id',["id" => 1]);
		var_dump($deleted);

		print_r(DB::select("select * from users where id=1"));

		//DB::rollBack();
		DB::commit();
		*/
		
    }
}
