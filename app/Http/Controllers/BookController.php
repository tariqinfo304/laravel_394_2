<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookModel;

class BookController extends Controller
{
    function list()
    {
    	$list = BookModel::all();
    	return view("shop.book_list",["data" => $list]);
    }

    function book_form()
    {
    	return view("shop.book_form");
    }

    function save(Request $req)
    {
    	$obj = new BookModel();

    	$obj->store = $req->store;
    	$obj->coupon = $req->coupon;
    	$obj->save();

    	return redirect("book_list");
    }

}
