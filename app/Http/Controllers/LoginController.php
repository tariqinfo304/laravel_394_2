<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    function login_Form()
    {
    	return view("shop.login_form");
    }
    function do_login(Request $req)
    {

    	//Encryption //


        /*
            Encrypted values are passed through serialize during encryption, which allows for encryption of objects and arrays. 
        
        //WE CAN PASS OBJECT AND ARRAY TO THI SFUNCTION 
           // encrypt(["123","@3"]);
            //decrypt
        */
        $user = new UserModel();	
       	
       	/*
        $encrypted =  encrypt("admin");
        echo  $encrypted ."</br>";
        dd(decrypt($encrypted));
    	*/

        /*
        $encrypted =  encrypt($user);
        echo  $encrypted ."</br>";
        
        dd(decrypt($encrypted));
        */

        /*
        
        $encrypted =  Crypt::encryptString("admin");
        echo Crypt::decryptString($encrypted);
        die();
        */
        
        
        
       	/*
        $hash_string = Hash::make("admin");
        

        echo $hash_string;
        
        echo "<br/>";

        var_dump(Hash::check('admin', $hash_string));
		
	*/
		$validator = Validator::make($req->all(), [
            'username' => 'required|min:4|max:25',
            'password' => 'required|min:4',
        	]);

  		if ($validator->fails()) {
            return redirect('login_form')
                        ->withErrors($validator)
                        ->withInput();
     	}



    	$user = $user->where("username",$req->username)->first();

    	if(Hash::check($req->password,$user->password))
    	{
    		session(["user_id"=>$user->id,"username" => $user->username
    			,"is_edit"=> 1 , "is_delete" => 0]);
    		//Do Logic for login ehere
    		return redirect("/shop");
    	}
    	else
    	{
    		return redirect('login_form')
                        ->withErrors($validator)
                        ->withInput();
    	}	
    }

    function logout()
    {
    	session()->forget("username");
    	session()->forget("id");
    	session()->flush();
    	return redirect("login_form");
    }
}
