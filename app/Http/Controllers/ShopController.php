<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class ShopController extends Controller
{
    
    function index()
    {
    	return view("shop.home",['title' => "Home"]);
    }

    function product()
    {
    	$list = ProductModel::all();
    	return view("shop.product",["title" => "Product","list" => $list]);
    }

    function add_form()
    {
    	return view("shop.add_product",["title" => "Add Product"]);
    }

    function save_product(Request $req)
    {	
    	$req->validate([
    		"name" => "required|min:5|max:20",
    		"price" => "required",
    		"quantity" => "required|integer"
    	]);
    }
    function edit(int $id)
    {

    }
    function delete(int $id)
    {

    }
}
