<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;


class ORMController extends Controller
{
    function orm()
    {
    	$user=  new UserModel();

    	//dd($user);
    	//$list = $user->all();
    	//dd($list);
    	/*
    	foreach ($list as $row) {
    		echo $row->name;
    	}
    	*/

//    	$user = $user->where("id" ,2)->get();
  		
  		//$user = $user->where(["id"=>2])->orWhere("name","altaf")->get();
  	  	
  	  	//$user = $user->first();
  	  	
  	  	//work on perimary key 
  	  //	print_r($user->find(1));

    	//return exception for 404 in case of not-found
    	//print_r($user->findOrFail(10));

    	/*
    	print_r(
    		$user->where("father_name","evs")->get()
    	);
    	*/


    	////////////////////
    	///////// Save /////

    	/*
    	$user = new UserModel();

    	$user->name= "Altaf hussain hali";
    	$user->father_name = " Hussain jamali";
    	$user->phone_no = "0232-23023203";
    	$user->gender ="male";

    	var_dump($user->save());

    	*/


    	/*

    	//edit//
    	$user = $user->find("2");
    	$user->name="Zeshan asif";
    	
    	var_dump($user->save());

    	*/

    	//Delete//

    	/*
    	//it will find out first then delete that record
    	$user = $user->find("2");
    	$is_deleted = $user->delete();
    	var_dump($is_deleted);
		*/


    	/*
    	//delete record directy in database if exist
		$res = $user->destroy([5]);
		var_dump($res);
		*/

		////////////////////////////
		//Soft Deleting
		//////////////////////////

		/*
		$user = $user->find("4");
    	//$is_deleted = $user->delete();
    	//var_dump($is_deleted);

		//it will remove un-deleted(soft) record from data base permanently
    	$is_deleted = $user->forceDelete();
    	var_dump($is_deleted);

    	*/

    }
}
