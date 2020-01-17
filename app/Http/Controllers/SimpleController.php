<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{

    function simple()
    {
    	echo "Request in Simple method of SimpleController";
    }

    function param($id)
    {
    	echo $id;
    }
    
    function req(Request $req,$id=23)
    {
    	//dd($req);
    	//echo $req->url();
    	//echo $req->fullurl();

    	//var_dump($req->name);

    	//echo $req->input("name");
    }
}

